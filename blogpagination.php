<?php
error_reporting(0);
include 'bin/config.php';

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM acw_comments ORDER BY id ASC LIMIT $start_from, $limit";  
$rs_result = mysqli_query($conn, $sql); 
?>

<?php  
while($row=mysqli_fetch_array($rs_result))
				{
					?>
					<div id="target-content">
				<div class="panel panel-default">
				<div class="panel-heading">
				<strong><?php echo $row['name']; ?></strong> <span class="text-muted">commented<!-- on 5 days ago --></span>
				</div>
				<div class="panel-body">
				<?php echo $row['comment']; ?>
				        <div class="stats">
                        <a href="#" class="btn btn-default stat-item btnlikeus">
                            <i class="fa fa-thumbs-up icon" id="<?php echo $row['id']; ?>"></i> <?php echo $row['likeus']; ?>
                        </a>
                        <a href="#" class="btn btn-default stat-item btndislike">
                            <i class="fa fa-thumbs-down icon" id="<?php echo $row['id']; ?>"></i> <?php echo $row['dislike']; ?>
                        </a>
                    </div>
				</div><!-- /panel-body -->
				<footer class="reply comment-reply panel-footer"><button class="btn btn-primary btnreply">Reply</button></footer>

				</div><!-- /panel panel-default -->
			<div id="respond" class="comment-respond"  style="display:none;">
<h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link btn btn-cancle-reply" href="">Cancel Reply</a></small></h3> <form action="" method="post" id="commentform" class="comment-form" novalidate="">
<p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p><p><textarea placeholder="Start typing..." id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>
<p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text" class="form-control" value="" size="30" maxlength="245" aria-required="true" required="required"></p>
<p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" class="form-control" value="" size="30" maxlength="100" aria-describedby="email-notes" aria-required="true" required="required"></p>
<p class="comment-form-url"><label for="url">Website</label> <input id="url" name="url" type="url" class="form-control" value="" size="30" maxlength="200"></p>
<p class="form-submit"><input name="submit" type="submit" id="commentsubmit" class="submit btn btn-primary" value="Post Comment"> <input type="hidden" name="comment_post_ID" value="155" id="comment_post_ID">
<input type="hidden" name="comment_parent" id="comment_parent" value="1499">
</p><p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="c228b8f510"></p><p class="comment-subscription-form"><input type="checkbox" name="subscribe_blog" id="subscribe_blog" value="subscribe" style="width: auto; -moz-appearance: checkbox; -webkit-appearance: checkbox;"> <label class="subscribe-label" id="subscribe-blog-label" for="subscribe_blog">Notify me of new posts by email.</label></p><p style="display: none;"></p> <input type="hidden" id="ak_js" name="ak_js" value="1487066786086"></form>
</div>
</div>
				
				
				<!-- First Blog Post End -->
				<?php }
?>