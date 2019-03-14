<?php

	include_once('config/config.php');

	Class MessageController{

		private $message_table_name = "";

		public function writeMessage($message){
			$sql = "INSERT INTO $message_table_name () VALUES ";
			$result = mysqli_query($db,$sql);
			if($result){

			}else{

			}
			return $result;
		}

		public function getMessageById($id){
			$sql = "SELECT * FROM $message_table_name WHERE id = $id";
			$result = mysqli_query($db,$sql);
			if($result){
				
				$row = mysqli_fetch_assoc($query)
				$row['']
				
			}else{

			}
			
			return NULL;

		// $row = mysqli_fetch_row($query);
		// $userId= $row[0];
		// $dbUserName = $row[1];
		// $dbPassword = $row[2];
		}

		public function getMessageByEmail($email){

		}

		public function getLastNMessage($num){

		} 
	}

?>