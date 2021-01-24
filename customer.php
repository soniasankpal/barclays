<?php
session_start();
$user = $_SESSION['username'];
//$log = $_SESSION['admin'];
if (!isset($user)){
	header ("Location: signin.php");
}
?>

		
<?php include "header.php";?>
<h1>Login success</h1>

