<?php

	// model for user class

	include("../controllers/LogController");

	Class User {

		public $email; //primary key
		public $username; 
		public $fullname;
		public $password;
		public $phone;
		public $gender;
		
		private $active;
		private $logger;

		function __construct(
			$username, 
			$fullname, 
			$password, 
			$phone, 
			$gender)
		{
			$this->username = $username;
			$this->fullname = $fullname;
			$this->password = $password;
			$this->phone = $phone;
			$this->gender = $gender;

			// set active status based on weather user exits in database or not
			$this->active = False;
			$this->logger = new LogController();

		}


		function activate(){
			$this->isActive = True;
		}

		function isExists()
		{
			// check weather this user exists in database or not
		}



		function isActive(){
			// check weather user exists in database and is active
			return $this->active;
		}

		function __toString(){
			$output = "{\n Username : ".$this->username.",\n Fullname : ".$this->fullname.",\n Email : ".$this->email.",\n Phone : ".$this->phone.",\n Gender : ".$this->gender.",\n IsActive : ".$this->isActive()
			return 
		}
		function saveInstance(){

			$admin_name = $SESSION[''];
			$msg = "Instance saved by ".$admin_name." re"
			$this->logger->writeLog()
		}


		function mailUser($msg){
			// function to mail user the message
		}

	}

?>