<?php
class Admin{

	private $name;
	private $email;
	private $password;
	private $location;
	private $skill;
	private $experience;
	private $description;	
	private $gender;
	private $isAdmin;

	function createWithPost($post_args,$admin) {
		$this->name = $post_args['name'];
		$this->email = $post_args['email'];
		$this->password = md5($post_args['password']);
		$this->location = $post_args['location'];
		$this->skill = $post_args['skill'];
		$this->gender = $post_args['gender'];
		$this->experience = $post_args['experience'];
		$this->description = $post_args['description'];		
		$this->isAdmin =  $admin;
	}

	function create($name,$email,$password,$loction,$skill,$experience,$description,$gender,$admin){
		$this->name = $name;
		$this->password = md5($password);
		$this->email = $email;
		$this->location = $location;
		$this->skill = $skill;
		$this->experience = $experience;
		$this->description = $description;
		$this->gender = $gender;
		$this->isAdmin = $admin;
 

	}

	public function sameUser($compare_student){
		if($this->email == $compare_student->email and $this->password == $compare_student->password){
		return true;
		}else{
		return false;
		}

	}	

	public function getName(){
		return $this->name;
	}
	public function __get($property) {
		if (property_exists($this, $property)) {
			return $this->$property;
		}
	}
	public function __set($property, $value) {
		if (property_exists($this, $property)) {
			$this->$property = $value;
		}

		return $this;
	}

}


?>
