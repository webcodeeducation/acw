<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="allcodingworld.com is a online portal to learn all about bitbucket tutorial and more depth to use.">
	<meta name="keyword" content="Allcodingword, allcodingworld.com, online study of bitbucket, bitbucket tutorial, download projects, student project, college projects, java projects, php projects, wordpress projects, angualrjs projects, coding stuff, videso tutorial, php, java, wordpress, Hibernate, Spring, Unix, Linux, smartgit, tortoise svn, github desktop,svn commands">
	<meta name="robots" content="index, follow">
    <meta name="author" content="Laxman rana">



    <title>VisualSVN tutorial at Allcodingworld - All coding at one place</title>



    <!-- Bootstrap Core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom CSS -->

    <link href="css/modern-business.css" rel="stylesheet">
	<link href="css/socialbar.css" rel="stylesheet">



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
	
			<!-- BackToTop Button -->

<a href="javascript:void(0);" id="scroll" title="Scroll to Top"

style="display: none;">Top<span></span></a>

    <!-- Page Content -->

    <div class="container">



        <!-- Page Heading/Breadcrumbs -->

        <div class="row">

            <div class="col-lg-12">

                <h1 class="page-header">VisualSVN

                    <small>allcodingworld</small>

                </h1>

                <ol class="breadcrumb">

                    <li><a href="index.php">Home</a>

                    </li>

                    <li class="active">VisualSVN Manager</li>

                </ol>

            </div>

        </div>

        <!-- /.row -->



        <!-- Content Row -->

        <div class="row">

            <!-- Sidebar Column -->

            <div class="col-md-3">

                <div class="list-group">

                    <a href="#" class="list-group-item active">Home</a>

                    <a href="#" class="list-group-item">Basics</a>

                    <a href="#" class="list-group-item">Installation</a>

                    <a href="#" class="list-group-item">Setup</a>
					
					<a href="#" class="list-group-item">How to use VisualSVN Server</a>

                    <a href="#" class="list-group-item">Main Directories</a>

                    <a href="#" class="list-group-item">Connecting from TortoiseSVN</a>

                    <a href="#" class="list-group-item">Creating User & Group</a>

                    <a href="#" class="list-group-item">Migration from git to smartgit</a>

                    <a href="#" class="list-group-item">Eclipse SVN integration</a>

                    <a href="#" class="list-group-item">How to setup SVN Server</a>

                    <a href="#" class="list-group-item active">Advanced</a>

                    <a href="faq.php" class="list-group-item">FAQ</a>

                    <a href="pricing.php" class="list-group-item">Join Session</a>

                </div>
				
				<aside id="sticky-social">
				<ul>
					<li><a href="https://facebook.com/allcodingworld" class="entypo-facebook" target="_blank"><span>Facebook</span></a></li>
					<li><a href="https://twitter.com/allcodingworld" class="entypo-twitter" target="_blank"><span>Twitter</span></a></li>
					<li><a href="https://plus.google.com/102966882816144079027" class="entypo-gplus" target="_blank"><span>Google+</span></a></li>
					<li><a href="https://in.linkedin.com/in/allcodingworld-codes-143584137" class="entypo-linkedin" target="_blank"><span>LinkedIn</span></a></li>
					<li><a href="#" class="entypo-instagrem" target="_blank"><span>Instagram</span></a></li>
					<li><a href="#" class="entypo-stumbleupon" target="_blank"><span>StumbleUpon</span></a></li>
					<li><a href="#" class="entypo-pinterest" target="_blank"><span>Pinterest</span></a></li>
					<li><a href="#" class="entypo-flickr" target="_blank"><span>Flickr</span></a></li>
					<li><a href="#" class="entypo-tumblr" target="_blank"><span>Tumblr</span></a></li>
				</ul>
			</aside>

            </div>

            <!-- Content Column -->

            <div class="col-md-9">

                <h2>VisualSVN Manager</h2>

                <p>VisualSVN Server comes with a unique graphical management console called VisualSVN Server Manager. Visualsvn server is a subversion server used for software versioning and revision control. In today’s software industry it is obvious that more than 1 people are going to work on the large scale projects. For that it is necessary to have versioning and revision control system in place..</p>
				<h2>Basic of VisualServerSVN</h2>
				<p>VisualSVN Server is distributed as an all-in-one standard Windows Installer package. VisualSVN Server is a package that contains everything you need to install, configure and manage Subversion server for your team on Windows platform. It includes Subversion, Apache and a management console.</p>
				<h2>How to use VisualSVN Server</h2>
				<p>I have Visual SVN setup on a Virtual Machine so I'll try and help as best as I can. I used subversion for a bunch of university projects so I have a pretty good idea of how Visual SVN works. You don't create a repository from a local folder. It's all done through Visual SVN.</p>
				<p>Steps to follow TortoiseSVN:</p>
				<p>1. On Visual SVN, right-click on Repositories and choose the Create New Repository option.</p>
				<p>2. Choose a suitable name (e.g. "MyRepository") for the repository, remembering to not include any spaces.</p>
				<p>3. Once that is done, create a folder anywhere on your computer. If you have Tortoise SVN installed correctly, your context menu should have a bunch of new options. The one you need is titled SVN Checkout.</p>
				<p>4. Right-click on the newly created folder and select SVN Checkout. A Dialog should appear prompting you to enter the details required to connect to a repository.</p>
				<p>5. To connect to your repository (Step 2) you'll need to use HTTPS, followed by the local IP address of the computer (your computer in this case) Visual SVN is hosted on, followed by /SVN/NameOfYourRepository</p>
				<p>6. For example: If the local IP address of your computer is 192.168.0.something and the name of your repository is MyRepository, to connect to that repository you'll have to type: https://127.0.0.1/SVN/MyRepository in the URL of repository field. You shouldn't have to change anything else on the Dialog that appears after following Step 4</p>
				<p>7. If you have entered the correct details, an "Authentication" dialog should appear prompting you to enter a Username and Password combination. Enter your local username and password, which should successfully connect you to your repository. If you're using an Administrator account you shouldn't have any issues connecting.</p>
				<p>8. If you're successful, the Checked Out folder will appear with a Green Tick indicating that it is under version control. Any files/folders you place within there will be put under version control, but not by default.</p>
				<p>9. To place them under version control, you'll have to Right-click on the files/folders and select Tortoise SVN - Add - and then on the Root folder you'll have to select SVN Commit.</p>
				</div>

        </div>

        <!-- /.row -->



        <hr>

    </div>

    <!-- /.container -->
<?php

include 'inc/footer.php';

?>


    <!-- jQuery -->

    <script src="js/jquery.js"></script>
	<script type='text/javascript'>

$(document).ready(function(){

    $(window).scroll(function(){

        if ($(this).scrollTop() > 200) {

            $('#scroll').fadeIn();

        } else {

            $('#scroll').fadeOut();

        }

    });

    $('#scroll').click(function(){

        $("html, body").animate({ scrollTop: 0 }, 600);

        return false;

    });

});

</script>


    <!-- Bootstrap Core JavaScript -->

    <script src="js/bootstrap.min.js"></script>



</body>



</html>