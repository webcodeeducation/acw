<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Allcodingworld is a online portal or place where you can find all coding stuff with example and demos. Allcodingworld presenting easy demonstration of coding stuff with videos tutorials. Here you can see all find and see all videos link to learn with easily step by step.">
<meta name="keyword" content="Allcodingword, allcodingworld.com, svn tutorial, git tutorial, github tutorial, download projects, java, php, wordpress, angualrjs, coding stuff, videso tutorial, Hibernate, Spring, Unix, Linux, smartgit, tortoise svn, github desktop,svn commands">
<meta name="robots" content="index, follow">
<meta name="author" content="Laxman rana">
<title>SmartGit tutorial at Allcodingworld - All coding at one place</title>

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
      <h1 class="page-header">SmartGit <small>allcodingworld</small> </h1>
      <ol class="breadcrumb">
        <li><a href="index.php">Home</a> </li>
        <li class="active">SmartGit</li>
      </ol>
    </div>
  </div>
  
  <!-- /.row --> 
  
  <!-- Content Row -->
  
  <div class="row"> 
    
    <!-- Sidebar Column -->
    
    <div class="col-md-3">
      <div class="list-group"> <a href="index.php" class="list-group-item active">Home</a> <a href="#" class="list-group-item">Log</a> <a href="#" class="list-group-item">Blame</a> <a href="#" class="list-group-item">Git-Flow</a> <a href="#" class="list-group-item">Journal View</a> <a href="#" class="list-group-item">Repository Settings</a> <a href="#" class="list-group-item">Integrations</a> <a href="#" class="list-group-item">Advanced Settings</a> <a href="#" class="list-group-item">SVN Integration</a> <a href="#" class="list-group-item">Command Line Option</a> <a href="#" class="list-group-item">Tips and Tricks</a> <a href="#" class="list-group-item active">Advanced</a> <a href="faq.php" class="list-group-item">FAQ</a> 
        
        <!--a href="404.html" class="list-group-item">more</a--> 
        
        <a href="pricing.php" class="list-group-item">Join Session</a> </div>
      <div class="subscribe">
        <form class="form" name="subscribeform" id="subscribeform">
          <div class="form-group pull-center">
            <label for="email">Subscribe</label>
            <label for="message">Enter your email address to subscribe to this blog and receive notifications of new posts by email.</label>
            <hr>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
            <input type="hidden" name="subscribetopic" id="subscribetopic" value="smartgit"/>
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
      <h2>SmartGit</h2>
      <p><kbd>SmartGit</kbd> is a graphical Git and Mercurial client which can also connect to SVN repositories.</p>
      <p>In SmartGit, no need to install and configure additional tools.</p>
      <p>SmartGit comes with:</p>
      <p>
      <ul class="list-group">
        <li class="list-group-item">1. Git-Flow.</li>
        <li class="list-group-item">2. SSH-client</li>
        <li class="list-group-item">2. File Compare/Merge</li>
      </ul>
      </p>
      <p>You can use SmartGit for <code>Git</code> or <code>SVN</code>. SmartGit’s target audience are users who need to manage a number of related files in a directory structure, to coordinate access to them in a multiuser
        environment and to track changes to these files. Typical areas of applications are software projects, documentation projects or website projects.</p>
      <p>SmartGit comes with special integrations for GitHub, BitBucket and Atlassian Stash to create and resolve Pull Requests and Review Comments.
        Of course, you can use SmartGit with your own repositories or other hosting providers (e.g. GitLab).</p>
      <h2>Log</h2>
      <p>The history of an opened repository is displayed in a separate window, the so-called Log window, and many Git/Mercurial commands can be performed both on the main window and the Log window, such as switching between branches, merging branches, creating branches and tags, etc.</p>
      <h2>Blame</h2>
      <p>SmartGit's Blame window displays the history information for a single file in a way that helps you to track down the commit in which a certain portion of code was introduced into the repository. You can open the Blame window by selecting a file in the Files view in SmartGit's main window and invoking Query|Blame from the program menu. The Blame window consists of a Document view and a History of current line view.</p>
      <h2>Git-flow</h2>
      <p>Git-Flow is a high-level command set wrapping low-level Git commands to support the "successful branching model". It reduces the workflow steps necessary for the user.
        To achieve this, Git-Flow assigns a special meaning to its branches. For Git-Flow, there are two main branches which live forever, the 'develop' and 'master' branch.</p>
      <h3>Git-Flow Commands</h3>
      <p>
      <pre>Configure</pre>
      </p>
      <p>Use this command before starting to use Git-Flow. You can use the default branch naming or change it according to your needs. This will write the Git-Flow configuration to .git/config of your repository.</p>
      <h3>Start Feature</h3>
      <p>Use this command to start the work on a new feature. After providing a name for the feature, the corresponding feature branch will be forked off the develop branch and this new feature branch will be checked out.</p>
      <h3>Finish Feature</h3>
      <p>Use this command if you have committed your changes necessary for the feature and want to integrate them into main development line. There are 3 ways of doing this: by creating a merge commit (your feature commits will be preserved), by creating a simple commit (all your feature commits will be squashed into one commit) or by using rebase (your feature commits will be re-created on top of the develop branch). When merging or squashing, you need to enter the commit message for the new commit. Usually, you need to push the develop branch later.</p>
      <h2>Journal View</h2>
      <p>The Journal shows a compact history (Log) for the current branch.</p>
      <h2>Repository Settings</h2>
      <p>Use this dialog to configure certain options of your repository or make these settings globally by selecting the "Remember as default" checkbox.</p>
      <p>
      <pre>Pull</pre>
      </p>
      <p>With these settings you can configure whether to delete obsolete remote branches or how to handle submodules when pulling.</p>
      <p>
      <pre>Commit</pre>
      </p>
      <p>With these settings you can configure what name and email address should be used when committing, as well as whether to sign all commits.</p>
      <h2>Integration</h2>
      <p>SmartGit provides an elaborate integration for following hosting providers:</p>
      <p>It provides a basic integration (primarily Clone) for Assembla, Beanstalk, Codebase, GitLab and Unfuddle.
        SmartGit also integrates with JIRA.</p>
      <p style="margin-top:40px;"><strong>Related Resources:</strong></p>
      <p><a href="git-tutorial.php">
        <button type="button" class="btn btn-danger relatedtopic">Git</button>
        </a> <a href="github-tutorial.php">
        <button type="button" class="btn btn-danger relatedtopic">Github</button>
        </a> <a href="tortoisesvn-tutorial.php">
        <button type="button" class="btn btn-danger relatedtopic">TortoiseSVN</button>
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
