<?php

class Comment
{
	private $data = array();
	
	public function __construct($row)
	{
		/*
		/	The constructor
		*/
		
		$this->data = $row;
	}
	
	public function markup()
	{
		/*
		/	This method outputs the XHTML markup of the comment
		*/
		
		// Setting up an alias, so we don't have to write $this->data every time:
		$d = &$this->data;
		
		$link_open = '';
		$link_close = '';
		

				
		if($d['url']){
			
			// If the person has entered a URL when adding a comment,
			// define opening and closing hyperlink tags
			
			$link_open = '<a href="'.$d['url'].'">';
			$link_close =  '</a>';
		}
		
		// Converting the time to a UNIX timestamp:
		$d['dt'] = strtotime($d['dt']);
		//$date = strtotime($d['dt']);
		$time = date('H:m:s', $d['dt']);
		
		// Needed for the default gravatar image:
		$url = 'http://'.dirname($_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]).'/images/user_acw.jpg';
		
		return '
		
            <div class="panel panel-white post panel-shadow">
                <div class="post-heading">
                    <div class="pull-left image usrpic">
                        '.$link_open.'
					<img src="http://www.allcodingworld.com/images/user_acw.jpg" height="50" width="50"/>
					'.$link_close.'
                    </div>
                    <div class="pull-left meta">
                        <div class="title h5">
                            <a href="#"><b>'.$link_open.$d['name'].$link_close.'</b></a>
                            made a comment.
                        </div>
                        <h6 class="text-muted time">'.date('d M Y',$d['dt']).' at '.$time.'</h6>
                    </div>
                </div> 
                <div class="post-description"> 
                    <p>'.$d['body'].'</p>
                    <div class="stats">
                        <!--a href="#" class="btn btn-default stat-item btnlikeit">
                         <i class="fa fa-thumbs-up icon btnlikeus" id="'.$d['id'].'"></i> '.$d['cmt_likeus'].'   
                        </a-->
						                        <!--a href="#" class="btn btn-default stat-item btndislike">
                            <i class="fa fa-thumbs-down icon" id="'.$d['id'].'"></i> '.$d['cmt_dislike'].'
                        </a-->
						
						<!-- Like Icon HTML -->
						<span class="glyphicon glyphicon-thumbs-up btnlike" id='.$d['id'].'><span class="counter" id="">'.$d['cmt_likeus'].'</span></span>

						<!-- Dislike Icon HTML -->
                <span class="glyphicon glyphicon-thumbs-down btndislike" id='.$d['id'].'><span class="counter" id="">'.$d['cmt_dislike'].'</span></span>
                    </div>
                </div>
            </div>
		';
	}
	
	public static function validate(&$arr)
	{
		/*
		/	This method is used to validate the data sent via AJAX.
		/
		/	It return true/false depending on whether the data is valid, and populates
		/	the $arr array passed as a paremter (notice the ampersand above) with
		/	either the valid input data, or the error messages.
		*/
		
		$errors = array();
		$data	= array();
		
		// Using the filter_input function introduced in PHP 5.2.0
		
		if(!($data['email'] = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)))
		{
			$errors['email'] = 'Please enter a valid Email.';
		}
		
		if(!($data['url'] = filter_input(INPUT_POST,'url',FILTER_VALIDATE_URL)))
		{
			// If the URL field was not populated with a valid URL,
			// act as if no URL was entered at all:
			
			$url = '';
		}
		
		// Using the filter with a custom callback function:
		
		if(!($data['body'] = filter_input(INPUT_POST,'body',FILTER_CALLBACK,array('options'=>'Comment::validate_text'))))
		{
			$errors['body'] = 'Please enter a comment body.';
		}
		
		if(!($data['name'] = filter_input(INPUT_POST,'name',FILTER_CALLBACK,array('options'=>'Comment::validate_text'))))
		{
			$errors['name'] = 'Please enter a name.';
		}
		
		if(!empty($errors)){
			
			// If there are errors, copy the $errors array to $arr:
			
			$arr = $errors;
			return false;
		}
		
		// If the data is valid, sanitize all the data and copy it to $arr:
		
		foreach($data as $k=>$v){
			//$arr[$k] = mysql_real_escape_string($v);
			$arr[$k] = mysql_real_escape_string($v);
		}
		
		// Ensure that the email is lower case:
		
		$arr['email'] = strtolower(trim($arr['email']));
		
		return true;
		
	}

	private static function validate_text($str)
	{
		/*
		/	This method is used internally as a FILTER_CALLBACK
		*/
		
		if(mb_strlen($str,'utf8')<1)
			return false;
		
		// Encode all html special characters (<, >, ", & .. etc) and convert
		// the new line characters to <br> tags:
		
		$str = nl2br(htmlspecialchars($str));
		
		// Remove the new line characters that are left
		$str = str_replace(array(chr(10),chr(13)),'',$str);
		
		return $str;
	}

}

?>