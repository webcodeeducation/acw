<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "acw_db";

// Create connection
$link = @mysql_connect($servername,$username,$password) or die('Unable to establish a DB connection');

mysql_query("SET NAMES 'utf8'");
mysql_select_db($db,$link);
?>