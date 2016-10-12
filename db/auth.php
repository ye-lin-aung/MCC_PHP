<?php
	session_start();
	$c = $_POST['role'];
	$_SESSION['login_errors'] = array("User already exists");
	header("Location:../home.php");
?>