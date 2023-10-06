<?php
$servername = "localhost";
$username = "aartirana";
$password = "b6f1c39a2r5m@M";
$db = "db_allcodingworld";

// Create connection
//$conn = new mysqli($servername, $username, $password,$db) or die(mysql_error());
//connect to db
mysql_connect($servername, $username, $password) or die(mysql_error());
mysql_select_db($db) or die(mysql_error());

//call the passed in function

//if(isset()

if(function_exists($_GET['method']))
{
$_GET['method']();
}

//methods

function getAllUsers(){

$user_sql = mysql_query("select * from comments");
$users = array();

while($user = mysql_fetch_array($user_sql))
{

$users[] = $user;
}

$users = json_encode($users);

echo $_GET['jsoncallback'] . '(' . $users . ')';
}


?>