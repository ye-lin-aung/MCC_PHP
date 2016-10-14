<?php
include  'databasehelper.php';
session_start();
$role = $_POST['role'];
$_SESSION['login_errors'] = array("User already exists");
$user_name = $_POST['email'];
$password = $_POST['password'];
if($role === "admin"){
	
	if(admin_login($user_name,$password)){

		unset($_SESSION['login_errors']);
		$_SESSION['email'] = $user_name;
		$_SESSION['password'] = $password; 
		header("Location:../dashboard.php");

	}else{

		$_SESSION['login_errors'] = array("Error Occured,Please check user name and password");
		header("Location:../home.php");

	}
	
	
}elseif($role === "student"){


	if(student_login($user_name,$password)){
		unset($_SESSION['login_errors']);
		$_SESSION['email'] = $user_name;
		$_SESSION['password'] = $password; 
		header("Location:../dashboard.php");

	}else{

		$_SESSION['login_errors'] = array("Error Occured,Please check user name and password");
		header("Location:home.php");

	}
	
	
}else{


	if(employee_login($user_name,$password)){
		unset($_SESSION['login_errors']);
		$_SESSION['email'] = $user_name;
		$_SESSION['password'] = $password; 
		header("Location:../dashboard.php");

	}else{

		$_SESSION['login_errors'] = array("Error Occured,Please check user name and password");
		header("Location:home.php");


	}
	
	
}


?>
