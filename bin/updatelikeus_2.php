<?php
error_reporting(0);

require_once('config.php');

// Check for empty fields
if(empty($_POST['updatelike'])	|| empty($_POST['id']))
   {
   //echo "No arguments Provided!";
   return false;
   }
   
		if(isset($_POST['updatelike']) && isset($_POST['id'])){
		$id = strip_tags(htmlspecialchars($_POST['id']));
		  $like_dislike = strip_tags(htmlspecialchars($_POST['updatelike']));
		  
		  $temp = $like + 1;
		  if($like_dislike =='btnlikeus')
		  {
			  $sql = "UPDATE comments SET cmt_likeus = $temp WHERE id = $id";
		  }
		  else
		  {
			  $sql = "UPDATE comments SET cmt_dislike = $temp WHERE id = $id";
		  }
		  
        }

// Perform queries 
$result = mysqli_query($conn,$sql);

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
	return;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();         
?>
