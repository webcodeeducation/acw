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
<meta name="keyword" content="Allcodingword, allcodingworld.com, svn tutorial, git tutorial, github tutorial, download projects, java, php, wordpress, angualrjs, coding stuff, videso tutorial, Hibernate, Spring, Unix, Linux, smartgit, tortoise svn, github desktop,svn commands">
<meta name="robots" content="index, follow">
<meta name="author" content="Laxman rana">
<title>Allcodingworld - All coding at one place</title>

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
<style>
.panel-shadow {
	box-shadow: rgba(0, 0, 0, 0.3) 7px 7px 7px;
}
.panel-white {
	border: 1px solid #dddddd;
}
.panel-white .panel-heading {
	color: #333;
	background-color: #fff;
	border-color: #ddd;
}
.panel-white .panel-footer {
	background-color: #fff;
	border-color: #ddd;
}
.post .post-heading {
	height: 95px;
	padding: 20px 15px;
}
.post .post-heading .avatar {
	width: 60px;
	height: 60px;
	display: block;
	margin-right: 15px;
}
.post .post-heading .meta .title {
	margin-bottom: 0;
}
.post .post-heading .meta .title a {
	color: black;
}
.post .post-heading .meta .title a:hover {
	color: #aaaaaa;
}
.post .post-heading .meta .time {
	margin-top: 8px;
	color: #999;
}
.post .post-image .image {
	width: 100%;
	height: auto;
}
.post .post-description {
	padding: 15px;
}
.post .post-description p {
	font-size: 14px;
}
.post .post-description .stats {
	margin-top: 20px;
}
.post .post-description .stats .stat-item {
	display: inline-block;
	margin-right: 15px;
}
.post .post-description .stats .stat-item .icon {
	margin-right: 8px;
}
.usrpic {
	margin-right: 5px;
}
.counter {
	margin: 0 10px 0 10px;
}
</style>
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
      <h1 class="page-header">Advanced Tutorial <small>Allcodingworld</small> </h1>
      <ol class="breadcrumb">
        <li><a href="index.php">Home</a> </li>
        <li class="active">Advanced</li>
      </ol>
    </div>
  </div>
  
  <!-- /.row --> 
  
  <!-- Content Row -->
  
  <div class="row"> 
    
    <!-- Sidebar Column -->
    
    <div class="col-md-3">
      <div class="list-group"> <a href="index.php" class="list-group-item active">Git Home</a> <a href="#Use-git" class="list-group-item">You know How to use Git?</a> <a href="#Commit" class="list-group-item">You know How to Commit?</a> <a href="#Clone" class="list-group-item">You know How to Clone?</a> <a href="#Add-Remove" class="list-group-item">You know How to add/remove Branch?</a> <a href="#Remote" class="list-group-item">You know about remotes?</a> <a href="#Pull" class="list-group-item">You know How to Pull?</a> <a href="#Push" class="list-group-item">You know How to Push?</a> <a href="#Merge" class="list-group-item">You know How to Merge?</a> <a href="#Life-cycle" class="list-group-item">You know Git Life Cycle?</a> <a href="#"Work-flow class="list-group-item">You know Git Work Flow</a> <a href="#Recover" class="list-group-item">You know How to Recover?</a> <a href="#Feature-branch" class="list-group-item">You know Git Feature Branch?</a> <a href="faq.php" class="list-group-item">FAQ</a> 
        
        <!--a href="pricing.php" class="list-group-item">Join Session</a--> 
        
      </div>
      <div class="subscribe">
        <form class="form" name="subscribeform" id="subscribeform">
          <div class="form-group pull-center">
            <label for="email">Subscribe</label>
            <label for="message">Enter your email address to subscribe to this blog and receive notifications of new posts by email.</label>
            <hr>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
            <input type="hidden" name="subscribetopic" id="subscribetopic" value="advanced"/>
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
      <!-- Advertise here -->
      <div class="advertise_here">
        <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ac&ref=tf_til&ad_type=product_link&tracking_id=allcodingworl-21&marketplace=amazon&region=IN&placement=B0182CZC3C&asins=B0182CZC3C&linkId=46d29c2c559431ae39aa54b6e2fd5a24&show_border=false&link_opens_in_new_window=false&price_color=000000&title_color=080808&bg_color=ffffff"> </iframe>
      </div>
      <!-- Advertise here -->
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
      <div style="float: right;
    margin-top: 25px;" class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
      <h2>Advanced tutorial</h2>
      <p>This tutorial explains how to import a new project into Git, make changes to it, and share changes with other developers.</p>
      <h2 id="Use-git">You know How to use Git?</h2>
      <p>Git Generally Only Adds Data . When you do actions in Git, nearly all of them only add data to the Git database. It is hard to get the system to do anything that is not undoable or to make it erase data in any way. As in any VCS, you can lose or mess up changes you haven’t committed yet; but after you commit a snapshot into Git, it is very difficult to lose, especially if you regularly push your database to another repository.</p>
      <h3>The Three States</h3>
      <p> This is the main thing to remember about Git if you want the rest of your learning process to go smoothly. Git has three main states that your files can reside in: committed, modified, and staged. Committed means that the data is safely stored in your local database. Modified means that you have changed the file but have not committed it to your database yet. Staged means that you have marked a modified file in its current version to go into your next commit snapshot.</p>
      <p><img class="img-responsive center-block" src="media/git/git-stages.png" alt="Git main states"></p>
      <p>The basic Git workflow goes something like this:
        You modify files in your working tree. You stage the files, adding snapshots of them to your staging area. You do a commit, which takes the files as they are in the staging area and stores that snapshot permanently to your Git directory.</p>
      <h2 id="Commit">You know How to Commit?</h2>
      <p>Stores the current contents of the index in a new commit along with a log message from the user describing the changes.</p>
      <p>Remember that each file in your working directory can be in one of two states: tracked or untracked. Tracked files are files that were in the last snapshot; they can be unmodified, modified, or staged. Untracked files are everything else – any files in your working directory that were not in your last snapshot and are not in your staging area. When you first clone a repository, all of your files will be tracked and unmodified because Git just checked them out and you haven’t edited anything.</p>
      <h3>Checking the Status of Your Files</h3>
      <p>
      <pre>$ git status</pre>
      </p>
      <p>This means you have a clean working directory – in other words, none of your tracked files are modified. Git also doesn’t see any untracked files, or they would be listed here. Finally, the command tells you which branch you’re on and informs you that it has not diverged from the same branch on the server.</p>
      <h3>Adding New Files</h3>
      <p>To begin adding the README file, you can run this:</p>
      <p>
      <pre>$  git add README</pre>
      </p>
      <p>If you run your status command again, you can see that your README file is now tracked and staged to be committed:</p>
      <p>
      <pre>$  git status</pre>
      </p>
      <p>If you commit at this point, the version of the file at the time you ran git add is what will be in the historical snapshot. </p>
      <h2 id="Clone">You know How to Clone?</h2>
      <p>If you want to get a copy of an existing Git repository – for example, a project you’d like to contribute to – the command you need is git clone. If you’re familiar with other VCS systems such as Subversion, you’ll notice that the command is "clone" and not "checkout".</p>
      <p>
      <pre>$  git clone https://github.com/Allcodingword/allcodingworld</pre>
      </p>
      <p>That creates a directory named "allcodingworld", initializes a .git directory inside it, pulls down all the data for that repository, and checks out a working copy of the latest version.</p>
      <h2 id="Add-Remove">You know How to add/remove Branch?</h2>
      <p>Creating a branch or removing is so simple on git.</p>
      <p>
      <pre>$  git branch BRANCH_NAME</pre>
      </p>
      <p>There are two ways to delete a branch:</p>
      <p>
      <ul class="list-group">
        <li class="list-group-item">-d makes sure that the changes have been committed to the master branch</li>
        <li class="list-group-item">-D just nukes the entire branch and all of its changes, committed or not</li>
      </ul>
      </p>
      <p>
      <pre>$ git branch -d &lt;branch name&gt;</pre>
      </p>
      <p>
      <pre>$ git branch -D &lt;branch name&gt;</pre>
      </p>
      <h2>You know about remotes?</h2>
      <p>Usage</p>
      <p>
      <pre>$ git clone &lt;REMOTE_REPOSITORY&gt;</pre>
      </p>
      <p>Clone the repository located at onto the local machine. The original repository can be located on the local filesystem or on a remote machine accessible via HTTP or SSH.</p>
      <p>Clone the repository like:</p>
      <p>
      <pre>$ git clone https://github.com/Repository/Directory</pre>
      </p>
      <p>For example, if we want to clone a remote repository on our local system, Type:</p>
      <p>
      <pre>$ git clone https://github.com/Allcodingworld/allcodingworld</pre>
      </p>
      <h2 id="Pull">You know How to Pull?</h2>
      <p>In their simplest form, pull requests are a mechanism for a developer to notify team members that they have completed a feature. Once their feature branch is ready, the developer files a pull request via their pull command.</p>
      <p>
      <pre>$git pull origin master</pre>
      </p>
      <p>Here master is a branch name of remote repository. When you file a pull request, all you’re doing is requesting that another developer pulls a branch from your repository into their repository.</p>
      <h2>You know How to Push?</h2>
      <p>Here we explain how to push to an existing repository.</p>
      <p>Create a new repository on GitHub. To avoid errors, do not initialize the new repository with README, license, or gitignore files. You can add these files after your project has been pushed to GitHub.</p>
      <p>Open Git Bash. On your computer, go to your directory using the terminal. using the linux command line you would cd into the directory. From here you run the following commands to "connect" your existing project to your repo on github. (This is assuming that you created your repo on github and it is currently empty)</p>
      <p>Change the current working directory to your local project.</p>
      <p>Initialize the local directory as a Git repository.</p>
      <p>
      <pre>$ git init</pre>
      </p>
      <p>Add the files in your new local repository. This stages them for the first commit.</p>
      <p>
      <pre>$ git add .</pre>
      </p>
      <p>Commit the files that you've staged in your local repository.</p>
      <p>
      <pre>$ git commit -m "Initial commit"</pre>
      </p>
      <p>At the top of your GitHub repository's Quick Setup page, click  to copy the remote repository URL.</p>
      <p>
      <pre>$ git commit -m "Initial commit"</pre>
      </p>
      <p>In the Command prompt, add the URL for the remote repository where your local repository will be pushed.</p>
      <p>
      <pre>$ git remote add origin REMOTE_REPOSIDTORY_URL</pre>
      </p>
      <p>Push the changes in your local repository to GitHub. Then you can push your changes to github</p>
      <p>
      <pre>$ git push origin master</pre>
      </p>
      <h2 id="Merge">You know how to merge?</h2>
      <p>Merge a pull request into the upstream branch when work is completed. Anyone with push access to the repository can complete the merge.
        If the pull request does not have any merge conflicts, you can merge it on GitHub. If the pull request does have merge conflicts, or if you'd like to test the changes before merging, you can check out the pull request locally and merge it using the command line.</p>
      <p>When you select the new "Rebase and merge" option,
        the commits from the pull request's branch are rebased on to the tip
        of the base branch, and then the base branch itself is fast forwarded
        to this newly rebased head. Rebases automatically set the committer of
        the rebased commits to the current user, while keeping authorship
        information intact.
        The pull request's branch will not be modified by this operation.</p>
      <p>Under your repository name, click <kbd>Pull requests</kbd>.</p>
      <p>In the "Pull Requests" list, click the pull request you'd like to merge.</p>
      <p>If you clicked Rebase and merge in step 3, click Confirm rebase and merge.</p>
      <h2 id="Life-cycle">You know Git life Cycle?</h2>
      <p>Essentially, Git comprises of four separate storage locations: your workspace, the local index, the local repository and the remote repository.</p>
      <p><img class="img-responsive center-block" src="media/git/git-life-cycle.png" alt="Git life cycle"></p>
      <h2>You know Git Work Flow?</h2>
      <p>Now that you have the basics of branching and merging down, what can or should you do with them? In this section, we’ll cover some common workflows that this lightweight branching makes possible, so you can decide if you would like to incorporate it into your own development cycle.</p>
      <p>In reality, we’re talking about pointers moving up the line of commits you’re making. The stable branches are farther down the line in your commit history, and the bleeding-edge branches are farther up the history.</p>
      <p>Consider how a common Git workflow falls apart.</p>
      <p>
      <ul class="list-group">
        <li class="list-group-item">1. Create a branch off Master.</li>
        <li class="list-group-item">2. Do Work</li>
        <li class="list-group-item">3. Merge it back to Master when done</li>
      </ul>
      </p>
      <p>Think of branches in two categories: public and private.</p>
      <p>Public branches are the authoritative history of the project. In a public branch, every commit should be succinct, atomic, and have a well documented commit message. It should be as linear as possible. It should be immutable. Public branches include Master and release branches.</p>
      <p>A private branch is for yourself. It’s your scratch paper while working out a problem.</p>
      <p>It’s important to remember when you’re doing all this that these branches are completely local. When you’re branching and merging, everything is being done only in your Git repository – no server communication is happening.</p>
      <h2 id="Recover">You know how to recover?</h2>
      <p>First look at the reflog git reflog (for HEAD) or, perhaps easier if the commit was part of a specific branch still existing git reflog name-of-my-branch.</p>
      <p>Create a list of all dangling or unreachable commits.</p>
      <p>
      <pre>$ git fsck --full --no-reflogs --unreachable --lost-found</pre>
      </p>
      <p>Print a list of commit messages for all commits in the lost and found.</p>
      <p>
      <pre>$ ls -1 .git/lost-found/commit/ | xargs -n 1 git log -n 1 --pretty=oneline</pre>
      </p>
      <p>Find your missing commit through the process of manual inspection (i.e. reading). Create a new branch with the missing commit as the branch head.</p>
      <p>
      <pre>$ git checkout -b branch-name SHA</pre>
      </p>
      <p>Suppose You accidentally deleted a branch in your Git repository. To restore the branch, use: </p>
      <p>
      <pre>$ git checkout -b &lt;branch&gt; <sha>
</pre>
      </p>
      <p>Find the 'sha' for the commit at the tip of your deleted branch using:</p>
      <p>
      <pre>$ git reflog</pre>
      </p>
      <p>You can then display each commit using one of these:</p>
      <p>
      <pre>$ git log -p <commit>
</pre>
      </p>
      <p>
      <pre>$ git cat-file -p <commit>
</pre>
      </p>
      <!-- Advertise here -->
      <div class="advertise_here"> </div>
      <!-- Advertise here -->
      <h2 id="Feature-branch">You know Git Feature Branch?</h2>
      <p>When it comes to learning Git, most folks I’ve talked to (myself included) have taken the slow and gentle path toward becoming proficient by adding it incrementally to their existing development processes.</p>
      <p>In your github fork, you need to keep your master branch clean, by clean I mean without any changes, like that you can create at any time a branch from your master. Each time, that you want to commit a bug or a feature, you need to create a branch for it, which will be a copy of your master branch.</p>
      <p>When you do a pull request on a branch, you can continue to work on another branch and make another pull request on this other branch.</p>
      <p>We begin by just running git init on an almost finished project and adding everything with a commit message such as start. Then, we learn a bit more about good commit messages and chunking up changesets. Collaborating through GitHub and merging comes next.</p>
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
      <div class="pull-right btnfblike"></div>
      <hr class="endtopic"/>
      
      <!-- Comment Section Start -->
      <div id="main">
        <div id="addCommentContainer">
          <p>Please Leave a Comment if you like it or have any query!</p>
          <form id="addCommentForm" method="post" action="">
            <input type="hidden" name="advancedtutorial" id="advancedtutorial">
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
	echo $c->markup();
}
mysqli_close($conn);
?>
    </div>
    
    <!-- Comment Section End -- > 
    
  </div>
</div>

<!--row -->

<hr>
</div>
</div>
</div>

<!-- /.container -->
<?php

include 'inc/footer.php';

?>

<!-- jQuery --> 

<script src="js/jquery.js"></script> 
<script src="js/global.js"></script> 
<script src="js/commentscript.js"></script> 

<!-- Bootstrap Core JavaScript --> 

<script src="js/bootstrap.min.js"></script>
</body>
</html>
