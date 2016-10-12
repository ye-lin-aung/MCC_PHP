<?php
include  'admin.php';
require_once '../database.php';
require_once '../databasehelper.php';

session_start();

$required = array('name', 'password');
// Loop over field names, make sure each one exists and is not empty
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
		unset($_SESSION['errors']);
	}else{
		$_SESSION['errors'] = array("User already exists");
		header("Location:register.php");
	}
}

    //Disconnect Database;
?>
