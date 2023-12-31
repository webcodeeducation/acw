<?php

// Error reporting:
error_reporting(E_ALL^E_NOTICE);
//error_reporting(0);

require_once('config.php');
//include "connect.php";
include 'comment.class.php';

/*
/	This array is going to be populated with either
/	the data that was sent to the script, or the
/	error messages.
/*/

$arr = array();
$validates = Comment::validate($arr);

if($validates)
{
	/* Everything is OK, insert to database: */
	
	mysqli_query($conn,"INSERT INTO comments(name,url,email,body) VALUES ( 	'".$arr['name']."',	'".$arr['url']."',	'".$arr['email']."', '".$arr['body']."'	)") or die(mysqli_error());
	
	// Perform a query, check for error
	if (!mysqli_query($conn,"INSERT INTO comments(name,url,email,body) VALUES ( '".$arr['name']."',	'".$arr['url']."',	'".$arr['email']."', '".$arr['body']."'	)"))
	  {
	  echo("Error description: " . mysqli_error($conn));
	  }
	
	$arr['dt'] = date('r',time());
	//$arr['id'] = mysqli_insert_id();
	
	/*
	/	The data in $arr is escaped for the mysql query,
	/	but we need the unescaped variables, so we apply,
	/	stripslashes to all the elements in the array:
	/*/
	
	$arr = array_map('stripslashes',$arr);
	
	$insertedComment = new Comment($arr);

	/* Outputting the markup of the just-inserted comment: */

	echo json_encode(array('status'=>1,'html'=>$insertedComment->markup()));

}
else
{
	/* Outputtng the error messages */
	echo '{"status":0,"errors":'.json_encode($arr).'}';
}

?>