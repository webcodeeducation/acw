<?php
error_reporting(0);

require_once('config.php');

$sql = "SELCT * from acw_tutorial_commments ORDER BY id DESC";

// Perform queries 
$result = mysqli_query($conn,$sql);

if ($conn->query($sql) === TRUE) {
	?>

					<div class="panel panel-default" id="target-content">
				<div class="panel-heading">
				<strong><?php echo $name; ?></strong> <span class="text-muted">commented</span>
				</div>
				<div class="panel-body">
				<?php echo $comments; ?>

				</div>
				<footer class="reply comment-reply panel-footer"><button class="btn btn-primary btnreply">Reply</button></footer>

				</div>
				
<?php
				}

$conn->close();         
?>