<?php
include  'student.php';
require_once 'auth.php';
require_once 'databasehelper.php';

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
	header("Location:register.php");
} else {
	



	$student = new Student;
	$student->createWithPost($_POST,0);

	if(!isUserAlreadyExists($student)){
		registerUser($student);
		echo "Hello from php : ".$student->skill;
	}else{
		$_SESSION['errors'] = array("User already exists");
		header("Location:register.php");
	}
}

    //Disconnect Database;
?>
