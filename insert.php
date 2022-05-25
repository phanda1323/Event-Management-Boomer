<?php
require 'dbconnect.php';
//getting data
$events = (isset($_POST['event'])) ? $_POST['event'] : array();
$i = 0;
if (count($events) > 0) {
    foreach ($events as $event) { 
        $count[$i] = $event;
        $i = $i + 1; 
    } 
}$i=0;
$ename = $_GET['name'];

//inserting data into database
$conn = db_connect();
$query = "INSERT INTO `details`(`name`, `address`, `email`, `contact`, `date`, `days`, `budget`, `venue`, `event`) VALUES ('$count[0]','$count[1]','$count[2]','$count[3]','$count[4]','$count[5]','$count[6]','$count[7]','$ename');";
$insert = mysqli_query($conn, $query);
if (!$insert) {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }else{
      header("Location: login.php");
  }
  ?>