<?php
error_reporting(0);

require_once('config.php');

/*print_r($_POST);
die();*/

$temp = '';

// Check for empty fields
if(empty($_POST['likeordislike'])	|| empty($_POST['updatelike'])	|| empty($_POST['id']))
   {
   //echo "No arguments Provided!";
   return false;
   }
   
		if(isset($_POST['likeordislike']) && isset($_POST['id'])){
		  $opt = $_POST['likeordislike'];
		  $like = strip_tags(htmlspecialchars($_POST['updatelike']));
		  //$like = intval($_POST['updatelike']);
		  $id = strip_tags(htmlspecialchars($_POST['id']));
        }
				
if (!filter_var($like, FILTER_VALIDATE_INT) === false) {
    //echo("Variable is an integer");
	$temp = $like + 1;
}

	//$temp = $like + 1;
	$temp = $like + 1;
	
	if($opt == 'like')
	{
		$sql = "UPDATE comments SET cmt_likeus = $temp WHERE id = $id";
		// Perform queries 
		$result = mysqli_query($conn,$sql);
		return $temp;
		//return $result;
	} if($opt == 'dislike')
	{

		//$temp = $like - 1;
		$sql2 = "UPDATE comments SET cmt_dislike = $temp WHERE id = $id";
		// Perform queries 
		$result = mysqli_query($conn,$sql2);
		return $temp;
	}
	else
	{
		return;
	}


if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
	return;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();         
?>
