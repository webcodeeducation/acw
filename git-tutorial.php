<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Allcodingworld is a place where you can find all coding stuff with example and demos. Allcodingworld presenting easy demonstration of coding stuff with videos tutorials. Here you can see all find and see all videos link to learn with easily step by step.">
	<meta name="keyword" content="Allcodingword, allcodingworld.com, git tutorial, git commands, git basics, git commit how to use github, how to work with git, git advanced">
	<meta name="robots" content="index, follow">
    <meta name="author" content="Laxman rana">

    <title>Git tutorial at Allcodingworld - All coding at one place</title>

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
                <h1 class="page-header">Git
                    <small>allcodingworld</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Git</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3" id="sidebar">
                <div class="list-group">
                    <a href="#" class="list-group-item active" name="top">Home</a>
                    <a href="#Basics-Git" class="list-group-item">Learn the basics of Git</a>
					<a href="#Git-cycle" class="list-group-item">Git Life cycle</a>
					<a href="#Directory-structure" class="list-group-item">The Directory Structure</a>
					<a href="#basics-vcs" class="list-group-item">What is Version Control System</a>
                    <a href="#Staging-Remotes" class="list-group-item">Staging & Remotes</a>
					<a href="#Settiup-repository" class="list-group-item">Setting up Repository</a>
                    <a href="Cloning-Branching" class="list-group-item">Cloning & Branching</a>
                    <a href="#Collaboration-basics" class="list-group-item">Collaboration Basics</a>
                    <a href="#Branching" class="list-group-item">Branching</a>
					<a href="#Merging" class="list-group-item">Merging</a>
                    <a href="#Rebase" class="list-group-item">Rebase</a>
                    <a href="#History-Configuration" class="list-group-item">History and Configuration</a>
					<a href="#Recovery-mistakes" class="list-group-item">Recovering from Mistakes</a>
                    <a href="#Advanced" class="list-group-item active">Advanced</a>
					<a href="#Migrating" class="list-group-item">Migrating</a>
                    <a href="#Collaboration-advanced" class="list-group-item">Collaboration</a>
					<a href="#Installing-git" class="list-group-item">Installing Git</a>
					<a href="#Cancel-account" class="list-group-item">How do I cancel my account?</a>
					<a href="#Git-Hooks" class="list-group-item">Git's Hooks</a>
					<a href="#Exercise" class="list-group-item">Exercise</a>
					<!--a href="pricing.php" class="list-group-item">Join Session</a-->

                </div>
				
<div class="subscribe">
  <form class="form" name="subscribeform" id="subscribeform">
    <div class="form-group pull-center">
      <label for="email">Subscribe</label>
	  <label for="message">Enter your email address to subscribe to this blog and receive notifications of new posts by email.</label>
	  <hr>
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
	  <input type="hidden" name="subscribetopic" id="subscribetopic" value="git"/>
    </div>
<div class="form-group pull-center">
    <button type="button" class="btn btn-primary subscribeus">Subscribe</button>
	</div>
  </form>
  
<div class="alert alert-info subscribemsg" style="display:none;">
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
                <h2>Git</h2>
				<p><kbd>Git</kbd> is very popular today, and is used by open-source and closed-source projects alike.</p>
                <p>Git is the best choice for most software developers team today. While every team is different and should do their own analysis, here are the main reasons why version control with Git  and why it's good for them.</p>
				<p>This tutorial demonstrates at a high level how Git works, explains the basic commands that you can use, and provides an explanation of Git’s workflow.</p>
				<h2 id="basics-Git">Learn the basics of Git</h2>
				<p>Git is a free and open source version control system, originally created by Linus Torvalds in 2005. Unlike older centralized version control systems such as <code>SVN</code> and <code>CVS</code>, Git is distributed: every developer has the full history of their code repository locally. This makes the initial clone of the repository slower, but subsequent operations such as commit, blame, diff, merge, and log dramatically faster.</p>
				<p><img class="img-responsive center-block" src="media/git/git-stages.png"/></p>
				<p>Git also has excellent support for <code>branching</code>, <code>merging</code>, and rewriting repository history, which has lead to many innovative and powerful workflows and tools. Pull requests are one such popular tool that allow teams to <kbd>collaborate</kbd> on Git branches and efficiently review each others code. Git is the most widely used version control system in the world today and is considered the modern standard for software development.</p>
				<h2 id="basics-Git">Learn Git Cycle </h2>
				<p>Essentially, Git comprises of four separate storage locations: your workspace, the local index, the local repository and the remote repository.</p>
				<p>After understanding the life cycle of git files, git commands become making much more sense to me. Here is a diagram displaying git files' life cycle.</p>
				<p><img class="img-responsive center-block" src="media/git/git-life-cycle.png"/></p>
				<p>Each file in the working directory can be one of the two states:</p>
				<p>
				<ul class="list-group">
  				<li class="list-group-item">1. tracked</li>
  				<li class="list-group-item">2. untracked</li>
  				</ul>
				</p>
				<p><kbd>git add</kbd> mainly do the following two things:</p>
				<p>
				<ul class="list-group">
  				<li class="list-group-item">1. turn untracked files into tracked files</li>
  				<li class="list-group-item">2. add contents to next commit</li>
  				</ul>
				</p>
				<p><kbd>git status</kbd> see if anything has been modified and/or staged. If you run git status after git commit, it will give you nothing. Because git status works between unmodified-staged period.</p>

				<p><kbd>git diff</kbd> display modified contents. So if you run git diff <code>after you edit some files</code>, it will display what contents have been <mark>modified</mark>. But if you run git add after you do some changes, running git diff will give you nothing. Because git add turn files from modified to staged. git diff only works within the unmodified-modified period.</p>
				<h2 id="directory-structure">The Directory Structure</h2>
				<p>Once you have cloned your remote repository onto your local computer, navigate into the directory with your terminal, Command Prompt or GUI file browser. If you have cloned an empty repository the workspace directory should appear empty. This directory is therefore your blank workspace with which you can begin to add files for your project.
				However, the directory isn’t blank at all! On closer inspection, you will notice a hidden directory called <kbd>.git</kbd>. Stored within this directory are both the local repository and index. Do not alter the contents of the .git directory. Doing so could damage your Git setup - and break version control functionality. Your newly-created workspace directory therefore contains the workspace, local repository and index.</p>
				<p>A .git directory has a structure similar to the following one:</p>
				<p>
				<ul class="list-group">
  				<li class="list-group-item">1. a .git directory at the root of the working tree</li>
  				<li class="list-group-item">2. a <code>&lt;Project_Name&gt;.git</code> directory that is a bare repository (i.e. without its own working tree), that is typically used for exchanging histories with others by pushing into it and fetching from it.</li>
  				</ul>
				</p>
				<h2 id="basics-vcs">What is Version Control System</h2>
				<p>Version control systems are a category of software tools that help a software team manage changes to source code over time. <abbr title="Version Control System">Version control</abbr> software keeps track of every modification to the code in a special kind of database. If a mistake is made, developers can turn back the clock and compare earlier versions of the code to help fix the mistake while minimizing disruption to all team members.</p>
				  <!--div class="code pull-center">
					<span class="list-group-item active">Version Control System</span>
					<span><pre> <strong>$</strong>
					<p>VCS</p>
					<img class="img-responsive" src="media/vcs/local-vcs.png"/></pre></span>
				  </div-->
				  <!--span class="code"><pre><strong>$ Version Control System</strong>
					<p></p>
					</pre></span-->
					<p><img class="img-responsive center-block" src="media/vcs/server-vcs.png"/></p>
				  <p>Version control is a system that records changes to a file or set of files over time so that you can recall specific versions later. For the examples in this book you will use software source code as the files being version controlled, though in reality you can do this with nearly any type of file on a computer</p>
				<p>For almost all software projects, the source code is like the crown jewels - a precious asset whose value must be protected. For most software teams, the source code is a repository of the invaluable knowledge and understanding about the problem domain that the developers have collected and refined through careful effort. Version control protects source code from both catastrophe and the casual degradation of human error and unintended consequences.</p>
				
				<h2 id="Staging-Remotes">Staging & Remotes</h2>
				<p>You have a bona fide Git repository and a checkout or working copy of the files for that project. You need to make some changes and commit snapshots of those changes into your repository each time the project reaches a state you want to record.</p>
				<p><img class="img-responsive center-block" src="media/git/local-remote-staging.png"/></p>
				<p>Remember that each file in your working directory can be in one of two states: tracked or untracked. Tracked files are files that were in the last snapshot; they can be unmodified, modified, or staged. Untracked files are everything else – any files in your working directory that were not in your last snapshot and are not in your staging area. When you first clone a repository, all of your files will be tracked and unmodified because Git just checked them out and you haven’t edited anything.</p>

				<p>As you edit files, Git sees them as modified, because you’ve changed them since your last commit. You stage these modified files and then commit all your staged changes, and the cycle repeats.</p>
				<h2 id="Settiup-repository">Setting up repository</h2>
				<p><pre><code><b>$ git init</b></code></pre></p>
				<p>Transform the current directory into a Git repository. This adds a .git folder to the current directory and makes it possible to start recording revisions of the project.</p>
				<!--p><span class="code"><pre><strong>$ repository setup</strong></pre></span></p-->
				<p><img class="img-responsive center-block" src="media/vcs/repository3.jpg"/></p>
					<p>This creates a new subdirectory named .git that contains all of your necessary repository files – a Git repository skeleton. At this point, nothing in your project is tracked yet. (See Git Internals for more information about exactly what files are contained in the <kbd>.git </kbd>directory you just created.)</p>
					<p>If you want to start version-controlling existing files (as opposed to an empty directory), you should probably begin tracking those files and do an initial commit. You can accomplish that with a few git add commands that specify the files you want to track, followed by a git commit</p>
					
					<p><pre><code><b>$ git clone <repo></b></code></pre></p>
					<p>If you want to get a copy of an existing Git repository – for example, a project you’d like to contribute to – the command you need is <kbd>git clone</kbd>. If you’re familiar with other VCS systems such as Subversion, you’ll notice that the command is "clone" and not "checkout".</p>
					<p>When you create a repository on GitHub, it exists as a remote repository. You can clone your repository to create a local copy on your computer and sync between the two locations.</p>
					<p><img class="img-responsive center-block" src="media/git/clon_icon.png" width="250px" height="250px" align="middle"/></p>
					<p>Type <kbd>git clone</kbd>, and then paste the URL you copied.</p>
					<p><pre><code><b>$ git clone https://github.com/YOUR-USERNAME/YOUR-REPOSITORY</b></code></pre></p>
					<p>Press <kbd>Enter</kbd>. Your local clone will be created.</p>
										
				<p>Clone the repository located at <repo> onto the local machine. The original repository can be located on the local filesystem or on a remote machine accessible via HTTP or SSH.</p>
						<p><pre><code><b>$ git config</b></code></pre></p>
				<p>The <kbd>git config</kbd> command lets you configure your Git installation (or an individual repository) from the command line. This command can define everything from user info to preferences to the behavior of a repository.</p>
			
				<h2 id="Cloning-Branching">Cloning & Branching</h2>
				<p>Usage</p>
				<p><pre><code><b>$ git clone <repo></b></code></pre></p>
				<p>Clone the repository located at <repo> onto the local machine. The original repository can be located on the local filesystem or on a remote machine accessible via HTTP or SSH.</p>
				<p><pre><code><b>$ git config <repo> <directory></b></code></pre></p>
				<p>Clone the repository located at <repo> into the folder called <directory> on the local machine.</p>
				
				<p><img class="img-responsive center-block" src="media/git/clon_icon.png" width="250px" height="250px" align="middle"/></p>
				<p>You can get a Git project using two main approaches. The first takes an existing project or directory and imports it into Git. The second clones an existing Git repository from another server. When you create a repository on GitHub, it exists as a remote repository. You can clone your repository to create a local copy on your computer and sync between the two locations.</p>
				<p><span class="code"><pre><strong>$ git clone https://github.com/repository/directory</strong></pre></span></p>
					
				<p>The URL of your repository varies depending on the provider you use. If you are unsure of the URL to enter, it may be worth querying it with your search engine or asking someone in the know.</p>
				<p>For GitHub, try the following command, replacing the parts below as appropriate:<p>
				<p><span class="code"><pre><strong>$ git clone https://&lt;USERNAME&gt;:&lt;PASSWORD&gt;@github.com/&lt;OWNER&gt;/&lt;REPO_NAME&gt;.git &lt;workspace&gt;</strong></pre></span></p>
				<p>where you replace:</p>
				<p><ul class="list-group">
  				<li class="list-group-item">&lt;<code>USERNAME</code>&gt; with your GitHub username</li>
  				<li class="list-group-item">&lt;<code>PASSWORD</code>&gt; with your GitHub password</li>
  				<li class="list-group-item">&lt;<code>OWNER</code>&gt; with the username of the person who owns the repository</li>
  				<li class="list-group-item">&lt;<code>REPO_NAME</code>&gt; with the name of your project’s repository; and</li>
 				<li class="list-group-item">&lt;<code>workspace</code>&gt; with the name for your workspace directory. Although optional, we will specify it here to create the <workspace> directory</li>
				</ul></p>
				<h2 id="Collaboration-basics">Collaboration Basics</h2>
				<p>Git is a version control system, like "track changes" for code. It's fast, powerful, and easy-to-use version control system. But the thing that's really special about Git is the way it empowers people to collaborate. All the projects on drupal.org are stored in Git, and there are millions of public projects hosted by GitHub.com. Whether you are a developer who wants to contribute to an open source project, a freelancer who needs to know how to maintain a patched module, or a member of a team collaborating on a single code base, Git is a tool worth having in your toolbox.</p>
				<h2 id="Branching">Branching</h2>
				<p>It's important to understand that branches are just pointers to commits. When you create a branch, all Git needs to do is create a new pointer—it doesn’t change the repository in any other way. A branch represents an independent line of development. Branches serve as an abstraction for the edit/stage/commit process discussed in Git Basics, the first module of this series. You can think of them as a way to request a brand new working directory, staging area, and project history. New commits are recorded in the history for the current branch, which results in a fork in the history of the project.

				The git branch command lets you create, list, rename, and delete branches. It doesn’t let you switch between branches or put a forked history back together again. For this reason, git branch is tightly integrated with the git checkout and git merge commands.</p>
				<h2 id="Rebase">Rebase belong to us</h2>
				<p>The git rebase command has a reputation for being magical Git voodoo that beginners should stay away from, but it can actually make life much easier for a development team when used with care. In this article, we’ll compare git rebase with the related git merge command and identify all of the potential opportunities to incorporate rebasing into the typical Git workflow.</p>
				<p>The first thing to understand about git rebase is that it solves the same problem as git merge. Both of these commands are designed to integrate changes from one branch into another branch—they just do it in very different ways.

				Consider what happens when you start working on a new feature in a dedicated branch, then another team member updates the master branch with new commits. This results in a forked history, which should be familiar to anyone who has used Git as a collaboration tool.</p>
				<h2 id="Advanced">Recovering from Mistakes</h2>
				<p>Rolling back your workspace to a previous commit involves two distinct steps:<p>
				<p><ul class="list-group">
  				<li class="list-group-item list-group-item-danger">determining which commit to roll back</li>
  				<li class="list-group-item list-group-item-success">performing the rollback</li>
  				<!--li class="list-group-item list-group-item-danger">Third item</li>
 				 <li class="list-group-item list-group-item-danger">Fourth item</li-->
				</ul></p>
								<h2 id="Advanced">Advanced</h2>
				<p>Allcodingworld’s Git tutorials introduce the most common Git commands, and our Git Workflows modules discuss how these commands are typically used to facilitate collaboration. Alone, these are enough to get a development team up and running with Git. But, if you really want to leverage the full power of Git, you’re ready to dive into our Advanced Git articles.</p>
				<h2 id="History-Configuration">History & Configuration</h2>
				<p>The purpose of any version control system is to record changes to your code. This gives you the power to go back into your project history to see who contributed what, figure out where bugs were introduced, and revert problematic changes. But, having all of this history available is useless if you don’t know how to navigate it. That’s where the git log command comes in.</p>
<p>These examples use a very simple project called <kbd>DemoDirectory</kbd>. To get the project, run</p>
				<p><span class="code"><pre><strong>$ git clone https://github.com/Repository/DemoDirectory</strong></pre></span></p>
				<p>After you have created several commits, or if you have cloned a repository with an existing commit history, you’ll probably want to look back to see what has happened. The most basic and powerful tool to do this is the git log command</p>
<p>When you run <kbd>git log</kbd> in this project, you should get output that looks something like this:</p>
<p><span class="code"><pre><strong>$ git log
		commit cc82a6dff817ec66g4434200h202690a93863949
		Author: Allcodingworld <allcodingworld@gmail.com>
		Date:   Mon Mar 17 21:52:11 2008 -0700
			changed the version number
		commit 085bb3bcb609e1e8471d4b2432h8ecbe6306e7e7
		Author: Allcodingworld <allcodingworld@gmail.com>
		Date:   Sat Mar 15 16:40:33 2017 -0700

		   removed unnecessary test

		commit a11bef06a3f659402fe7563abf99ad00de2209e6
		Author: AllcodingwordH <allcodingworld@gmail.com>
		Date:   Sat Mar 15 10:31:28 2008 -0700
			first commit
</strong></pre></span></p>
				<p>By now, you should already know the basic git log command for displaying commits. But, you can alter this output by passing many different parameters to git log.

The advanced features of git log can be split into two categories: formatting how each commit is displayed, and filtering which commits are included in the output. Together, these two skills give you the power to go back into your project and find any information that you could possibly need.</p>
	<p>By default, with no arguments, git log lists the commits made in that repository in reverse chronological order – that is, the most recent commits show up first. As you can see, this command lists each commit with its SHA-1 checksum, the author’s name and email, the date written, and the commit message.</p>
	<p>A huge number and variety of options to the git log command are available to show you exactly what you’re looking for. Here, we’ll show you some of the most popular.

One of the more helpful options is -p, which shows the difference introduced in each commit. You can also use -2, which limits the output to only the last two entries:<p>
	<p><span class="code"><pre><strong>$ git log -p -2</strong></pre></span></p>
				<h2 id="Migrating">Migrating</h2>
				<p>SVN uses a single central repository to serve as the communication hub for developers, and collaboration takes place by passing changesets between the developers’ working copies and the central repository. This is different from Git’s collaboration model, which gives every developer their own copy of the repository, complete with its own local history and branch structure. Users typically need to share a series of commits rather than a single changeset. Instead of committing a changeset from a working copy to the central repository, Git lets you share entire branches between repositories.</p>
				<p><img class="img-responsive center-block" src="media/git/svn-to-git.png" width="250px" height="250px" align="middle"/></p>
				<p>The commands presented below let you manage connections with other repositories, publish local history by "pushing" branches to other repositories, and see what others have contributed by "pulling" branches into your local repository.</p>
				<p>Clone the SVN repository</p>
				<p>The <kbd>git svn clone</kbd> command transforms the trunk, branches, and tags in your SVN repository into a new Git repository. Depending on the structure of your SVN repo, the command needs to be configured differently.</p>
				<p><img class="img-responsive center-block" src="media/git/svn-to-git2.svg" width="250px" height="250px" align="middle"/></p>
				<p>For example, if you were migrating a project called <kbd>Allcodingword</kbd>, hosted on https://svn.atlassian.com, you might run the following:</p>
				<p><span class="code"><pre><strong>$ git svn clone --stdlayout --authors-file=authors.txt https://svn.atlassian.com/Allcodingword AllcodingwordAsGit</strong></pre></span></p>
				<h2 id="Exercise">Exercise</h2>
				<p>First, ensure that you have setup your environment correctly. Once that is complete, create a new Git repository on Github for your project. To try out the commands, you can create a new file <kbd>readme.md</kbd> in the root of your workspace. The file will be used by GitHub to provide information on your project’s GitHub homepage.</p>
				<p><div class="list-group">
				<li class="list-group-item list-group-item-info">Create the file, and write some introductory text to your project.</li>
				<li class="list-group-item list-group-item-info">Add the file to the local index upon completion of writing, and commit your changes.</li>
				<li class="list-group-item list-group-item-info">Push the new file to the remote repository and observe the changes on the GitHub website.</li>
</div></p>
				<h2 id="Git-Hooks">Git's Hooks</h2>
				<p>Git hooks are scripts that run automatically every time a particular event occurs in a Git repository. They let you customize Git’s internal behavior and trigger customizable actions at key points in the development life cycle.
					Common use cases for Git hooks include encouraging a commit policy, altering the project environment depending on the state of the repository, and implementing continuous integration workflows. But, since scripts are infinitely customizable, you can use Git hooks to automate or optimize virtually any aspect of your development workflow.

					In this article, we’ll start with a conceptual overview of how Git hooks work. Then, we’ll survey some of the most popular hooks for use in both local and server-side repositories.</p>
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
	<script src="js/global.js"></script>


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
