<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Allcodingworld is a place where you can find all coding stuff with example and demos. Allcodingworld create your own blog and connect with professionals. Here you can see all find and see all videos link to learn with easily step by step.">
	<meta name="keywords" content="VCS, Version Control System,svn tutorial, git, commit, svn commit, tortoisesvn">
	<meta name="robots" content="index, follow">

    <meta name="author" content="Laxman rana">

    <title>SVN tutorial at Allcodingworld - All coding at one place</title>

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

                <h1 class="page-header">SVN

                    <small>allcodingworld</small>

                </h1>

                <ol class="breadcrumb">

                    <li><a href="index.php">Home</a>

                    </li>

                    <li class="active">SVN</li>

                </ol>

            </div>

        </div>

        <!-- /.row -->



        <!-- Content Row -->

        <div class="row">

            <!-- Sidebar Column -->

            <div class="col-md-3">

                <div class="list-group">

                    <a href="index.php" class="list-group-item active">Home</a>

                    <a href="#" class="list-group-item">What is Version Control System?</a>
					<a href="#" class="list-group-item">SVN Concept</a>

                    <a href="#" class="list-group-item">SVN - Life Cycle</a>

                    <a href="#" class="list-group-item">SVN Checkout Process</a>

                    <a href="#" class="list-group-item">SVN - Perform Changes</a>

                    <a href="#" class="list-group-item">SVN - Review Changes</a>

                    <a href="#" class="list-group-item">SVN - Update Process</a>

                    <a href="#" class="list-group-item">SVN - Fix Mistake</a>

                    <a href="#" class="list-group-item">SVN - Resolve Conflicts</a>

					<a href="#" class="list-group-item">SVN - Tags</a>

                    <a href="#" class="list-group-item">SVN - Branching</a>

                    <a href="#" class="list-group-item active">Advanced</a>

                    <a href="faq.php" class="list-group-item">FAQs</a>

                    <a href="pricing.php" class="list-group-item">Join Session</a>

                </div>
				
								<div class="subscribe">
  <form class="form" name="subscribeform" id="subscribeform">
    <div class="form-group pull-center">
      <label for="email">Subscribe</label>
	  <hr>
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
	  <input type="hidden" name="subscribetopic" id="subscribetopic" value="svn"/>
    </div>
<div class="form-group pull-center">

    <button type="button" class="btn btn-primary subscribeus">Subscribe</button>
	</div>
  </form>
  
<div class="alert alert-info msg" style="display:none;">
  <p><strong>Thanks for signing up!!</strong></p>
<p>We'll include you in our next newsletter with great news about latest products, offers and other information.</p>
</div>
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

                <h2>SVN Tutorial</h2>

                <p>Subversion is a free/open source version control system (VCS). That is, Subversion manages files and directories, and the changes made to them, over time. This allows you to recover older versions of your data or examine the history of how your data changed. In this regard, many people think of a version control system as a sort of “time machine.”</p>
				<h2>What is Version Control System?</h2>
				<p>Version Control System (VCS) is a software that helps software developers to work together and maintain a complete history of their work/commits.</p>

				<p>Main features of a Version Control System:</p>

				Work simultaneously.
				Prevent overwrite each other’s changes/commit.
				Maintain history of every commits.

				A VCS divided into two main categories:

				<p>Centralized Version Control System (CVCS), and
				Distributed/Decentralized Version Control System (DVCS).
				In this tutorial, we will concentrate only on the Centralized Version Control System and especially Subversion. Subversion falls under centralized version control system, meaning that it uses central server to store all files and enables team collaboration.</p>

				<h2>Create a SVN reposity</h2>
				<p>Create an empty directory.
				Right click in it to bring up the context menu.
				Select <kbd>SVN Checkout</kbd>.
				Copy & paste the link for project (if you have one) into the <code>“URL”</code> Textbox.
				Depending on the size of your project this may take a while, but when the <code>“Checkout”</code> has been completed you should see something like.</p>
				<p>You may start developing.</p>
				<p>The repository is a central place where developers store all their work. Repository not only stores files, but also the history about changes. Which means it maintains a history of the changes made in the files.</p>
				<!--p>The git init' operation is used to create a new repository. When you create a new repository, you will find two hidden directories that created after init the repository, such as where you want it to be created, or what name should be given to the repository.</p-->
				<p>A repository is the heart of any version control system. It is the central place where developers store all their work. Repository not only stores files but also the history. Repository is accessed over a network, acting as a server and version control tool acting as a client. Clients can connect to the repository, and then they can store/retrieve their changes to/from repository. By storing changes, a client makes these changes available to other people and by retrieving changes, a client takes other people's changes as a working copy.</p>
				<h2>Revision</h2>
				<p>When a repository is created, it is given the revision number of zero (0). This number is incremented by one(1) every time a commit is performed. The revision number is global for the repository. That is, that there is no individual revision number for individual files in the repository, even if nothing changed in that file for that specific commit.</p>
				<p>When a repository is created, it is given the revision number of zero (0). This number is incremented by one(1) every time a commit is performed. The revision number is global for the repository.</p>


				<h2>Branches</h2>
				<p> Branch operation is used to create another line of development. It is useful when you want your development process to fork off into two different directions. For example, when you release version 5.0, you might want to create a branch so that development of 6.0 features can be kept separate from 5.0 bug-fixes.</p>

				<h2>Trunk</h2>

				 The trunk is a directory where all the main development happens and is usually checked out by developers to work on the project.

				<h2>Tags</h2>
				<p>The tags directory is used to store named snapshots of the project. Tag operation allows to give descriptive and memorable names to specific version in the repository.</p>

				<h2>Working copy</h2>
				<p>A working copy is a local copy (or “checkout”) of a particular version. Usually this version when checked-out is the “latest” one (also called a “head“), but a previous one can be requested. The User may do with the local copy anything that he/she desires, with knowledge that, at worst, they could just checkout the code again</p>
				<p>Working copy is a snapshot of the repository. The repository is shared by all the teams, but people do not modify it directly. Instead each developer checks out the working copy. The working copy is a private workplace where developers can do their work remaining isolated from the rest of the team.</p>

				<h2>Commit</h2>
				<p>you should be conflict free and ready to update the repository with your changes.
				The one point to note here is that it is a common practice to add a “log” message to the commit, as to be able to easily recall why the changes were made. In fact, Google’s repository makes this a mandatory pre-requirement to committing.</p>
				<p>Right click in the working directory and select “SVN Commit”.</p>

				<p>Committing is the process in which the changes you have made to your local copy will be merged back into the repository. This is the most perilous part of the process, as it is here that changes you have made, might impact other people using the same repository. That is why this is usually done after some consideration, with the team’s consensus and after you’ve resolved any merging conflicts.</p>
				<p>In brief, Commit is a process of storing changes from private workplace to central server. After commit, changes are made available to all the team. Other developers can retrieve these changes by updating their working copy. Commit is an atomic operation. Either the whole commit succeeds or is rolled back. Users never see half finished commit.</p>

		
				<h2>Checkout</h2>
				'Checkout' operation is used to create a working copy from the repository. Working copy is a private workplace where developers do their changes, and later on, submit these changes to the repository.

				<h2>Update</h2>
				As the name suggests, 'update' operation is used to update working copy. This operation synchronizes the working copy with the repository. As repository is shared by all the teams other developers can commit their changes and your working copy becomes older.

				Let us suppose Tom and Jerry are the two developers working on a project. Both check out the latest version from the repository and start working. At this point, their working copies are completely synchronized with the repository. Jerry completes his work very efficiently and commits his changes to the repository.

				<h2>Merging</h2>
				<p>Merging refers to the process by which, changed code is blended into one version. It may also entail resolving conflicts.</p>

				<h2>Perform Changes</h2>
				<p>After the checkout, one can do various operations to perform changes. Edit is the most common operation. One can edit the existing file to add/remove contents from the file.

				One can add files/directories. But immediately these files/directories do not become a part of the repository, instead they are added to the pending change-list and become a part of the repository after the commit operation.

				Similarly one can delete files/directories. Delete operation immediately deletes file from the working copy, but actual deletion of the file is added to the pending change-list and changes are made to the repository after the commit operation.

				'Rename' operation changes the name of the file/directory. 'Move' operation is used to move files/directories from one place to another in a repository tree.</p>

				<h2>Review Changes</h2>
				<p>When you check out the working copy or update the working copy, then your working copy is completely synchronized with the repository. But as you do changes to your working copy, it becomes newer than the repository. And it is a good practice to review your changes before the 'commit' operation.

				'Status' operation lists the modifications that have been made to the working copy. As we have mentioned before, whenever you do changes in the working copy all these changes become a part of the pending change-list. And the 'status' operation is used to see the pending change-list.

				'Status' operation only provides a list of changes but not the details about them. One can use diff operation to view the details of the modifications that have been made to the working copy.</p>

				<h2>Fix Mistakes</h2>
				<p>Let us suppose one has made changes to his working copy, but now, he wants to throw away these changes. In this situation, 'revert' operation will help.

				Revert operation reverts the modifications that have been made to the working copy. It is possible to revert one or more files/directories. Also it is possible to revert the whole working copy. In this case, the 'revert' operation will destroy the pending change-list and will bring the working copy back to its original state.</p>

				<h2>Resolve Conflicts</h2>
				<p>A Local working copy can be updated. That is, If you “checked out” a certain version, and while you were working, the version on the repository has been updated, you can update your working copy to the latest. In fact, the server will prevent you from committing your changes before you update to the latest version to match the repository. This is done in order to force you to resolve conflicts locally, before you even think of committing changes to the repository.</p>
				<p>Conflicts can occur at the time of merging. 'Merge' operation automatically handles everything that can be done safely. Everything else is considered as conflict. For example, "hello.c" file was modified in branch and deleted in another branch. Such a situation requires a person to make the decision. The 'resolve' operation is used to help the user figure out things and to inform VCS about the ways of handling the conflicts.</p>

				<h2>Commit Changes</h2>
				<p>Committing is the process in which the changes you have made to your local copy will be merged back into the repository. This is the most perilous part of the process, as it is here that changes you have made, might impact other people using the same repository. That is why this is usually done after some consideration, with the team’s consensus and after you’ve resolved any merging conflicts.</p>
				<p>'Commit' operation is used to apply changes from the working copy to the repository. This operation modifies the repository and other developers can see these changes by updating their working copy.</p>

				<p>Before commit, one has to add files/directories to the pending change-list. This is the place where changes wait to be committed. With commit, we usually provide a log message to explain why someone made changes. This log message becomes a part of the history of the repository. Commit is an atomic operation, which means either the entire commit succeeds or it is rolled back. Users never see half-finished commit.</p>


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
	<script src="js/jquery.js"></script>
	<script src="js/global.js"></script>



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

