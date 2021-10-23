<?php
  session_start();
  //$servername = "hms.test"; 
  //change this  accordingly
  $dBUsername = "root";
  $dBPassword = "";
  $dBName = "hostel_management_system";
  $host = "localhost";
 // session_start();
  $conn=mysqli_connect(  $host,$dBUsername, $dBPassword, $dBName);

  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
?>
