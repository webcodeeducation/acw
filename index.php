<?php
error_reporting(0);
// grab recaptcha library
require_once "inc/recaptchalib.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Google Ads Code-->
<!--script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script-->
<!--script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-1097753111637356",
    enable_page_level_ads: true
  });
</script-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Allcodingworld is a place where you can find all coding stuff with example and demos. Allcodingworld presenting easy demonstration of coding stuff with videos tutorials. Here you can see all tutorial and learn with easily step by step.">
	<meta name="keyword" content="Allcodingword, allcodingworld.com, all coding, all coding world, coding, coding stuff, videso tutorial, php, java, wordpress, Hibernate, Spring, Unix, Linux, smartgit, tortoise svn, github desktop,svn commands">
	<meta name="robots" content="index, follow">
	<meta name="author" content="Laxman rana">
	<meta name="msvalidate.01" content="6EB415C0CA3EC1B9E078E05BE43790E8" />
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
<?php //include 'inc/Top_bar.php';
 ?>
<?php include 'inc/header.php';
 ?>


    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!--div class="fill" style="background-image:url('images/1.png&text=Version control system');"></div-->
				<div class="fill" style="background-image:url('images/allcodingworld1.png');"></div>
                <div class="carousel-caption">
                    <!--h2>Version Control System</h2-->
                </div>
            </div>
            <div class="item">
                <!--div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=VCS Benefits');"></div-->
				<div class="fill" style="background-image:url('images/allcodingworld2.png');"></div>
                <div class="carousel-caption">
                    <!--h2>Benifits of VCS</h2-->
                </div>
            </div>
            <div class="item">
                <!--div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=VCS Tools');"></div-->
				<div class="fill" style="background-image:url('images/allcodingworld3.png');"></div>
                <div class="carousel-caption">
                    <!--h2>VCS Tools</h2-->
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Allcodingworld
                </h1>
            </div>
			            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Learn VCS?</h4>
                    </div>
                    <div class="panel-body">
                        <p>Version Control System (VCS) is a software that helps software developers to work together and maintain a complete history of their work. Learn more about it?</p>
                        <a href="vcs-tutorial.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> TortoiseSVN</h4>
                    </div>
                    <div class="panel-body">
                        <p>TortoiseSVN runs on Windows Vista or higher and is available in both 32-bit and 64-bit flavours. The installer for 64-bit Windows also includes the 32-bit extension parts.</p>
                        <a href="tortoisesvn-tutorial.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> SmartGit</h4>
                    </div>
                    <div class="panel-body">
                        <p>SmartGit is a graphical Git and Mercurial client which can also connect to SVN repositories. SmartGit runs on Linux, Mac OS X (10.7 or newer) and Windows (Vista or newer).</p>
                        <a href="smartgit-tutorial.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
		<div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-cloud-download"></i> Github?</h4>
                    </div>
                    <div class="panel-body">
                        <p>GitHub is a code hosting platform for version control and collaboration. It lets you and others work together on projects from anywhere.</p>
                        <a href="github-tutorial.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-code"></i> Github Commands</h4>
                    </div>
                    <div class="panel-body">
                        <p>Basic Git commands: git init, git clone /path/to/repository, git clone username@host:/path/to/repository, git add *.</p>
                        <a href="github-commands-tutorial.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-cog"></i> Advanced in Branch, Rollback</h4>
                    </div>
                    <div class="panel-body">
                        <p>Commits, Update, conflicts and rollback is very basic operation in vcs and very usefull operation to use every time.</p>
                        <a href="advanced-tutorial.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Tools used in VCS:</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="git-tutorial.php">
                    <img class="img-responsive img-portfolio img-hover" src="images/tool1.png" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="github-tutorial.php">
                    <img class="img-responsive img-portfolio img-hover" src="images/tool2.png" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="smartgit-tutorial.php">
                    <img class="img-responsive img-portfolio img-hover" src="images/tool3.png" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="tortoisesvn-tutorial.php">
                    <img class="img-responsive img-portfolio img-hover" src="images/tool4.png" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="bitbucket-tutorial.php">
                    <img class="img-responsive img-portfolio img-hover" src="images/tool5.png" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="visualsvn-tutorial.php">
                    <img class="img-responsive img-portfolio img-hover" src="images/tool6.png" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Allcodingworld includes tools & technology:</h2>
            </div>
            <div class="col-md-6">
                <p>Allcodingworld includes:</p>
                <ul>
		<li><strong>TortoiseSVN</strong></li>
		<li><strong>SmartGit</strong></li>
		<li><strong>Github</strong></li>
		<li><strong>VisualSVN Manager</strong></li>
		<li><strong>All basic commands</strong></li>
                <li>Bootstrap</li>
                <li>jQuery</li>
                <li>Ajax</li>
                <li>Working PHP with example</li>
		<li>Working Java with example</li>
		<li>Working Wordpress with example</li>
                <li>Pagination with Jquery, PHP, Java, Bootstrap & Datatables plugin etc.</li>
                 <li>HTML pages</li>
                </ul>
                <p>Click above any one technology or tools to learn more and see how they work with codes and example. Learning with example and step by step to grow more in this technologies.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="images/code-once.png" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Contact us and feel free to call any time to schedule your session to learn these tools and technology.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="/contact.php">Call to Action</a>
                </div>
            </div>
        </div>

        <hr>

    </div>
    <!-- /.container -->

<?php include 'inc/footer.php';
 ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
        <script src="js/global.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
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
