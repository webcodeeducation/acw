<?php
require_once('../inc/recaptchalib.php');
require_once('config.php');

$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["userimage"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check for empty fields
if(empty($_POST['firstname'])	||
   empty($_POST['lastname'])	||
	empty($_POST['email'])	||
   empty($_POST['userpassword'])	||
   empty($_POST['gender'])	||
   empty($_POST['userdob'])	||
   empty($_POST['contact'])	||
   empty($_POST['country'])	||
   empty($_POST['userintro'])	||
   empty($_POST['userimage']))
   {
   echo "No arguments Provided!";
   return false;
   }
   
		if(isset($_POST['firstname'])){
		  $firstname = strip_tags(htmlspecialchars($_POST['firstname']));
        }if(isset($_POST['lastname'])){
		  $lastname = strip_tags(htmlspecialchars($_POST['lastname']));
        }if(isset($_POST['email'])){
		  $email = strip_tags(htmlspecialchars($_POST['email']));
        }if(isset($_POST['passwrd'])){
		  $userpassword = strip_tags(htmlspecialchars($_POST['passwrd']));
        }if(isset($_POST['gender'])){
		  $gender = strip_tags(htmlspecialchars($_POST['gender']));
        }if(isset($_POST['dob'])){
          $userdob=$_POST['dob'];
        }if(isset($_POST['contact'])){
		  $contact = strip_tags(htmlspecialchars($_POST['contactno']));
        }if(isset($_POST['email'])){
		  $country = strip_tags(htmlspecialchars($_POST['country']));
        }if(isset($_POST['userintro'])){
		  $userintro = strip_tags(htmlspecialchars($_POST['userintro']));
        }if(isset($_POST['userimage'])){
		  //$userphoto = strip_tags(htmlspecialchars($_POST['userimage']));
		  move_uploaded_file($_FILES["userimage"]["tmp_name"], $target_file);
		  $userphoto = basename( $_FILES["userimage"]["name"]);
        }
		if(isset($_POST['g-recaptcha'])){
          $captcha=$_POST['g-recaptcha'];
        }
        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }
        $secretKey = "6LcYaxMUAAAAADUbrIQPaq9-TN1BZJeRNUohbsr0";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);
        if(intval($responseKeys["success"]) !== 1) {
          echo '<h3>You are spammer ! Get out from web!!!</h3>';
        } else {
          //echo '<h2>Thanks for posting comment.</h2>';
		  // Create the email and send the message
/*$to = 'laxman091@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@allcodingword.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;*/
    /*firstname: firstname,
    lastname: lastname,
    userpassword: passwrd,
	gender:gender,
	userdob: userdob,
	contact: usercontact,
	country:usercountry,
	userintro:userintro,
	userphoto:userimage*/
$imagename= basename( $_FILES["userimage"]["name"]);
	
$sql = "INSERT INTO acw_users (user_firstname, user_lastname,user_email, user_password, user_gender, user_dob, user_contact, user_country, user_intro, user_image, isActive) 
VALUES('$firstname', '$lastname',''$email'', '$userpassword', '$gender', '$userdob', '$contact','$country','$userintro','$imagename')";
//$result = mysqli_query($sql) or die(mysqli_error());
// Perform queries 
$result = mysqli_query($conn,$sql);

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
        }



  /*$privatekey = "6LcYaxMUAAAAADUbrIQPaq9-TN1BZJeRNUohbsr0";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// your secret key
//$secret = "6LcYaxMUAAAAANcUvjW2l0R3P6Jo3T442XPjRjGg";

// Create the email and send the message
$to = 'laxman091@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@allcodingword.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;
  }*/
  

/*if(isset($_POST['submit']) && !empty($_POST['submit'])):
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
        //your site secret key
        $secret = '6LcYaxMUAAAAANcUvjW2l0R3P6Jo3T442XPjRjGg';
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success):
            //contact form submission code
            $name = !empty($_POST['name'])?$_POST['name']:'';
            $email = !empty($_POST['email'])?$_POST['email']:'';
		$phone = !empty($_POST['phone'])?$_POST['phone']:'';
            $message = !empty($_POST['message'])?$_POST['message']:'';
            
            $to = 'laxman091@gmail.com';
            $subject = 'New contact form have been submitted';
            $htmlContent = "
                <h1>Contact request details</h1>
                <p><b>Name: </b>".$name."</p>
                <p><b>Email: </b>".$email."</p>
		<p><b>Phone: </b>".$phone."</p>
                <p><b>Message: </b>".$message."</p>
            ";
            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            // More headers
            $headers .= 'From:'.$name.' <'.$email.'>' . "\r\n";
            //send email
            @mail($to,$subject,$htmlContent,$headers);
            
            $succMsg = 'Your contact request have submitted successfully.';
        else:
            $errMsg = 'Robot verification failed, please try again.';
        endif;
    else:
        $errMsg = 'Please click on the reCAPTCHA box.';
    endif;
else:
    $errMsg = '';
    $succMsg = '';
endif;*/         
?>
