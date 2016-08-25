
<?php
//-- TODO desc user Sun Aug 14 10:44:19 2016

class Student{

	private $name;
	private $email;
	private $password;
	private $location;
	private $skill;
	private $experience;
	private $description;	

	function createWithPost( $post_args) {
		$this->name = $post_args['name'];
		$this->email = $post_args['email'];
		$this->password = md5($post_args['password']);
		$this->location = $post_args['location'];
		$this->skill = $post_args['skill'];
		$this->experience = $post_args['experience'];
		$this->description = $post_args['description'];		
	}

	function create($name,$email,$password,$loction,$skill,$experience,$description){
		$this->name = $name;
		$this->password = md5($password);
		$this->email = $email;
		$this->location = $location;
		$this->skill = $skill;
		$this->experience = $experience;
		$this->description = $description;


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
