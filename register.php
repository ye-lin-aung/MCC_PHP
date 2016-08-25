
<?php
	include  'student.php';
	require_once 'auth.php';
	require_once 'database.php';

	$student = new Student;
    	$student->createWithPost($_POST);

    //Connect Database;
	
 	 //$stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests"); 
	 //$stmt->execute();

        //Create Login here;
    
	//$conn=null;
	echo "Hello from php : ".$student->email;
	echo $student->password;
    //Disconnect Database;
    

?>
