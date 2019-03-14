<?php

	Class Error{

		private error_id;
		private error_msg;

		public function __constructor($error_id){
			$this->error_id = $error_id;
			$this->error_msg = $this->getErrorMsgById();
		}

		// define the error message here
		private function getErrorMsgById($error_id){

			$msg = "";
			switch($error_id){
				case 1101:

					break;
				case 1102: 

					break;
				case 1103: 

					break;
				case 1104: 

					break;
				case 1105: 

					break;
				case 1106: 

					break;
				case 1107: 

					break;
				case 1108: 

					break;
				case 1109: 

					break;
				case 1110: 

					break;
				default: 
					$msg = "Unknown error";
			}


		}

		public function __toString(){
			$output = "{ error_id : $error_id , error_msg : $error_msg }";
			return $output;
		}
	}

?>