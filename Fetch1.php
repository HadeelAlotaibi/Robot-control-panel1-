<?php

// Varibals
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "task2"; //Scema name

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);}
$sql=mysqli_query($conn,"select * from move ORDER BY id DESC LIMIT 1 ");
$row=mysqli_fetch_row($sql);
    echo " Forward : ".$row[1]."  <br/> ". " Backward : ".$row[2]."   <br/>". " Stop : ".$row[3]."  <br/> " ." Left : ".$row[4]."  <br/> " ." Right : ".$row[5]. "  <br/> ";   

?>