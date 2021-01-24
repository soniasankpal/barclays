<?php

define ('DB_NAME' ,'book_store');
define ('DB_USER' ,'soniya');
define ('DB_PASSWORD' ,'soniya123');
define ('DB_HOST' ,'localhost');

$link =mysqli_connect(DB_HOST, DB_USER , DB_PASSWORD);

if(!$link)
{
	die('couldn not connect' .mysql_error());
}

$db_selected = mysqli_select_db( $link,DB_NAME);

if(!$db_selected)
{
	die('can not use db name ' .DB_NAME. ':' .mysql_error());
}

echo 'connected successfully..';


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$emailid = $_POST['emailid'];
$password1 = $_POST['password1'];

$sql= "INSERT INTO customers  (First_Name,Last_Name,Email,Password)VALUES ('$fname','$lname','$emailid','$password1') ";


if(!mysqli_query($link,$sql))
{
	die('error : ' .mysql_error());
}


mysqli_close($link);
?>

<html>
   <h1>DATA SUBMITTED SUCCESSFULLY</h1>
</html>