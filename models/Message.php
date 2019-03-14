<?php

	Class Message{

		private $id;
		private $email_id;
		private $name;
		private $subject;
		private $message;
	
		public function __constructor(
			$email_id,
			$name,
			$subject,
			$message
		){
			$this->email_id = $email_id;
			$this->name = $name;
			$this->subject = $subject;
			$this->message = $message;		
		}


		public function __toString(){
			$output = "";
			return $output;
		}

		public function 
		
	}


?>