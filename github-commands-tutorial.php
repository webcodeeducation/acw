<?php
// Error reporting:
//error_reporting(E_ALL^E_NOTICE);
error_reporting(0);
include 'bin/config.php';
include 'bin/config2.php';

include 'bin/comment.class.php';


/*
/	Select all the comments and populate the $comments array with objects
*/

$comments = array();
$result = mysql_query("SELECT * FROM comments ORDER BY id DESC");

while($row = mysql_fetch_assoc($result))
{
	$comments[] = new Comment($row);
}

?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Allcodingworld is a online portal or place where you can find all coding stuff with example and demos. Allcodingworld presenting easy demonstration of coding stuff with videos tutorials. Here you can see all find and see all videos link to learn with easily step by step.">
<meta name="keyword" content="Allcodingword, allcodingworld.com, svn tutorial, git tutorial, github tutorial, download projects, student project, college projects, java projects, php projects, wordpress projects, angualrjs projects, coding stuff, videso tutorial, php, java, wordpress, Hibernate, Spring, Unix, Linux, smartgit, tortoise svn, github desktop,svn commands">
<meta name="robots" content="index, follow">
<meta name="author" content="Laxman rana">
<title>Github Commands at Allcodingworld - All coding at one place</title>

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
      <h1 class="page-header">Github Commands <small>allcodingworld</small> </h1>
      <ol class="breadcrumb">
        <li><a href="index.php">Home</a> </li>
        <li class="active">Github</li>
      </ol>
    </div>
  </div>
  
  <!-- /.row --> 
  
  <!-- Content Row -->
  
  <div class="row"> 
    
    <!-- Sidebar Column -->
    
    <div class="col-md-3">
      <div class="list-group"> <a href="index.php" class="list-group-item active">Home</a> <a href="about.html" class="list-group-item">What is Github?</a> <a href="services.html" class="list-group-item">Setup repository</a> <a href="" class="list-group-item">Creating Projects</a> <a href="" class="list-group-item">Basic git</a> <a href="" class="list-group-item">Branching and Merging</a> <a href="" class="list-group-item">Pulling and Pushing Projects</a> <a href="" class="list-group-item">Comparison</a> <a href="" class="list-group-item">Patching</a> <a href="" class="list-group-item">Debugging</a> <a href="" class="list-group-item">External Systems</a> <a href="" class="list-group-item">Administration Commands</a> <a href="" class="list-group-item">Server Admin</a> <a href="" class="list-group-item">Extra Commands</a> <a href="sidebar.html" class="list-group-item active">Advanced</a> <a href="faq.php" class="list-group-item">FAQ</a> <a href="pricing.php" class="list-group-item">Join Session</a> </div>
      <hr>
      <div class="subscribe">
        <form class="form" name="subscribeform" id="subscribeform">
          <div class="form-group pull-center">
            <label for="email">Subscribe</label>
            <label for="message">Enter your email address to subscribe to this blog and receive notifications of new posts by email.</label>
            <hr>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
            <input type="hidden" name="subscribetopic" id="subscribetopic" value="githubcommands"/>
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
      <h2>GitHub Commands</h2>
      <p>GitHub is a code hosting platform for version control and collaboration. It lets you and others work together on projects from anywhere.</p>
      <div class="code"> 
        
        <!--span class="list-group-item active">How to create a repository?</span--> 
        
        <!--span><pre> <strong>$ cd ~:</strong>

					<p>To reach home directory</p>

					<img class="img-responsive" src=""/></pre></span--> 
        
      </div>
      <p>This tutorial teaches you GitHub essentials like
        <mark>repositories</mark>
        ,
        <mark>branches</mark>
        ,
        <mark>commits</mark>
        , and
        <mark>Pull Requests</mark>
        . You’ll create your own Hello World repository and learn GitHub’s Pull Request workflow, a popular way to create and review code.</p>
      <h2>Major GIT commands:</h2>
      <p>Here is a list of some basic Git commands to get work with Git.</p>
      <p>Initializes a git repository. creates the initial <kbd>.git</kbd> directory in a new or in an existing project. Example: cd /home/user/git_folder/ git init</p>
      <pre><strong>$ git init</strong></pre>
      <p>Adds files changes in your working directory to your index. Example: git add .</p>
      <pre><strong>$ git add</strong></pre>
      <p>Removes files from your index and your working directory so they will not be tracked. Example: git rm filename</p>
      <pre><strong>$ git rm</strong></pre>
      <p>Shows you the status of files in the index versus the working directory. It will list out files that are untracked (only in your working directory), modified (tracked but not yet updated in your index), and staged (added to your index and ready for committing).</p>
      <pre><strong>$ git status</strong></pre>
      <p>Lists existing branches, including remote branches if <kbd>-a</kbd> is provided. Creates a new branch if a branch name is provided. Example: git branch -a * master remotes/origin/master</p>
      <pre><strong>$ git branch</strong></pre>
      <p>Checks out a different branch. Switches branches by updating the index, working tree, and HEAD to reflect the chosen branch. Example: git checkout newbranch</p>
      <pre><strong>$ git checkout</strong></pre>
      <p>Merges one or more branches into your current branch and automatically creates a new commit if there are no conflicts. Example: git merge newbranchversion</p>
      <p>
      <pre><strong>$ git merge</strong></pre>
      </p>
      <p>Resets your index and working directory to the state of your last commit. Example: git reset --hard HEAD</p>
      <p>
      <pre><strong>$ git reset</strong></pre>
      </p>
      <p>Temporarily saves changes that you don&#39;t want to commit immediately. You can apply the changes later. Example: git stash Saved working directory and index state "WIP on master: 84f241e first commit" HEAD is now at 84f241e first commit (To restore them type "git stash apply")</p>
      <p>
      <pre><strong>$ git stash</strong></pre>
      </p>
      <p>Tags a specific commit with a simple, human readable handle that never moves. Example: git tag -a v1.0 -m this is version 1.0 tag.</p>
      <p>
      <pre><strong>$ git merge</strong></pre>
      </p>
      <p>Tags a specific commit with a simple, human readable handle that never moves. Example: git tag -a v1.0 -m this is version 1.0 tag.</p>
      <p>
      <pre><strong>$ git tag</strong></pre>
      </p>
      <p>Fetches all the objects from the remote repository that are not present in the local one. Example: git fetch origin</p>
      <p>
      <pre><strong>$ git fetch</strong></pre>
      </p>
      <p>Fetches the files from the remote repository and merges it with your local one. This command is equal to the git fetch and the git merge sequence. Example: git pull origin</p>
      <p>
      <pre><strong>$ git pull</strong></pre>
      </p>
      <p>Pushes all the modified local objects to the remote repository and advances its branches. Example: git push origin master</p>
      <p>
      <pre><strong>$ git push</strong></pre>
      </p>
      <p>Shows all the remote versions of your repository. Example: git remote origin</p>
      <p>
      <pre><strong>$ git remote</strong></pre>
      </p>
      <p>Shows a listing of commits on a branch including the corresponding details. Example: git log commit 84f241e8a0d768fb37ff7ad40e294b61a99a0abe Author: User <user@domain.com> Date: Mon May 3 09:24:05 2010 +0300 first commit</p>
      <p>
      <pre><strong>$ git log</strong></pre>
      </p>
      <p>Shows information about a git object. Example: git show commit 84f241e8a0d768fb37ff7ad40e294b61a99a0abe Author: User <user@domain.com> Date: Mon May 3 09:24:05 2010 +0300 first commit diff --git a/README b/README new file mode 100644 index 0000000..e69de29</p>
      <p>
      <pre><strong>$ git show</strong></pre>
      </p>
      <p>Shows a tree object, including the mode and the name of each item and the SHA-1 value of the blob or the tree that it points to. Example: git ls-tree master^{tree} 100644 blob e69de29bb2d1d6434b8b29ae775ad8c2e48c5391 README</p>
      <p>
      <pre><strong>$ git ls -tree</strong></pre>
      </p>
      <p>Used to view the type of an object through the SHA-1 value. Example: git cat-file -t e69dasdfb2d1d64dsf449ae775adddeggs44391 blob</p>
      <p>
      <pre><strong>$ git cat -file</strong></pre>
      </p>
      <p>Lets you search through your trees of content for words and phrases. Example: git grep "www.allcodingworld.com" -- *.php</p>
      <p>
      <pre><strong>$ git grep</strong></pre>
      </p>
      <p>Generates patch files or statistics of differences between paths or files in your git repository, or your index or your working directory. Example: git diff</p>
      <p>
      <pre><strong>$ git diff</strong></pre>
      </p>
      <p>Graphical Tcl/Tk based interface to a local Git repository. Example: gitk</p>
      <p>
      <pre><strong>$ gitk</strong></pre>
      </p>
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
      <p style="margin-top:40px;"><strong>Related Resources:</strong></p>
      <p><a href="git-tutorial.php">
        <button type="button" class="btn btn-danger relatedtopic">Git</button>
        </a> <a href="github-tutorial.php">
        <button type="button" class="btn btn-danger relatedtopic">Github</button>
        </a> <a href="tortoisesvn-tutorial.php">
        <button type="button" class="btn btn-danger relatedtopic">TortoiseSVN</button>
        </a></p>
      <div class="alert alert-info helpfulmsg" style="display:none;">
        <p><strong>Thanks for your feedback!</strong></p>
      </div>
      <hr class="endtopic"/>
      <div id="addCommentContainer">
        <p>Please Leave a Comment if you like it or have any query!</p>
        <form id="addCommentForm" method="post" action="">
          <div>
          <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" name="name" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="email">Your Email</label>
            <input type="email" name="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="url">Website (not required)</label>
            <input type="text" name="url" class="form-control" id="url">
          </div>
          <div class="form-group">
            <label for="body">Comment</label>
            <textarea name="body" class="form-control" id="body" cols="20" rows="5"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" id="submit" class="btn btn-primary" value="Submit" />
            <!--button type="submit" id="submit" class="btn btn-primary">Submit</button--> 
          </div>
        </form>
      </div>
    </div>
    <hr/>
    <?php

/*
/	Output the comments one by one:
*/

foreach($comments as $c){
	//echo $c->markup();
}
//mysqli_close($conn);
?>
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
