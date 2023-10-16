<?php 
	session_start(); 
	$_SESSION['is_login'] = FALSE;
	session_destroy(); 
	header('location:home.php'); 

?>