<?php
class Employee {

	private $email;
	private $name;

	public function getEmail() {

		return $this->email;
	}

	public function setEmail($email) {

		$this->email = $email;
	}

	public function getName() {

		return $this->name;
	}

	public function setName($name) {

		$this->name = $name;
	}

}
?>