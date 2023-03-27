<?php
class User {
	private $first_name;
	private $last_name;
	private $email;
	private $password;
	
	public function __construct($first_name, $last_name, $email, $password) {
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->email = $email;
		$this->password = $password;
	}
	
	public function getFirstName() {
		return $this->first_name;
	}
	
	public function getLastName() {
		return $this->last_name;
	}
	
	public function getEmail() {
		return $this->email;
	}
	
	public function getPassword() {
		return $this->password;
	}
	
	public function toArray() {
		return array(
			$this->first_name,
			$this->last_name,
			$this->email,
			$this->password
		);
	}
}
?>