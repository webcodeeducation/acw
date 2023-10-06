<?php
error_reporting(0);
include 'bin/config.php';
?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Allcodingworld is a place where you can find all coding stuff with example and demos. Allcodingworld create your own blog and connect with professionals. Here you can see all find and see all videos link to learn with easily step by step.">

    <meta name="keyword" content="Allcodingword, allcodingworld.com, git tutorial, git commands, git basics, how to use github, how to work with git">

	<meta name="robots" content="index, follow">

    <meta name="author" content="Laxman rana">

    <title>Allcodingworld - All coding at one place</title>



    <!-- Bootstrap Core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom CSS -->

    <link href="css/modern-business.css" rel="stylesheet">



    <!-- Custom Fonts -->

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- Pagination Css -->
	<link rel="stylesheet" href="css/simplePagination.css" />



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->



</head>



<body>

        <?php

	include 'inc/header.php';

	?>



    <!-- Page Content -->

    <div class="container">



        <!-- Page Heading/Breadcrumbs -->

        <div class="row">

            <div class="col-lg-12">

                <h1 class="page-header">Blog Home

                    <small>Create your blog here</small>

                </h1>

                <ol class="breadcrumb">

                    <li><a href="index.php">Home</a>

                    </li>

                    <li class="active">Blog Home</li>

                </ol>

            </div>

        </div>

        <!-- /.row -->



        <div class="row">



            <!-- Blog Entries Column -->

            <div class="col-md-8">



                <!-- First Blog Post Start -->
				
				<?php
				//for total count data
				$countSql = "SELECT COUNT(id) FROM acw_comments";  
				$tot_result = mysqli_query($conn, $countSql);
				$limit = 4;
				$row = mysqli_fetch_row($tot_result);  
				$total_records = $row[0];  
				$total_pages = ceil($total_records / $limit);
				
				//for first time load data
				if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
				$start_from = ($page-1) * $limit;
				
				$select=mysqli_query($conn, "SELECT * FROM acw_comments order by id DESC LIMIT $limit");

				while($row=mysqli_fetch_array($select))
				{
					?>
				<div class="panel panel-default">
				<div class="panel-heading">
				<strong><?php echo $row['name']; ?></strong> <span class="text-muted">commented<!-- on 5 days ago --></span>
				</div>
				<div class="panel-body">
				<?php echo $row['comment']; ?>
				        <div class="stats">
                        <a href="#" class="btn btn-default stat-item btnlikeus">
                            <i class="fa fa-thumbs-up icon" id="<?php echo $row['id']; ?>"></i> <?php echo $row['likeus']; ?>
                        </a>
                        <a href="#" class="btn btn-default stat-item btndislike">
                            <i class="fa fa-thumbs-down icon" id="<?php echo $row['id']; ?>"></i> <?php echo $row['dislike']; ?>
                        </a>
                    </div>
				</div><!-- /panel-body -->
				<footer class="reply comment-reply panel-footer"><button class="btn btn-primary btnreply">Reply</button></footer>

				</div><!-- /panel panel-default -->
			<div id="respond" class="comment-respond"  style="display:none;">
<h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link btn btn-cancle-reply" href="">Cancel Reply</a></small></h3> <form action="" method="post" id="commentform" class="comment-form" novalidate="">
<p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p><p><textarea placeholder="Start typing..." id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>
<p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text" class="form-control" value="" size="30" maxlength="245" aria-required="true" required="required"></p>
<p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" class="form-control" value="" size="30" maxlength="100" aria-describedby="email-notes" aria-required="true" required="required"></p>
<p class="comment-form-url"><label for="url">Website</label> <input id="url" name="url" type="url" class="form-control" value="" size="30" maxlength="200"></p>
<p class="form-submit"><input name="submit" type="submit" id="commentsubmit" class="submit btn btn-primary" value="Post Comment"> <input type="hidden" name="comment_post_ID" value="155" id="comment_post_ID">
<input type="hidden" name="comment_parent" id="comment_parent" value="1499">
</p><p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="c228b8f510"></p><p class="comment-subscription-form"><input type="checkbox" name="subscribe_blog" id="subscribe_blog" value="subscribe" style="width: auto; -moz-appearance: checkbox; -webkit-appearance: checkbox;"> <label class="subscribe-label" id="subscribe-blog-label" for="subscribe_blog">Notify me of new posts by email.</label></p><p style="display: none;"></p> <input type="hidden" id="ak_js" name="ak_js" value="1487066786086"></form>
</div>
				
				
				<!-- First Blog Post End -->
				<?php }
					// Close connection
					//mysqli_close($conn); ?>

                <!-- Pager -->

                <!--ul class="pager">

                    <li class="previous">

                        <a href="#">&larr; Older</a>

                    </li>

                    <li class="next">

                        <a href="#">Newer &rarr;</a>

                    </li>

                </ul-->
				
<nav><ul class="pagination">
<?php if(!empty($total_pages)):for($i=1; $i<=$total_pages; $i++):  
            if($i == 1):?>
            <li class='active'  id="<?php echo $i;?>"><a href='blogpagination.php?page=<?php echo $i;?>'><?php echo $i;?></a></li> 
            <?php else:?>
            <li id="<?php echo $i;?>"><a href='blogpagination.php?page=<?php echo $i;?>'><?php echo $i;?></a></li>
        <?php endif;?>          
<?php endfor;endif;?>
</ul></nav>
				


            </div>



            <!-- Blog Sidebar Widgets Column -->

            <div class="col-md-4">



                <!-- Blog Search Well -->

                <div class="well">

                    <h4>Blog Search</h4>

                    <div class="input-group">

                        <input type="text" class="form-control">

                        <span class="input-group-btn">

                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>

                        </span>

                    </div>

                    <!-- /.input-group -->

                </div>



                <!-- Blog Categories Well -->

                <div class="well">

                    <h4>Blog Categories</h4>

                    <div class="row">

                        <div class="col-lg-6">

                            <ul class="list-unstyled">

                                <li><a href="#">VCS</a>

                                </li>

                                <li><a href="#">Git</a>

                                </li>

                                <li><a href="#">Github</a>

                                </li>

                                <li><a href="#">SVN</a>

                                </li>

                            </ul>

                        </div>

                        <!-- /.col-lg-6 -->

                        <div class="col-lg-6">

                            <ul class="list-unstyled">

                                <li><a href="#">TortoiseSVN</a>

                                </li>

                                <li><a href="#">Bitbucket</a>

                                </li>

                                <li><a href="#">SmaartGit</a>

                                </li>

                                <li><a href="#">VisualSVN</a>

                                </li>

                            </ul>

                        </div>

                        <!-- /.col-lg-6 -->

                    </div>

                    <!-- /.row -->

                </div>



                <!-- Side Widget Well -->

                <div class="well">

                    <h4>Allcodingworld.com</h4>

                    <p>Create your blog and connect with professional blogger.</p>

                </div>



            </div>



        </div>

        <!-- /.row -->



        <hr>



        <?php

	include 'inc/footer.php';

	?>



    </div>

    <!-- /.container -->



    <!-- jQuery -->

    <script src="js/jquery.js"></script>
	
	<script src="js/jquery.simplePagination.js"></script>
	
    <!-- Bootstrap Core JavaScript -->

    <script src="js/bootstrap.min.js"></script>

	<script src="js/global.js"></script>
	
	<script type="text/javascript">
$(document).ready(function(){
$('.pagination').pagination({
        items: <?php echo $total_records;?>,
        itemsOnPage: <?php echo $limit;?>,
        cssStyle: 'light-theme',
		currentPage : 1,
		onPageClick : function(pageNumber) {
			//jQuery("#target-content").html('loading...');
			jQuery("#target-content").html('<button class="btn btn-success btn-xs"><i class="fa fa-circle-o-notch fa-spin"></i> Loading</button>');
			jQuery("#target-content").load("pagination.php?page=" + pageNumber);
		}
    });
});
</script>
	
	

<!-- Google Analytics Code Start -->

<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-91084936-1', 'auto');

  ga('send', 'pageview');



</script>

<!-- Google Analytics Code End -->

</body>


</html>

