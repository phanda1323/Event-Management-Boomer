<?php
require 'dbconnect.php';

//function to get all details
function get_all(){
	$query = "SELECT * FROM `details`;";
    $conn = db_connect();
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) > 0){
		$details = [];
		while($row = mysqli_fetch_assoc($result)){
			$details[] = $row;
		}
		return $details;
	} else {
		return [];
	}
}

?>