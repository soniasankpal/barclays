<?php

$user_name = "soniya";
$password = "soniya123";
$database = "book_store";
$server = "localhost";
//$db_handle = mysqli_connect($server, $user_name, $password);

$conn= new mysqli($server,$user_name,$password,$database);

if($conn->connect_error)
{
	die("connection failed:" .$conn->connection_status);
}
/*
if(!$db_handle)
{
	die("connection error");
}
$db_found = mysql_select_db($database, $db_handle);
if (!$db_found) {
	die("DATABASE not found!");
}*/

?>