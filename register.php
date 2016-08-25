
<?php
	include  'student.php';
	require_once 'auth.php';


	$student = new Student;
    	$student->createWithPost($_POST);

    //Connect Database;
	
 
	echo "Hello from php : ".$student->email;

    //Disconnect Database;
    

?>
