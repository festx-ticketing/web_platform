<?php

	// defines the logging mechanism for the entire system
	
	// Logger schema
	// id : AUTO_INCREMENT INT
	// 

	include_once('config/config.php');
	
	class LogController {
    
    	define('WARN', "WARN");
		define('ERROR',"ERROR");
		define('INFO', "INFO");

	    public $log_table_name = 'system_logs';

	   	

	    function writeLog($msg, $level,) {
	        // write log to the database
	        // log will cointain --> id, logmessage, log_level, created_at timestamp
	    	$sql = "INSERT INTO $log_table_name (message , log_level) VALUES $msg, $level";
	    	$result = mysqli_query($db,$sql);
			if($result) {

			}
			else {
				echo "Internal error in system logger.";
			}
	    } 

	    function getLogsByLevel($level){
	    	// get the log details by level
	    	$sql = "SELECT * FROM $log_table_name WHERE log_level = $level"
	    	$result = mysqli_query($db,$sql);
	    	return $result;
	    }

	    function getLogsByDate($till_date){
	    	// get the logs from today till date
	    	$sql = "SELECT * FROM $log_table_name WHERE log_level = $level"
	    	$result = mysqli_query($db,$sql);
	    	return $result;
	    }

	    function getLastNLogs($num_logs){
	    	// get last n records
	    	$sql = "SELECT * FROM $log_table_name WHERE log_level = $level"
	    	$result = mysqli_query($db,$sql);
	    	return $result;
	    }

	    function download_logs(){
	    	// download logs as 
	    	
	    }

?>
