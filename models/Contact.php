<?php

	Class Contact{
		
		private $name;
		private $phone;
		private $email;
		private $address;
		private $designation;
		private $comment;

		public function __constructor(
			$name,
			$phone, 
			$email,
			$address, 
			$designation
		 ){
			$this->name = $name;
			$this->phone = $phone;
			$this->email = $email;
			$this->address = $address;
			$this->designation = $designation;
		}

		public function record_comment(){
			// add to the already comments. Also add the date
			
		}


		public function sendMail($msg){
			// send mail 

		}

		// TODO :: might not be required
		public function sendPost(){
			// record the post in the database
			
		}



	}

?>