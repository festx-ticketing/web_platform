<?php

	Class Transaction{

		private $id;
		private $transaction_type;
		private $source; // source user details
		private $destination;// destination contains the event details
		private $amount;
		private $status;
		private $comments;


		private getTransactionId(){
			//generate 12 digits unique id
			
		}


		public function __constructor(
			$transaction_type,
			$source,
			$destination,
			$amount,
			$status,
		){

		}

		public function __toString(){
			$output = "";
			return $output;
		}
	}

?>