
<?php
	include  'student.php';
	require_once 'auth.php';
	require_once 'databasehelper.php';


	$student = new Student;
    $student->createWithPost($_POST,0);

    registerUser($student);
	echo "Hello from php : ".$student->skill;
	echo $student->password;

    //Disconnect Database;
    


?>
