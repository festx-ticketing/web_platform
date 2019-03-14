<?php

	// model for the email id class 
	Class Email{

		private $email_id;
		private $subject;
		private $bcc;
		private $cc;
		private $attachment;
		private $body;
		private $attachments;
		
		public function __constructor(
			$email_id,
			$subject,
			$bcc,
			$cc,
			$attachment,
			$body
		 ){
			$this->email_id = $email_id;
			$this->subject = $subject;
			$this->bcc = $bcc;
			$this->cc = $cc;
			$this->attachment = $attachment;
			$this->body = $body;
		}

		public function sendMail(){
			// use logger to log the entry in system logs
			// returns true or false based on whether message send was sucessfull
		}

		public function __toString(){
			// used when serialize is called
		}

		public function attach($attachment){
			// push an attachment to the mail
		}

		public function deattach($attachment){
			// push an attachment to the mail
		}



	}

?>
