<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Allcodingworld - Learn all about TortoiseSVN with easily step by step and with demo examples.">
<meta name="keywords" content="TortoiseSVN, Git, github,VCS, Version Control System, commit by svn, SVN, SVN Commit">
<meta name="robots" content="index, follow">
<meta name="author" content="Laxman rana">
<title>TortoiseSVN tutorial at Allcodingworld - All coding at one place</title>
<!-- Bootstrap Core CSS -->

<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->

<link href="css/modern-business.css" rel="stylesheet">
<!-- Custom Fonts -->

<link href="css/socialbar.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

<!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
      <h1 class="page-header">TortoiseSVN <small>allcodingworld</small> </h1>
      <ol class="breadcrumb">
        <li><a href="index.php">Home</a> </li>
        <li class="active">TortoiseSVN</li>
      </ol>
    </div>
  </div>
  
  <!-- /.row --> 
  <!-- Content Row -->
  
  <div class="row"> 
    
    <!-- Sidebar Column -->
    
    <div class="col-md-3">
      <div class="list-group"> <a href="index.php" class="list-group-item active">Home</a> <a href="#" class="list-group-item">What is TortoiseSVN?</a> <a href="#" class="list-group-item">Getting Started</a> <a href="#" class="list-group-item">Basic Version Control Concepts</a> <a href="#" class="list-group-item">The Repository</a> <a href="#" class="list-group-item">Creating a Tag</a> <a href="#" class="list-group-item">Creating a Branch</a> <a href="#" class="list-group-item">Feature Branch</a> <a href="#" class="list-group-item">Repository Bakcup</a> <a href="#" class="list-group-item">Creating Repository</a> <a href="#" class="list-group-item">Accessing Repository</a> <a href="#" class="list-group-item">Checkout Links</a> <a href="#" class="list-group-item">Importing a data into repository</a> <a href="#" class="list-group-item active">Advanced</a> <a href="faq.php" class="list-group-item">FAQs</a> <a href="pricing.php" class="list-group-item">Join Session</a> </div>
      <div class="subscribe">
        <form class="form" name="subscribeform" id="subscribeform">
          <div class="form-group pull-center">
            <label for="email">Subscribe</label>
            <label for="message">Enter your email address to subscribe to this blog and receive notifications of new posts by email.</label>
            <hr>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
            <input type="hidden" name="subscribetopic" id="subscribetopic" value="tortoisesvn"/>
          </div>
          <div class="form-group pull-center">
            <button type="button" class="btn btn-primary subscribeus">Subscribe</button>
          </div>
        </form>
      </div>
      <div class="alert alert-info subscribemsg" style="display:none;">
        <p><strong>Thanks for signing up!!</strong></p>
        <p>We'll include you in our next newsletter with great news about latest products, offers and other information.</p>
      </div>
      <aside id="sticky-social">
        <ul>
          <li><a href="https://facebook.com/allcodingworld" class="entypo-facebook" target="_blank"><span>Facebook</span></a></li>
          <li><a href="https://twitter.com/allcodingworld" class="entypo-twitter" target="_blank"><span>Twitter</span></a></li>
          <li><a href="https://plus.google.com/102966882816144079027" class="entypo-gplus" target="_blank"><span>Google+</span></a></li>
          <li><a href="https://in.linkedin.com/in/allcodingworld-codes-143584137" class="entypo-linkedin" target="_blank"><span>LinkedIn</span></a></li>
          <li><a href="https://www.instagram.com/allcodingworldindia/" class="entypo-instagrem" target="_blank"><span>Instagram</span></a></li>
          <li><a href="http://www.stumbleupon.com/stumbler/acodes" class="entypo-stumbleupon" target="_blank"><span>StumbleUpon</span></a></li>
          <li><a href="https://in.pinterest.com/allcodingworld/" class="entypo-pinterest" target="_blank"><span>Pinterest</span></a></li>
          <li><a href="https://www.flickr.com/people/147512418@N02/?rb=1" class="entypo-flickr" target="_blank"><span>Flickr</span></a></li>
          <li><a href="https://www.tumblr.com/blog/allcodingworld" class="entypo-tumblr" target="_blank"><span>Tumblr</span></a></li>
        </ul>
      </aside>
    </div>
    
    <!-- Content Column -->
    
    <div class="col-md-9">
      <div style="float: right;margin-top: 25px;" class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share=		"true"></div>
      <h2>TortoiseSVN</h2>
      <p>TortoiseSVN is a Subversion client, implemented as a Microsoft Windows shell extension, that helps programmers manage different versions of the source code for their programs.</p>
      <p>TortoiseSVN is a graphical program for using SVN. It can be downloaded from <kbd>tortoisesvn.net</kbd>.</p>
      <p><img class="img-responsive center-block" src="media/tortoisesvn/tortoisesvn-image.png" alt="TortoiseSVN Options"></p>
      <p>A Subversion working copy is an ordinary directory tree on your local system, containing a collection of files. You can edit these files however you wish, and if they're source code files, you can compile your program from them in the usual way.</p>
      <p>Your working copy is your own private work area: Subversion will never incorporate other people's changes, nor make your own changes available to others, until you explicitly tell it to do so.</p>
      <p>TortoiseSVN is free. You don't have to pay to use it, and you can use it any way you want. It is developed under the GNU General Public License (GPL).
        TortoiseSVN is an Open Source project. That means you have full read access to the source code of this program.</p>
      <h2>Getting Started</h2>
      <p>One of the most visible features of TortoiseSVN is the icon overlays which appear on files in your working
        copy. These show you at a glance which of your files have been modified.</p>
      <!--p><img class="img-responsive center-block" src="media/tortoisesvn/tortoisesvn-image.png"></p-->
      <p>A working copy also contains some extra files, created and maintained by Subversion, to help it carry out these commands. In particular, your working copy contains a subdirectory named .svn, also known as the working copy administrative directory . The files in this administrative directory help Subversion recognize which files contain unpublished changes, and which files are out-of-date with respect to others' work.</p>
      <p>Prior to 1.7 Subversion maintained .svn administrative subdirectories in every versioned directory of your working copy. Subversion 1.7 takes a completely different approach and each working copy now has only one administrative subdirectory which is an immediate child of the root of that working copy.</p>
      <p>A typical Subversion repository often holds the files (or source code) for several projects; usually, each project is a subdirectory in the repository's filesystem tree. In this arrangement, a user's working copy will usually correspond to a particular subtree of the repository.</p>
      <h2>Basic Version Control Concepts</h2>
      <p>Version control is a system that records changes to a file or set of files over time so that you can recall specific versions later.VCS are sometimes known as SCM (Source Code Management) tools or RCS (Revision Control System).</p>
      <p><img class="img-responsive center-block" src="media/vcs/local-vcs.png" alt="VCS Concept"></p>
      <!--p><img class="img-responsive center-block" src="media/tortoisesvn/Tortoise-Repository.png"></p-->
      <p>Types of Version Control Systems:</p>
      <p>The three most popular version control systems are broken down into two main categories,
        <mark>centralized</mark>
        and
        <mark>decentralized</mark>
        (also known as distributed)</p>
      <p>Subversion is an open source control repository tool. It is widely used by many open source projects and increasingly by many large development teams in general. It’s fast and efficient, small and easy to install and because it’s open source-it’s also free. Subversion is file based and keeps its repository in a simple directory structure that you can copy and back up easily.</p>
      <!--p class="advertisementblock">
<div class="advertisementSection">Advertisement<div id="ad1" style="width:336px; height: 280px;"></div>
</p-->
      <p>You can graphically access Subversion via Tortoise SVN, which is an Explorer Shell Extension that provides access to most of Subversion’s command-line interface through Explorer Context menus and overlay icons for files under source control. This actually is very powerful as it lets you use a familiar Explorer interface as your source code browser and, more importantly, because it very easily lets you see source control files in relation to the actual directory structure and what is and isn’t under source control.</p>
      <h2>The Repository</h2>
      <p>Now you’re ready to create a new repository. The repository is a storage location on disk where all the versioned data is stored. You can store the repository on your local machine or a remote server where users can access it either through the Subversion Daemon service or through HTTP via an Apache module (separate install). The key is that you need to be able to create the repository on that machine.</p>
      <p><img class="img-responsive center-block" src="media/tortoisesvn/repository-create.png" alt="Creating Repository"></p>
      <p>To access your local repository you need the path to that folder. Just remember that Subversion expects all repository paths in the form file:///D:/Repository/. Note the use of forward slashes throughout.</p>
      <p><img class="img-responsive center-block" src="media/tortoisesvn/repository-file-system-new.png" alt="Repository File System"></p>
      <p>To access a repository located on a network share you can either use drive mapping, or you can use the UNC path. For UNC paths, the form is file://ServerName/path/to/repos/. Note that there are only 2 leading slashes here.</p>
      <p><img class="img-responsive center-block" src="media/tortoisesvn/network-repository-new.png" alt="Repository Contents in Browser View"></p>
      <p>First create a new empty directory on your PC. It can go anywhere, but in this tutorial we are going to call it C:\svn_repos. Now right click on the new folder and from the context menu choose TortoiseSVN => Create Repository here.... The repository is then created inside the folder, ready for you to use. We will also create the default internal folder structure by clicking the Create folder structure button.</p>
      <h2>Creating a Tag</h2>
      <p>Another common version control concept is a tag. A tag is just a “snapshot” of a project in time. In Subversion, this idea already seems to be everywhere.</p>
      <p>Tag is a snapshot of the project state. You can create a tag of the one specified revision or a tag, containing resources of different revisions. </p>
      <p>To create a tag:</p>
      <p>
      <ul class="list-group">
        <li class="list-group-item">1. Select the folder you wish to create a tag for in the repository browser.</li>
        <li class="list-group-item">2. Select Tag... from the File menu or click the Tag buttonin the toolbar</li>
        <li class="list-group-item">3. The tag options window will appear next to the selected folder.
          If the selected folder is located in trunk or branches then Cornerstone will calculate the location of the related tags folder and suggest it as the location of the tag.</li>
        <li class="list-group-item">4. Specify the name of the tag in the field labelled Tag As. This will be the name of the tag folder and must be unique in the tags folder. </li>
        <li class="list-group-item">5. Specify the name of the tag in the field labelled Tag As. This will be the name of the tag folder and must be unique in the tags folder.
          
          Specify the URL of the folder that will contain the tag in the Where field. Cornerstone will suggest a default location based on the URL of the folder to be tagged. The suggested value can be changed if it is not appropriate.</li>
      </ul>
      </p>
      <p>To get started, right click on your working copy and select the ‘Branch/Tag option from the TortoiseSVN’ menu.</p>
      <p>Sometimes you may want a “snapshot” that is more complicated than a single directory at a single revision.
        
        For example, pretend your project is much larger than our calc example: suppose it contains a number of subdirectories and many more files. In the course of your work, you may decide that you need to create a working copy that is designed to have specific features and bug fixes. You can accomplish this by selectively backdating files or directories to particular revisions (using svn update with the -r option liberally), by switching files and directories to particular branches (making use of svn switch), or even just by making a bunch of local changes. When you're done, your working copy is a hodgepodge of repository locations from different revisions. But after testing, you know it's the precise combination of data you need to tag.</p>
      <p>Tags should only be used to create snapshots of the repository. No development should be done on a tag, meaning you should never commit code to a tag. Branches are used for development that you do not want to interfere with everyday activity. They can be used for experimental code, code that you may only want to have run on your local machine, but still would like to have the power of version control behind your code.</p>
      <h2>Creating a Branch</h2>
      <p>Tagging and branching with svn are as simple as using the copy command.</p>
      <p>A branch is technically identical to a tag, i.e. it is a copy of an existing folder at a given point in time. The two only really differ in terms of intent, i.e. what, by convention, they are intended for.
        
        While a tag is generally intended as a static snapshot, a branch is intended to be continued to be modified subsequent to the branch operation. This allows two versions of a folder starting from a common point to diverge over time independently of one another.
        
        This can be useful on several levels. The most common is to enable the continued development of multiple versions of a project.</p>
      <p>Creating a branch is similar to creating a tag:</p>
      <p>
      <ul class="list-group">
        <li class="list-group-item">1. Select the folder you wish to create a branch for in the repository browser.</li>
        <li class="list-group-item">2. Select Branch... from the File menu or click the Branch button  in the toolbar:</li>
        <li class="list-group-item">3. The branch options window will appear next to the selected folder.
          
          If the selected folder is located in trunk or tags then Cornerstone will calculate the location of the related branches folder and suggest it as the location of the branch.</li>
        <li class="list-group-item">4. Specify the name of the branch in the field labelled Branch As. This will be the name of the branch folder and must be unique in the branches folder.</li>
        <li class="list-group-item">5. Specify the URL of the folder that will contain the branch in the Where field. Cornerstone will suggest a default location based on the URL of the folder to be branched. The suggested value can be changed if it is not appropriate.</li>
        <li class="list-group-item">6. Specify the revision to create the branch from in the Revision field. The default value is HEAD, which is appropriate for most scenarios.</li>
      </ul>
      </p>
      <h2>Feature Branch</h2>
      <p>It is common for development teams to utilize branches to develop features in parallel and in isolation from one another. Such branches are termed feature branches.
        
        This strategy can be used to implement a stable trunk policy where only complete and stable features are integrated into the trunk, with all other significant development taking place on isolated branches.</p>
      <h2>Revisions</h2>
      <p>A svn commit operation can publish changes to any number of files and directories as a single atomic transaction. In your working copy, you can change files' contents, create, delete, rename and copy files and directories, and then commit the complete set of changes as a unit.</p>
      <p>In the repository, each commit is treated as an atomic transaction: either all the commits changes take place, or none of them take place. Subversion retains this atomicity in the face of program crashes, system crashes, network problems, and other users' actions.</p>
      <p>Each time the repository accepts a commit, this creates a new state of the filesystem tree, called a revision. Each revision is assigned a unique natural number, one greater than the number of the previous revision. The initial revision of a freshly created repository is numbered zero, and consists of nothing but an empty root directory.</p>
      <h2>Local Access to the Repository</h2>
      <p>To access your local repository you need the path to that folder. Just remember that Subversion expects all repository paths in the form file:///D:/Repository/. Note the use of forward slashes throughout.</p>
      <p>To access a repository located on a network share you can either use drive mapping, or you can use the UNC path. For UNC paths, the form is file://ServerName/path/to/repos/. Note that there are only 2 leading slashes here.</p>
      <h2>Repository Bakcup</h2>
      <p>Whichever type of repository you use, it is vitally important that you maintain regular backups, and that you verify the backup. If the server fails, you may be able to access a recent version of your files, but without the repository all your history is lost forever.</p>
      <p>The simplest (but not recommended) way is just to copy the repository folder onto the backup medium. However, you have to be absolutely sure that no process is accessing the data. In this context, access means any access at all. If your repository is accessed at all during the copy, (web browser left open, WebSVN, etc.) the backup will be worthless.</p>
      <h2>Creating Repository</h2>
      <p><img class="img-responsive center-block" src="media/tortoisesvn/repository-create.png" alt="Creating Repository"></p>
      <p>First create a new empty directory on your PC. It can go anywhere, but in this tutorial we are going to call it D:\Repository. Now right click on the new folder and from the context menu choose TortoiseSVN => Create Repository here.... The repository is then created inside the folder, ready for you to use. We will also create the default internal folder structure by clicking the Create folder structure button.</p>
      <h2>Accessing Repository</h2>
      <p>To use TortoiseSVN (or any other Subversion client), you need a place where your repositories are located. You can either store your repositories locally and access them using the file:// protocol or you can place them on a server and access them with the http:// or svn:// protocols. The two server protocols can also be encrypted. You use https:// or svn+ssh://, or you can use svn:// with SASL.</p>
      <h2>Checkout Links</h2>
      <p>If you want to make your Subversion repository available to others you may want to include a link to it from your website. One way to make this more accessible is to include a checkout link for other TortoiseSVN users.</p>
      <p>When you install TortoiseSVN, it registers a new tsvn: protocol. When a TortoiseSVN user clicks on such a link, the checkout dialog will open automatically with the repository URL already filled in.</p>
      <h2>Importing a data into repository</h2>
      <p>Before you import your project into a repository you should:</p>
      <p>
      <ul class="list-group">
        <li class="list-group-item">1. Remove all files which are not needed to build the project.</li>
        <li class="list-group-item">2. Organize the files in folders and sub-folders. </li>
      </ul>
      </p>
      <p><img class="img-responsive center-block" src="media/tortoisesvn/importing-repositry.png" alt="Importing Data"></p>
      <p>In this dialog you have to enter the URL of the repository location where you want to import your project. It is very important to realise that the local folder you are importing does not itself appear in the repository, only its content. For example if you have a structure:</p>
      <div class="code"> 
        
        <!--span class="list-group-item active">How to create a repository?</span--> 
        
        <span>
        <pre> <p>C:\Projects\Widget\source
C:\Projects\Widget\doc
C:\Projects\Widget\images</p>
</pre>
        </span> </div>
      <p style="margin-top:40px;"><strong>Related Resources:</strong></p>
      <p><a href="git-tutorial.php">
        <button type="button" class="btn btn-danger relatedtopic">Git</button>
        </a> <a href="github-tutorial.php">
        <button type="button" class="btn btn-danger relatedtopic">Github</button>
        </a> <a href="github-commands-tutorial.php">
        <button type="button" class="btn btn-danger relatedtopic">Github Commands</button>
        </a></p>
      <p>Thanks to read this tutorial.</p>
      <div class="helpfultxt">
        <p>Was this tutorial helpful?</p>
        <p>
        <div class="form-group">
          <button type="button" class="btn btn-default helpfulyes">Yes</button>
          <button type="button" class="btn btn-default helpfulno" style="margin-left:5px;">No</button>
        </div>
        </p>
      </div>
      <div class="alert alert-info helpfulmsg" style="display:none;">
        <p><strong>Thanks for your feedback!</strong></p>
      </div>
      <hr class="endtopic"/>
    </div>
  </div>
  
  <!-- /.row --> 
  
</div>

<!-- /.container -->

<?php

include 'inc/footer.php';

?>

<!-- jQuery --> 

<script src="js/jquery.js"></script> 

<!-- Bootstrap Core JavaScript --> 

<script src="js/bootstrap.min.js"></script> 
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
