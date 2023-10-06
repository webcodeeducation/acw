<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Simple tutorial about Github.">
<meta name="keywords" content="Simple learn Github, Github, Github tutorial, Learn Github, vcs, github documentation, github commit, pull on github, push to github">
<meta name="robots" content="index, follow">
<meta name="author" content="Laxman rana">
<title>Github tutorial at Allcodingworld - All coding at one place</title>

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

<script>

</script>
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
    <h1 class="page-header">Github <small>allcodingworld</small> </h1>
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
  <div class="list-group"> <a href="index.php" class="list-group-item active">Home</a> <a href="#" class="list-group-item">What is Github?</a> <a href="#" class="list-group-item">Github Flow</a> <a href="#" class="list-group-item">Create a Pull Request</a> <a href="#" class="list-group-item">Forking Projects</a> <a href="#" class="list-group-item">Adding Collaborator</a> <a href="#" class="list-group-item">Authenticating to Github</a> <a href="#" class="list-group-item">Resolve Conflicts</a> <a href="#" class="list-group-item">Security</a> <a href="#" class="list-group-item">Deleting Repository</a> <a href="#" class="list-group-item">Mastering Issue</a> <a href="#" class="list-group-item">Add ReadMe File</a> <a href="#" class="list-group-item active">Advanced</a> <a href="faq.php" class="list-group-item">More</a> 
    
    <!--a href="pricing.php" class="list-group-item">Join Session</a--> 
    
  </div>
  <hr>
  <div class="subscribe">
    <form class="form" name="subscribeform" id="subscribeform">
      <div class="form-group pull-center">
        <label for="email">Subscribe</label>
        <label for="message">Enter your email address to subscribe to this blog and receive notifications of new posts by email.</label>
        <hr>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
        <input type="hidden" name="subscribetopic" id="subscribetopic" value="github"/>
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
<h2>GitHub</h2>
<p><kbd>GitHub</kbd> is a code hosting platform for version control and collaboration. It lets you and others work together on projects from anywhere.</p>

<!--div class="code">

					<!--span class="list-group-item active">How to create a repository?</span>

					<span><pre> <strong>$ cd ~:</strong>

					<p>To reach home directory</p>

					<!--img class="img-responsive" src=""/></pre></span>
				  </div-->

<p>This tutorial teaches you GitHub essentials like
  <mark>repositories</mark>
  ,
  <mark>branches</mark>
  ,
  <mark>commits</mark>
  , and
  <mark>Pull Requests</mark>
  . You’ll create your own Hello World repository and learn GitHub’s Pull Request workflow, a popular way to create and review code.</p>
<h2>What is GitHub?</h2>
<p>To understand GitHub, you must first have an understanding of Git. Git is an open-source version control system that was started by Linus Trovalds.</p>
<p><img class="img-responsive center-block" src="media/git/github-flows.png" alt="Github Flows"></p>
<p>A <code>repository</code> is a location where all the files for a particular project are stored, usually abbreviated to <kbd>repo</kbd>. Each project will have its own repo, and can be accessed by a unique URL.</p>
<p>
<pre>$ https://github.com/Allcodingworld/allcodingworld</pre>
</p>
<p>Now that you know what GitHub is all about, are you ready to get started?</p>
<h2>Create a Pull request?</h2>
<p>Precisely changes from a remote repository into the current branch. In its default mode, git pull is shorthand for git fetch followed by git merge FETCH_HEAD.</p>
<p><img class="img-responsive center-block" src="media/git/pull-request-flow.png" alt="Pull Request by Github"></p>
<p></p>
<h2>Contribute on Github</h2>
<p>This is basically the Integration Manager workflow covered in Integration-Manager Workflow, but instead of using email to communicate and review changes, teams use GitHub web based tools.</p>
<p><img class="img-responsive center-block" src="media/github/fork-icon.png" alt="Fork Icon on Github"></p>
<p>First, we click the Fork button as mentioned earlier to get our own copy of the project. Our user name here is <kbd>Allcodingworld</kbd> so our copy of this project is at <kbd>https://github.com/Allcodingworld/allcodingworld</kbd> and that&#39;s where we can edit it.</p>
<!--p class="label label-success">Contribution Chart</p>
		<div id="line-chart" style="min-height: 250px;"></div-->

<p>You can alternatively go to the <code>Branches</code> page at <kbd>https://github.com/USER/Project/Branches</kbd> to locate your branch and open a new Pull Request from there.</p>
<p>Steps as follow:</p>
<p>
<ul class="list-group">
  <li class="list-group-item">1. Clone our fork of the project locally</li>
  <li class="list-group-item">2. Create a descriptive topic branch</li>
  <li class="list-group-item">3. Make our change to the code</li>
  <li class="list-group-item">4. Check that the change is good</li>
  <li class="list-group-item">5. Commit our change to the topic branch</li>
  <li class="list-group-item">6. Push our new topic branch back up to our GitHub fork</li>
</ul>
</p>
<h2>Forking Project</h2>
<p>Firstly you need a local fork of the project, so go ahead and press the <kbd>fork</kbd> button on GitHub. This will create a copy of the repository in your own GitHub account and you'll see a note that it's been forked underneath the project name.</p>
<p>To fork a project, visit the project page and click the <kbd>Fork</kbd> button at the top-right of the page.</p>
<p><img class="img-responsive center-block" src="media/github/fork-button.png" alt="Fork Button"></p>
<p>Now you need a copy locally, so find the "SSH clone URL" in the right hand column and use that to clone locally using a terminal.</p>
<p>
<pre> $ https://github.com/Allcodingworld/allcodingworld</pre>
</p>
<p>Say you want to contribute changes to someone else’s repository (eg, https://github.com/Allcodingworld/allcodingworld).</p>
<p>
<ul class="list-group">
  <li class="list-group-item">1. Go to the repository on github. (Say it’s by myfriend, and is called the_repo, then you’ll find it at https://github.com/Allcodingworld/allcodingworld)</li>
  <li class="list-group-item">2. Click the "Fork" button at the top right.</li>
  <li class="list-group-item">3. You’ll now have your own copy of that repository in your github account.</li>
  <li class="list-group-item">4. Open a terminal/shell.</li>
  </p>
  <p>or  you can clone by Command like:</p>
  <p>
  <pre><code>$ git clone git@github.com:USERNAME/REPO_NAME</code></pre>
  </p>
</ul>
<p>Which will do something like this:</p>
<p><img class="img-responsive center-block" src="media/github/fork-clone.png" alt="Clone by Fork"></p>
<h2>Adding Collaborators on github</h2>
<p>You can invite users to become collaborators to your personal repository. In the repository, click <kbd>Admin<kbd>, then go to the <kbd>Collaborators<kbd> tab.</p>
<p>All steps as follow below:</p>
<p>
<ul class="list-group">
  <li class="list-group-item">1. On GitHub, navigate to the main page of the repository.</li>
  <li class="list-group-item">2. Under your repository name, click <span class="glyphicon glyphicon-cog"></span> Settings.</li>
  <li class="list-group-item">3. In the left sidebar, click Collaborators.</li>
  <li class="list-group-item">4. Under "Collaborators", start typing the collaborator's username.</li>
  <li class="list-group-item">5. In the left sidebar, click Collaborators.</li>
  <li class="list-group-item">6. Select the collaborator's username from the drop-down menu.</li>
  <li class="list-group-item">7. Click Add collaborator.</li>
  <li class="list-group-item">8. The user will receive an email inviting them to the repository. Once they accept your invitation, they will have collaborator access to your repository.</li>
</ul>
</p>
<p>Remove user from repository:</p>
<p>
<pre><code>$ DELETE /Repository/:Owner/:Repository/Collaborator/:Username</code></pre>
</p>
<h2>Authenticating to Github</h2>
<p>Steps to authorize a applicatin like:</p>
<p>1. Click on profile picture and go to setting option below.</p>
<p><img class="img-responsive center-block" src="media/github/authentication-setting.png" alt="Setting Option on Github"></p>
<p>2. Now Click on authorize application tab in left side.</p>
<p><img class="img-responsive center-block" src="media/github/authorize-application.png" alt="Authorize Button"></p>
<p>3. After a authorize your application you will see like below:</p>
<p><img class="img-responsive center-block" src="media/github/after-authorize.png" alt="Message after Authorized"></p>
<h2>Resolve Conflicts</h2>
<p>In Git, "<code>merging</code>" is the act of integrating another branch into your current working branch. You're taking changes from another context (that's what a branch effectively is: a context) and combine them with your current working files.</p>
<p>A great thing about having Git as your version control system is that it makes merging extremely easy: in most cases, Git will figure out how to integrate new changes.</p>
<p>Sometimes you’ll discover that your GitHub fork and the upstream repository have changes that GitHub can’t merge.</p>
<p>It opens a GUI that steps you through each conflict, and you get to choose how to merge. Sometimes it requires a bit of hand editing afterwards, but usually it's enough by itself. It is much better than doing the whole thing by hand certainly.</p>
<p>Git simply cannot know what is correct. Git will then mark the file as having a conflict - which you'll have to solve before you can continue your work.</p>
<p>To resolve a merge conflict caused by competing line changes, you must choose which changes to incorporate from the different branches in a new commit.</p>
<p>
<pre>git mergetool</pre>
</p>
<p>Every time we face issue during conflicts from diffrent commits to developers. so this questin raise in mind. "How to Solve a Merge Conflict". Git simply cannot know what is correct.</p>
<p>When faced with a merge conflict, the first step is to understand what happened.</p>
<p>
<pre>$ git status</pre>
</p>
<p>Let's take an in-depth look on how to solve the most common case, when two changes affected the same file on the same lines. Now is the time to have a look at the contents of the conflicted file. Git was nice enough to mark the problematic area in the file</p>
<p>Opening the raw file in your editor and cleaning it up there is perfectly valid, but not very comfortable. Using a dedicated merge tool can make this job a great deal easier (if you have one installed...).</p>
<p>For Example Generate a list of the files affected by the merge conflict. In this example, the file README.md has a merge conflict.</p>
<p>
<pre>$ git rm README.md</pre>
</p>
<h2>Security in Github</h2>
<p>We know your code is extremely important to you and your repositories on github also, and we're very protective of it. After all, GitHub's code is hosted on GitHub, that are open source to everyone except private repository on github account. So security concern is very serius matter on github to all repository that how we can protect it.</p>
<p>All private data exchanged with GitHub is always transmitted over SSL (which is why your dashboard is served over HTTPS, for instance). All pushing and pulling of private data is done over SSH authenticated with keys, or over HTTPS using your GitHub username and password.</p>
<p>To configure your GitHub account to use your new (or existing) SSH key, you'll also need to add it to your GitHub account. Before adding a new SSH key to your GitHub account, you should have:</p>
<p>Click New SSH key or Add SSH key.</p>
<p><img class="img-responsive center-block" src="media/github/security-keys.png" alt="Security Keys"></p>
<p>Paste your key into the "Key" field. The Add key buttonClick Add SSH key. If prompted, confirm your GitHub password.</p>
<p>The SSH login credentials used to push and pull can not be used to access a shell or the filesystem. All users are virtual and have no user account on our machines. Using the SSH protocol, you can connect and authenticate to remote servers and services. With SSH keys, you can connect to GitHub without supplying your username or password at each visit.</p>
<p>To configure your GitHub account to use your new (or existing) SSH key, you'll also need to add it to your GitHub account.</p>
<h2>Deleting Repository</h2>
<p>You can delete any repository or fork if you're either an organization owner or have admin permissions for the repository or fork.</p>
<p>
<pre>https://github.com/YOUR-USERNAME/YOUR-REPOSITORY/settings</pre>
</p>
<p>You can click profile picture and go to settings tab of repository that you want to delete.</p>
<p><img class="img-responsive center-block" src="media/github/delete-repo-opt1.png" alt="Delete a repository"></p>
<p>Go to bottom page after click settings tab.</p>
<p><img class="img-responsive center-block" src="media/github/delete-repo-opt2.png" alt="Delete Repository Button"></p>
<p>You can click "<code>Delete this repository</code>" button.</p>
<p><img class="img-responsive center-block" src="media/github/delete-repo-opt3.png" alt="Delete to Confirmation message"></p>
<p>After click <code>Delete this repository</code> button. You are prompted to enter repository name and click on <kbd>confirm</kbd> to delete button above.</p>
<h2>Mastering Issue</h2>
<p>Issues are a great way to keep track of tasks, enhancements, and bugs for your projects. GitHub&#39;s issue tracking is special because of our focus on collaboration, references, and excellent text formatting.</p>
<p>Most software projects have a bug tracker of some kind. GitHub&#39;s tracker is called Issues, and has its own section in every repository.</p>
<p>
<ul class="list-group">
<li class="list-group-item">1. A title and description describe what the issue is all about.</li>
<li class="list-group-item">2. Color-coded labels help you categorize and filter your issues (just like labels in email).</li>
<li class="list-group-item">3. A milestone acts like a container for issues. This is useful for associating issues with specific features or project phases</li>
<li class="list-group-item">4. One assignee is responsible for working on the issue at any given time.</li>
<li class="list-group-item">5. Comments allow anyone with access to the repository to provide feedback.</li>
</p>
<h2>Add Readme.md File</h2>
<p><kbd>READMEs</kbd> do more than explain how to use your project. They also explain why your project matters, and what your users can do with it.</p>
<p>This file describe about project or repository that we are working on it. A <kbd>README</kbd> is often the first item a visitor will see when visiting your repository. README files typically include information on:</p>
<p>
<ul class="list-group">
<li class="list-group-item">1. What the project does</li>
<li class="list-group-item">2. Why the project is useful</li>
<li class="list-group-item">3. How users can get started with the project</li>
<li class="list-group-item">4. Where users can get help with your project</li>
<li class="list-group-item">5. Who maintains and contributes to the project</li>
</p>
<p style="margin-top:40px;"><strong>Related Resources:</strong></p>
<p><a href="git-tutorial.php">
  <button type="button" class="btn btn-danger relatedtopic">Git</button>
  </a><a href="github-commands-tutorial.php">
  <button type="button" class="btn btn-danger relatedtopic">Github Commands</button>
  </a> <a href="tortoisesvn-tutorial.php">
  <button type="button" class="btn btn-danger relatedtopic">TortoiseSVN</button>
  </a> </p>
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
<?php

include 'inc/footer.php';

?>
<!-- /.container --> 

<!-- jQuery --> 

<script src="js/jquery.js"></script> 

<!-- global --> 

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
