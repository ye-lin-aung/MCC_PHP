<?php
include  'employee.php';
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
	$employee = new Employee;
	$employee->createWithPost($_POST,0);
	if(!isEmployeeAlreadyExists($employee)){
		registerEmployee($employee);
		header("Location:../home.php");
		unset($_SESSION['errors']);
	}else{
		$_SESSION['errors'] = array("User already exists");
		header("Location:register.php");
	}
}

    //Disconnect Database;
?>
