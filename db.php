<?php
#need to set hostname, database username and password

$hostname="";
$username="";
$password="";
$db="remoat";

// connect to mysql server

mysql_connect($hostname,$username,$password);

// select which database you want to user_error

mysql_select_db($db);

// Open the database connection

if (!($connection = @ mysql_connect($hostname, $username, $password)))
die("Could not select database");


if (!(@ mysql_select_db($db, $connection )))
showerror( );

// $search = $_POST["search"];

//if (!isset($_POST["search"])) // if page is not submitted to itself echo the form
?>
