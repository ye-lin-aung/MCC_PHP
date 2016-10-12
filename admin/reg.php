<?php
include  'admin.php';
require_once 'db/database.php';
require_once 'db/databasehelper.php';

session_start();

$required = array('name', 'password');

$error = false;
foreach($required as $field) {
	if (empty($_POST[$field])) {
		$error = true;
	}
}
if ($error) {
	header("Location:register.php");}
 else {
	$admin = new Admin;
	$admin->createWithPost($_POST,0);
	if(!isAdminAlreadyExists($admin)){
		registerAdmin($admin);
		header("Location:../home.php");
		unset($_SESSION['admin_errors']);
	}else{
		$_SESSION['admin_errors'] = array("User already exists");
		header("Location:register.php");
	}
}


?>
