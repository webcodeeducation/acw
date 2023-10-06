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

    <meta name="keyword" content="Allcodingword, allcodingworld.com, git tutorial, git commands, git basics, how to use github, how to work with git">

	<meta name="robots" content="noindex, nofollow">

    <meta name="author" content="Laxman rana">

    <title>Allcodingworld - All coding at one place</title>



    <!-- Bootstrap Core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom CSS -->

    <link href="css/modern-business.css" rel="stylesheet">



    <!-- Custom Fonts -->

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



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
$select=mysqli_query($conn, "select * from acw_comments LIMIT 10");

while($row=mysqli_fetch_array($select))
{
	?>

                <!--h3>Blogger Name: <?php //echo $row['name']; ?>
				<p class="lead"> by <a href="mailto:<?php //echo $row['email']; ?>" style="text-decoration:none;"><?php //echo $row['email']; ?></a></p>
                </h3>
				
                <p><i class="fa fa-clock-o"></i> Posted on August 28, 2013 at 10:00 PM</p>

                <hr>

                <a href=""><img class="img-responsive img-hover" src="http://placehold.it/900x300" alt="">

                </a>

                <hr>

                <p><?php //echo $row['comment']; ?></p>

                <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a-->
				

<!-- /thumbnail -->
				<div class="panel panel-default">
<div class="panel-heading">
<strong><?php echo $row['name']; ?></strong> <span class="text-muted">commented 5 days ago</span>
</div>
<div class="panel-body">
Panel content
</div><!-- /panel-body -->
</div><!-- /panel panel-default -->
				
				
				<!-- First Blog Post End -->
						<?php }
			mysqli_close($conn);

						?>

                <!-- Pager -->

                <ul class="pager">

                    <li class="previous">

                        <a href="#">&larr; Older</a>

                    </li>

                    <li class="next">

                        <a href="#">Newer &rarr;</a>

                    </li>

                </ul>



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



    <!-- Bootstrap Core JavaScript -->

    <script src="js/bootstrap.min.js"></script>

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

