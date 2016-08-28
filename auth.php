
<?php
//-- TODO 
//user Sun Aug 14 11:57:10 2016
require_once('database.php');

function login(){
	 $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests"); 
	     $stmt->execute();

    
	$conn=null;
}
?>
