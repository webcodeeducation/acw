<?php
error_reporting(0);
include 'bin/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Simple learn Version Control System Tutorials at allcodingworld. Learn all about VCS">
<meta name="keywords" content="VCS, Version Control System,git,github,git commit, vcs tutorial">
<meta name="robots" content="index, follow">
<meta name="author" content="Laxman rana">
<title>Version control system at Allcodingworld - All coding at one place</title>

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
      <h1 class="page-header">VCS <small>allcodingworld</small> </h1>
      <ol class="breadcrumb">
        <li><a href="index.php">Home</a> </li>
        <li class="active">VCS</li>
      </ol>
    </div>
  </div>
  
  <!-- /.row --> 
  
  <!-- Content Row -->
  
  <div class="row"> 
    
    <!-- Sidebar Column -->
    
    <div class="col-md-3">
      <div class="list-group"> <a href="index.php" class="list-group-item active">Home</a> <a href="#" class="list-group-item">What is VCS?</a> <a href="#" class="list-group-item">Basics of VCS</a> <a href="#" class="list-group-item">Benefits of VCS</a> <a href="#" class="list-group-item">About Version Control</a> <a href="#" class="list-group-item">Local Version Control Systems</a> <a href="#" class="list-group-item">Centralize Version Control System</a> <a href="#" class="list-group-item">Distributed Version Control Systems</a> <a href="#" class="list-group-item">Why usefull?</a> <a href="#" class="list-group-item">Version Control System Alternatives</a> <a href="#" class="list-group-item active">Advanced</a> <a href="#" class="list-group-item">More</a> <a href="faq.php" class="list-group-item">FAQ</a> 
        
        <!--a href="pricing.php" class="list-group-item">Join Session</a--> 
        
      </div>
      <div class="subscribe">
        <form class="form" name="subscribeform" id="subscribeform">
          <div class="form-group pull-center">
            <label for="email">Subscribe</label>
            <label for="message">Enter your email address to subscribe to this blog and receive notifications of new posts by email.</label>
            <hr>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
            <input type="hidden" name="subscribetopic" id="subscribetopic" value="vcs"/>
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
      <h2>Version Control System</h2>
      <p>Version control is a system that records changes to a file or set of files over time so that you can recall specific versions later.VCS are sometimes known as SCM (Source Code Management) tools or RCS (Revision Control System).</p>
      <p>Types of Version Control Systems:</p>
      <p>The three most popular version control systems are broken down into two main categories, <kbd>centralized</kbd> and <kbd>decentralized</kbd> (also known as <code>distributed</code>).</p>
      <h2>Basics of Version Control System</h2>
      <p>Version control systems are a category of software tools that help a software team manage changes to source code over time. Many people's version-control method of choice is to copy files into another directory (perhaps a time-stamped directory, if they're clever). This approach is very common because it is so simple, but it is also incredibly error prone. Version control software keeps track of every modification to the code in a special kind of database. If a mistake is made, developers can turn back the clock and compare earlier versions of the code to help fix the mistake while minimizing disruption to all team members.</p>
      <p><img class="img-responsive center-block" src="media/vcs/local-vcs.png"></p>
      <p>Version control software keeps track of every modification to the code in a special kind of database. If a mistake is made, developers can turn back the clock and compare earlier versions of the code to help fix the mistake while minimizing disruption to all team members.</p>
      <h2>Centralized Version Control</h2>
      <p>Centralized VCS systems are designed with the intent that there is One True Source that is Blessed, and therefore Good. All developers work (checkout) from that source, and then add (commit) their changes, which then become similarly Blessed. The only real difference between CVS, Subversion, ClearCase, Perforce, VisualSourceSafe and all the other CVCSes is in the workflow, performance, and integration that each product offers.</p>
      <p>At the time of this writing, the most popular version control system is known as Subversion, which is considered a centralized version control system. The main concept of a centralized system is that it works in a client and server relationship</p>
      <p><img class="img-responsive center-block" src="media/vcs/cvs-working.svg"></p>
      <h2>Distributed Version Control</h2>
      <p>Distributed systems are a newer option. In distributed version control, each user has their own copy of the entire repository, not just the files but the history as well. Think of it as a network of individual repositories.</p>
      <p>Distributed VCS systems are designed with the intent that one repository is as good as any other, and that merges from one repository to another are just another form of communication. Any semantic value as to which repository should be trusted is imposed from the outside by process, not by the software itself.</p>
      <p><img class="img-responsive center-block" src="media/vcs/dvcs-working.svg"></p>
      <h2>Why Usefull?</h2>
      <p>Version control is great for checking previous versions, even if you're working alone. For example, if you accidentally delete code or a file you can get it back; or you can compare previous versions to see why a new bug has crept in. It's also good if you're one person working in multiple locations.</p>
      <p>There are many benefits of using a version control system for your projects. This chapter explains some of them in detail.</p>
      <p>You don't want lose anything. I never again commented out code. I simply delete it. It doesn't clutter my screen, and it isn't lost. I can recover it by checking out an old commit.</p>
      <p>Saving a version of your project after making changes is an essential habit. But without a VCS, this becomes tedious and confusing very quickly.</p>
      <p>A version control system acknowledges that there is only one project. Therefore, there's only the one version on your disk that you're currently working on. Everything else - all the past versions and variants - are neatly packed up inside the VCS. When you need it, you can request any version at any time and you'll have a snapshot of the complete project right at hand.</p>
      <p>The most important question, however, is probably this one: How do you know what exactly is different in these versions? Very few people actually take the time to carefully document each important change and include this in a <kbd>README</kbd> file in the project folder.</p>
      <h2>Version Control System Alternatives</h2>
      <p>As you have several choices today, because of the explosion of decentralized source control softwares, so you need to choose a philosophy because every solution I'm listing here does provide "local version control" :</p>
      <h2>
      Git
      </h3>
      <p>Git is written in C and used by the Linux Kernel and Ruby on Rails.</p>
      <p>Git community is big, fast, very flexible and github is great, really unix environnemnt oriented and their community is made of fanboys, the commands looks alien, requires understanding implementation to use well, lacks of good gui (if you use one- tortoise-git is not as good as tortoise svn or tortoise hg - unrelated projects)</p>
      <h3>Mercurial(Hg)</h3>
      <p>Mercurial written in Python and used by Mozilla and OpenJDK.</p>
      <p>It's looks like git but in a more understable way, rely on python:naturally cross-platform, don't requires understanding internals, easy to extend, tortoiseHG is great!, looks like for very big projects, it might be less flexible than git, but I have yet to understand this statement, bitbucket is great but far less than github, same with google code hosting</p>
      <h3>Bazaar</h3>
      <p>Bazaar written in Python and used by Ubuntu developers.</p>
      <p>like mercurial but is built with C++ if I'm correct, +associated with launchpad that is associated with ubuntu, +integrated gui tool, -less used and less known that the alternatives, -last time I checked, it was known to be slower than mercurial</p>
      <h3>Fossil</h3>
      <p>Fossil is a great solution for very small teams, even teams of one.</p>
      <p>It's made for small teams, provide bugtracking, wiki, forum and others tools inside the repository (!), one unique executable for everything, they say themselve that it's not meant to replace git (or mercurial or bazaar) but might fill the need for a complete compact solution for a small team</p>
      <p>When you discover that keeping a second copy of a repository is a cheap way to get off-site backup, it is easy to arrange. The fossil executable can act as a web server and as a CGI back-end to a full-featured web server to provide for remote access and synchronization.</p>
      <h3>SourceGear Vault</h3>
      <p>I like SourceGear Vault. It integrates nicely into pretty much every major IDE out there, including old ones (e.g. VB6), if you ever need to polish up some old code.</p>
      <p>And it's free for 2 users, which is one more than I need.</p>
      <h3>Darcs</h3>
      <p>Darcs written in Haskell and used by small team.</p>
      <h2>Branching and Merging</h2>
      <p>There are some cases when you want to experiment or commit changes to the repo that could break things elsewhere in your code (like working on a new feature). Instead of committing this code directly to the main set of files (usually referred to as trunk or master), you can create something called a branch. A branch allows you to create a copy (or snapshot) of the repository that you can modify in parallel without altering the main set. You can continue to commit new changes to the branch as you work, while others commit to the trunk or master without the changes affecting each other.</p>
      <p>Once you're comfortable with the experimental code, you will want to make it part of the trunk or master again. This is where merging comes in. Since the version control system has recorded every change so far, it knows how each file has been altered. By merging the branch with the trunk or master (or even another branch), your version control tool will attempt to seamlessly merge each file and line of code automatically. Once a branch is merged it then updates the trunk or master with the latest files.</p>
      <p><img class="img-responsive center-block" src="media/vcs/branch-and-history.png"></p>
      <p>For example, let's say you want to experiment with a new layout for a web site. This may require heavy changes in many files, could break existing code and it may not turn out as expected. It could also take a long time, so you want to continue committing the changes. 
        Instead of committing to the trunk or master set of files, you create a branch. From this point forward, any changes made in the new branch will not affect others in the trunk or master. Days or weeks may go by allowing you to commit changes, test and refine. When the new layout is working properly and you are comfortable with the result you are probably ready to make it a permanent part of the site. This is the point where you will merge the branch with the trunk or master. Once the merge is complete, it will combine the changes from the branch with the most recent version of the trunk or master.</p>
      <h2>The Basic Concentp</h2>
      <h3>Tracking changes</h3>
      <p>A version control system is mostly based around one concept, tracking changes that happen within directories or files. Depending on the version control system, this could vary from knowing a file changed to knowing specific characters or bytes in a file have changed.</p>
      <p>In most cases, you specify a directory or set of files that should have their changes tracked by version control. This can happen by checking out (or cloning) a repository from a host, or by telling the software which of your files you wish to have under version control.</p>
      <p><img class="img-responsive center-block" src="media/vcs/git_snapshots.png"></p>
      <p>The set of files or directories that are under version control are more commonly called a repository.
        
        As you make changes, it will track each change behind the scenes. The process will be transparent to you until you are ready to commit those changes.</p>
      <h3>Committing</h3>
      <p>As you work with your files that are under version control, each change is tracked automatically. This can include <code>modifying</code> a file, <code>deleting</code> a directory, <code>adding</code> a new file, <code>moving</code> files or just about anything else that might alter the state of the file.</p>
      <p> Instead of recording each change individually, the version control system will wait for you to submit your changes as a single collection of actions. In version control, this collection of actions is known as a <kbd>Commit</kbd>.</p>
      <h3>Revisions and Changesets</h3>
      <p>When a commit is made, the changes are recorded as a changeset and given a unique revision. This revision could be in the form of an <code>incremented number</code> (1, 2, 3) or a unique hash (like 846eee7d92415cfd3f8a936d9ba5c3ad345831e5) depending on the system.</p>
      <p><img class="img-responsive center-block" src="media/vcs/vcs-revisions.png"></p>
      <p>By knowing the revision of a changeset it makes it easy to view or reference it later. A changset will include a reference to the person who made the commit, when the change was made, the files or directories affected, a comment and even the changes that happened within the files (lines of code).</p>
      <h3>Conflicts</h3>
      <p>What if the latest update or commit results in a conflict? That is, what if your changes are so similar to the changes that another team member made that the version control system can't determine which is the correct and authoritative change? In most cases, the version control system will provide a way to view the difference between the conflicting versions, allowing you to make a choice. You can either edit the files manually to merge the options, or allow one revision to win over the other. You may want to collaborate with the person who made the other commit to make sure you're not undoing their important work!</p>
      <h2>View Changes</h2>
      <p>There are two commands useful here:</p>
      <p>
      <ul class="list-group">
        <li class="list-group-item">1. $ git status</li>
        <li class="list-group-item">2. $ git diff</li>
      </ul>
      </p>
      <p>One conceptual Warning: files that are pending a commit get added to the repository’s index. They’ll be listed in the status, but won’t appear in diffs. Be especially careful about using wildcards with the add command, because you generally don’t want to commit binaries or intermediate build files.</p>
      <p><kbd>status</kbd> will tell you which branch you are on, which files have been added to the index but not yet commited, which files have changed since the last commit but haven’t been added to the index, and which files aren’t being tracked by git. New files you create will appear in this list, among build directories you're probably ignoring. For each file it will tell you if it's been added, deleted, or modified.</p>
      <p><kbd>diff</kbd> will pass the output of diff for each file that has changed since the last commit but hasn’t been added yet to the index. This is a very detailed view, I generally use this to make sure that I’ve added everything I want before committing.</p>
      <h2>Commit Changes</h2>
      <p>This is one of the big advantages to local version control: you can commit after even the most trivial change, at least once you’re sure it works.</p>
      <p>There are two commands that you’ll use for this process:</p>
      <p>
      <ul class="list-group">
        <li class="list-group-item">1. $ git add
          <file/dir to add>
          ...</li>
        <li class="list-group-item">2. $ git commit -m "Message for log"</li>
      </ul>
      </p>
      <p>Be very careful specifying directories when adding; git will add any unknown file contained in all subdirectories, which might end up adding a bunch of build files you don't want.</p>
      <p>In general, I use <kbd>status</kbd> and <kbd>diff</kbd> (described under View Changes above) to see what I’ve changed since the last commit, and to make sure I've added everything relevant before committing.</p>
      <h2>Tag</h2>
      <p>By default, <kbd>tagging</kbd> always applies to the <code>most recent commit</code>. If you have uncommitted changes, they won't be under the tag. Tags can’t have spaces.</p>
      <p>The usage is simple:</p>
      <p>
      <pre>$ git tag -m "Message for log" "My-Tag-Name"</pre>
      </p>
      <h2>Move/Rename/Delete Files</h2>
      <p>It is very important that you never use <code>rm</code> or <code>mv</code> inside of a git repository, because git is likely to get confused about what happened to the files. This includes renaming files inside of Visual Studio, since VS2005 effectively performs a mv behind the scenes. It's not the end of the world if you do it, you just clobber the file history (git sees it as a delete followed by an unrelated create).</p>
      <p>The commands for doing this are:</p>
      <p>
      <ul class="list-group">
        <li class="list-group-item">1. git rm
          <file to remove>
          ...</li>
        <li class="list-group-item">2. git mv
          <SOURCH>
          <DESTINATION>
        </li>
      </ul>
      </p>
      <p>They otherwise work exactly like the shell command, they just inform the repository of the change. The changes are automatically added to the index, ready for committing; if you further change a moved file, you’ll still need to add it from its new location.</p>
      <h2>Use Branches</h2>
      <p>Let's say you're trying out some new functionality, but it’s just not going anywhere. Maybe you’re adding some new functionality, but you need to hop back to the last working commit to build but you don't want to lose your work. These are just a few of the cases where you might want to branch. You can also branch preemptively.</p>
      <p>Create a new branch to contain current/future changes.</p>
      <p>
      <ul class="list-group">
        <li class="list-group-item">$ git checkout -b &lt;BRANCH_NAME&gt;</li>
        <li class="list-group-item">$ git add
          <broken files>
        </li>
        <li class="list-group-item">$ git commit -m "Commit Message"</li>
      </ul>
      </p>
      <p>Switch between branches (this will replace files, make sure your changes are committed to the correct branch).</p>
      <p>
      <ul class="list-group">
        <li class="list-group-item">$ git checkout master</li>
        <li class="list-group-item">$ git checkout &lt;AllCodingWorld&gt; Here Allcodingworld is branch name.</li>
      </ul>
      </p>
      <p>List all branches (* indicates current branch)</p>
      <p>
      <pre>$ git branch</pre>
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
      <pre>git branch -D &lt;branch name&gt;</pre>
      </p>
      <p>Merging between branches is also easy:</p>
      <p>
      <pre>$ git checkout TARGET</pre>
      </p>
      <p>
      <pre>$ git merge SOURCE</pre>
      </p>
      <h2>Sharing Repositories</h2>
      <p>Just make your working directory accessible as a shared folder, and another person on the network can get your complete working tree (with commit history and branches) by creating a new repository and pulling from your repository.</p>
      <p>
      <pre>$ cd C:/Projects</pre>
      </p>
      <p>
      <pre>$ mkdir HelloWorld</pre>
      </p>
      <p>
      <pre>$ cd HelloWorld</pre>
      </p>
      <p>
      <pre>$ git init</pre>
      </p>
      <p>
      <pre>$ git pull //yourcomputer/Projects/HelloWorld/</pre>
      </p>
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
      <div class="hlp">
        <form>
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
        </form>
      </div>
      <hr class="endtopic"/>
      <!--p>Thanks for your reading. Please leave a comment if you have any query.</p--> 
      
      <!--hr/--> 
      
      <!--p class="pull-center"><strong>Please leave a comment if you have any query?</strong></p-->
      <?php    
	/*if(isset($_POST['SubmitButton'])){ //check if form was submitted
	  $name = $_POST['name']; //get input text
	  $email = $_POST['email']; //get input text
	  $website = $_POST['website']; //get input text
	  $comment = $_POST['comment']; //get input text
	  $message = "Success! You entered: ".$input;
	}*/    
	?>
      <!--div id="commentsbox">
  <form action="" method="post" class="form-horizontal commentform" enctype="multipart/form-data">
      <div class="form-group">
      <div class="col-sm-10">
        <input type="text" class="form-control" name="name" id="name" placeholder="Name" required="required">
      </div>
    </div>
    <div class="form-group">
     
      <div class="col-sm-10">
        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required">
      </div>
    </div>
      <div class="form-group">
     
      <div class="col-sm-10">
        <input type="text" class="form-control" name="website" id="website" placeholder="Website" required="required">
      </div>
    </div>
	      <div class="form-group">
      
      <div class="col-sm-10">
        <textarea name="comment" id="comment" class="form-control" placeholder="Message" cols="100%" rows="10" tabindex="4" required="required"></textarea>
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="SubmitButton">Submit</button>
      </div>
    </div>
  </form>
                                                                                
</div-->
      <div class="alert alert-success commentmsg" style="display:none;"> <strong>Success:</strong> Enjoy!  Your comment submitted... </div>
      <hr/>
      <div id="response_here"> 
        <!-- Ajax Comment Land Here --> 
      </div>
      <div id="commmentbox">
        <?php
$select=mysqli_query($conn, "SELECT * FROM acw_tutorial_comments");

// Return the number of rows in result set
  //$rowcount=mysqli_num_rows($select);
  //echo $rowcount;

				while($row=mysqli_fetch_array($select))
				{
 ?>
        <div id="target-content">
          <div class="panel panel-default" id="target-content">
            <div class="panel-heading"> <strong><?php echo $row['name']; ?></strong> <span class="text-muted">commented<!-- on 5 days ago --></span> </div>
            <div class="panel-body"> <?php echo $row['comment']; ?>
              <div class="stats"> <a href="#" class="btn btn-default stat-item btnlikeus"> <i class="fa fa-thumbs-up icon" id="<?php echo $row['id']; ?>"></i>
                <?php //echo $row['likeus']; ?>
                </a> <a href="#" class="btn btn-default stat-item btndislike"> <i class="fa fa-thumbs-down icon" id="<?php echo $row['id']; ?>"></i>
                <?php //echo $row['dislike']; ?>
                </a> </div>
            </div>
            <!-- /panel-body -->
            <footer class="reply comment-reply panel-footer">
              <button class="btn btn-primary btnreply">Reply</button>
            </footer>
          </div>
          <!-- /panel panel-default -->
          <div id="respond" class="comment-respond"  style="display:none;">
            <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link btn btn-cancle-reply" href="">Cancel Reply</a></small></h3>
            <form action="" method="post" id="commentform" class="comment-form" novalidate>
              <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
              <p>
                <textarea placeholder="Start typing..." id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea>
              </p>
              <p class="comment-form-author">
                <label for="author">Name <span class="required">*</span></label>
                <input id="author" name="author" type="text" class="form-control" value="" size="30" maxlength="245" aria-required="true" required>
              </p>
              <p class="comment-form-email">
                <label for="email">Email <span class="required">*</span></label>
                <input id="email" name="email" type="email" class="form-control" value="" size="30" maxlength="100" aria-describedby="email-notes" aria-required="true" required>
              </p>
              <p class="comment-form-url">
                <label for="url">Website</label>
                <input id="url" name="url" type="url" class="form-control" value="" size="30" maxlength="200">
              </p>
              <p class="form-submit">
                <input name="submit" type="submit" id="commentsubmit" class="submit btn btn-primary" value="Post Comment">
                <input type="hidden" name="comment_post_ID" value="155" id="comment_post_ID">
                <input type="hidden" name="comment_parent" id="comment_parent" value="1499">
              </p>
              <p style="display: none;">
                <input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="c228b8f510">
              </p>
              <p class="comment-subscription-form">
                <input type="checkbox" name="subscribe_blog" id="subscribe_blog" value="subscribe" style="width: auto; -moz-appearance: checkbox; -webkit-appearance: checkbox;">
                <label class="subscribe-label" id="subscribe-blog-label" for="subscribe_blog">Notify me of new posts by email.</label>
              </p>
              <p style="display: none;"></p>
              <input type="hidden" id="ak_js" name="ak_js" value="1487066786086">
            </form>
          </div>
        </div>
        <?php } ?>
      </div>
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

<!-- global --> 

<script src="js/global.js"></script> 

<!-- Bootstrap Core JavaScript --> 

<script src="js/bootstrap.min.js"></script>
</body>
</html>
