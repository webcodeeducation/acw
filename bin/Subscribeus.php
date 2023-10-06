<?php
error_reporting(0);

require_once('config.php');

// Check for empty fields
if(empty($_POST['email']))
   {
   //echo "No arguments Provided!";
   return false;
}
   
		if(isset($_POST['email'])){
		  $email = strip_tags(htmlspecialchars($_POST['email']));
		  $topic = strip_tags(htmlspecialchars($_POST['sucribetopic']));
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
		
$sql1 = "select * from acw_subscribers where email='$email' and topic = '$topic'";
$check = mysqli_query($conn,$sql1);

if(mysqli_num_rows($check) > 0) {
return;
} else {
$sql = "INSERT INTO acw_subscribers (email,topic,client_machine,client_country,client_city,createdAt) VALUES('$email','$topic','$ip','$country','$city',CURRENT_TIMESTAMP)";

// Perform queries 
$result = mysqli_query($conn,$sql);
return;

/*if ($conn->query($sql) === TRUE) {
	return;

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/
}

$conn->close();         
?>