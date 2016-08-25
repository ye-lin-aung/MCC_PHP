<?php


function registerUser($user){
		include 'database.php';
		$stmt = $conn->prepare("INSERT INTO student (name,email,password,location,skills,experience,description,gender,admin) VALUES (:name,:email,:password,:location,:skills,:exp,:des,:gender,:admin)"); 
	 	$stmt->bindParam(':name',$name);
	 	$stmt->bindParam(':email',$email);
	 	$stmt->bindParam(':password',$password);
	 	$stmt->bindParam(':location',$location);
	 	$stmt->bindParam(':skills',$skills);
	 	$stmt->bindParam(':exp',$exp);
	 	$stmt->bindParam(':des',$des);
	 	$stmt->bindParam(':gender',$gender);
	 	$stmt->bindParam(':admin',$admin);

	 	$name = $user->name;
	 	$email = $user->email;
	 	$password = $user->password;
	 	$location = $user->location;
	 	$skills = $user->skill;
	 	$exp = $user->experience;
	 	$des = $user->description;
	 	$gender = $user->gender;
	 	$admin = $user->admin;

	 	$stmt->execute();
	 	echo "New records created successfully";
	
	$conn=null;
}


?>