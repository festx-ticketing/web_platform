<?php

	Class Log{
		private $id;
		private $msg;
		private $log_level;
		private $created_at;


		public function __constructor(
			$msg,
			$log_level
		){
			$this->msg = $msg;
			$this->log_level = $log_level;	
		}

		public function __toString(){
			$output = "{".
						"".
						"".

			return $output;
		}

		public getFromAssocArray(){
			
		}

	}
	
?>