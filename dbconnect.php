<?php
$db_conn = NULL;
$db_username = 'root';
$db_password = '';
$db_servername = 'localhost:3307';
$db_name = 'event';


function db_connect() {
	global $db_conn;
	global $db_servername;
	global $db_username;
	global $db_password;
	global $db_name;

	if($db_conn != NULL){ //check if an existing connection is open
		return $db_conn; //return the existing connection
	} else { //make a new connection
		$db_conn = mysqli_connect($db_servername, $db_username, $db_password, $db_name);
		if(!$db_conn){
			die("Connection failed: ".mysqli_connect_error());
		} else {
			return $db_conn;
		}
	}
}

?>