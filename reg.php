<?php
	include  'student.php';
	require_once 'auth.php';
	require_once 'databasehelper.php';
	
	session_start();

	$student = new Student;
    $student->createWithPost($_POST,0);
	if(!isUserAlreadyExists($student)){
    registerUser($student);
    echo "Hello from php : ".$student->skill;
	}else{
	$_SESSION['errors'] = array("User already exists");
	header("Location:register.php");
	}
    //Disconnect Database;
?>
