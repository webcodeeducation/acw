<?php
error_reporting(0);

require_once('config.php');

// Check for empty fields
/*if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['website']) || empty($_POST['comment']))
   {
   //echo "No arguments Provided!";
   return;
   }*/
   
		if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['website']) && isset($_POST['comment'])){
		  $name = strip_tags(htmlspecialchars($_POST['name']));
        
		  $email = strip_tags(htmlspecialchars($_POST['email']));
        
		  $website = strip_tags(htmlspecialchars($_POST['website']));
        
		  $comment = strip_tags(htmlspecialchars($_POST['comment']));
		  
		  $sql = "INSERT INTO acw_tutorial_comments (name, email,website, comment,createdAt) VALUES('$name','$email','$website','$comment',CURRENT_TIMESTAMP)";

		// Perform queries 
		$result = mysqli_query($conn,$sql);
        }
//$sql1 = "select * from acw_tutorial_comments where name='$name' and email='$email' and website='$website' and comment = '$comment'";



if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
	return;

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//}

$conn->close();         
?>