<?php
include 'bin/config.php';
?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Allcodingworld is a place where you can find all coding stuff with example and demos. Allcodingworld create your own blog and connect with professionals. Here you can see all find and see all videos link to learn with easily step by step.">

    <meta name="keyword" content="Allcodingword, allcodingworld.com, create a blog on git, blog on vcs, blog on github, git tutorial, git commands, git basics, how to use github, how to work with git">

	<meta name="robots" content="noindex, nofollow">

    <meta name="author" content="Laxman rana">



    <title>create a Blogs at Allcodingworld - All coding at one place</title>



    <!-- Bootstrap Core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom CSS -->

    <link href="css/modern-business.css" rel="stylesheet">



    <!-- Custom Fonts -->

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	    <!-- jQuery -->

    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->

    <script src="js/bootstrap.min.js"></script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

		  <script>
jQuery(document).ready(function($){
    $('.submitblog').click(function(){
        //$(this).hide();
		var data = $('form').serialize();
		alert(data);
    });

	
});
</script>	


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

                <h1 class="page-header">Blog Post

                    <small>by <a href="#">allcodingworld</a>

                    </small>

                </h1>

                <ol class="breadcrumb">

                    <li><a href="index.php">Home</a>

                    </li>

                    <li class="active">Blog Post</li>

                </ol>

            </div>

        </div>

        <!-- /.row -->



        <!-- Content Row -->

        <div class="row">



            <!-- Blog Post Content Column -->

            <div class="col-lg-8">



                <!-- Blog Post -->



                <hr>



                <!-- Date/Time -->

                <!--p><i class="fa fa-clock-o"></i> Posted on August 24, 2013 at 9:00 PM</p-->



                <hr>



                <!-- Preview Image -->

                <img class="img-responsive" src="media/blog-post1.png" alt="Allcodingworld Blog">



                <hr>



                <!-- Post Content -->

                <p class="lead">Create a blog and share your thoughts with us. Welcome to all blogger and specially thanks who like blog ever...</p>

                <p>Create a blog here and Enjoy...</p>

                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->

                <div class="well">

                    <!--h4>Leave a Comment:</h4-->

                    <form role="form" action="" method="post">
					  <div class="form-group">
					<label for="name">Name:</label>
					<input type="text" class="form-control" id="name" placeholder="Enter name">
				  </div>
									  <div class="form-group">
					<label for="email">Email address:</label>
					<input type="email" class="form-control" id="email" placeholder="Enter email">
				  </div>
					<div class="form-group">
					<label for="website">Website:</label>
					<input type="text" class="form-control" id="website" placeholder="Enter website">
				  </div>
                  <div class="form-group">
				  <label for="comment">Comment:</label>
                   <textarea class="form-control" rows="3" placeholder="Enter your comment"></textarea>
                   </div>
                    <button type="submit" name="submit" class="btn btn-primary submitblog">Submit</button>

                    </form>

                </div>
				

                <hr>



                <!-- Posted Comments -->



                <!-- Comment -->

                <!--div class="media">

                    <a class="pull-left" href="#">

                        <img class="media-object" src="http://placehold.it/64x64" alt="">

                    </a>

                    <div class="media-body">

                        <h4 class="media-heading">allcodingworld

                            <small>August 25, 2014 at 9:30 PM</small>

                        </h4>

                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

                    </div>

                </div-->



                <!-- Comment -->

                <!--<div class="media">

                    <a class="pull-left" href="#">

                        <img class="media-object" src="http://placehold.it/64x64" alt="">

                    </a>

                    <div class="media-body">

                        <h4 class="media-heading">allcodingworld

                            <small>August 25, 2014 at 9:30 PM</small>

                        </h4>

                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

                        <!-- Nested Comment -->

                        <!--div class="media">

                            <a class="pull-left" href="#">

                                <img class="media-object" src="http://placehold.it/64x64" alt="">

                            </a>

                            <div class="media-body">

                                <h4 class="media-heading">allcodingworld

                                    <small>August 25, 2014 at 9:30 PM</small>

                                </h4>

                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

                            </div>

                        </div>

                        <!-- End Nested Comment -->

                    <!--/div>

                </div-->



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

                    </div>

                    <!-- /.row -->

                </div>



                <!-- Side Widget Well -->

                <div class="well">

                    <h4>allcodingworld.com</h4>

                    <p>Connect with other professional blogger like you and share your thoughts.</p>

                </div>



            </div>



        </div>

        <!-- /.row -->
							<?php
if(isset($_POST["submit"]))
{
 
 //Including dbconfig file.
//include 'dbconfig.php';
 
$name = $_POST["name"];
$email = $_POST["email"];
$website = $_POST["website"];
$comment = $_POST["comment"];
 
mysqli_query($conn,"INSERT INTO acw_comments (name,email,website,comment,likeus,dislike) VALUES ('$name','$email','$website','$comment','','')");
//mysqli_query($conn,"INSERT INTO acw_comments (name,email,website,comment,likeus,dislike) VALUES ('name','email','website','comment','','')");

echo ' <div class="form-group">
       <div class="col-sm-4"><center> Comment Successfully Submitted </center></div></div>';

}
//header("Location: comments2.php");

 ?>


        <hr>



        <?php

	include 'inc/footer.php';

	?>



    </div>

    <!-- /.container -->
	
	
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

