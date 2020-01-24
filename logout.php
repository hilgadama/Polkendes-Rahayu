<?php
session_start();
if(!isset($_SESSION['username'])) {
	header("location:login.php");
}
if(isset($_SESSION['username'])){
	unset($_SESSION);
	session_destroy();
	header("location:login.php");
}	
?>