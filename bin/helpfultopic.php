<?php
error_reporting(0);

require_once('config.php');

// Check for empty fields
if(empty($_POST['helpful']) || empty($_POST['helpfultopic']))
   {
   //echo "No arguments Provided!";
   return false;
}
   
		if(isset($_POST['helpful']) && isset($_POST['helpfultopic'])){
		  $helpful = strip_tags(htmlspecialchars($_POST['helpful']));
		  $topic = strip_tags(htmlspecialchars($_POST['helpfultopic']));
				if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
				$ip = $_SERVER['HTTP_CLIENT_IP'];
			} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} else {
				$ip = $_SERVER['REMOTE_ADDR'];
			}
			
			// Get Current location and city
				$user_ip = getenv('REMOTE_ADDR');
				$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
				$country = $geo["geoplugin_countryName"];
				$city = $geo["geoplugin_city"];
        }
		
/*$sql1 = "select * from acw_helpful_tutorial where helpful_tutorial='$email' and topic = '$topic'";
$result = mysqli_query($conn,$sql1);*/
// Return the number of rows in result set
  //$rowcount=mysqli_num_rows($result);

if($helpful == 'Yes')
{
	$sql = "INSERT INTO acw_helpful_tutorial (helpful_tutorial,helpfulyes,helpfulno,client_machine,client_location,client_city,createdAt) VALUES('$topic','Yes','','$ip','$country','$city',CURRENT_TIMESTAMP)";

// Perform queries 
$result = mysqli_query($conn,$sql);
return;	
}
else if($helpful == 'No')
{
	$sql = "INSERT INTO acw_helpful_tutorial (helpful_tutorial,helpfulyes,helpfulno,client_machine,client_location,client_city,createdAt) VALUES('$topic','','No','$ip','$country','$city',CURRENT_TIMESTAMP)";

// Perform queries 
$result = mysqli_query($conn,$sql);
return;
	
}


if ($conn->query($sql) === TRUE) {
	return;

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//}

$conn->close();         
?>