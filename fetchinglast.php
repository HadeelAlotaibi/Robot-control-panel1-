<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "task1";



// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);}
$sql=mysqli_query($conn,"select * from engines ORDER BY id DESC LIMIT 1 ");
$row=mysqli_fetch_row($sql);
    echo " engine 1 : ".$row[1]."  <br/> ". " engine 2 : ".$row[2]."   <br/>". "engine 3: ".$row[3]."  <br/> " ." engine 4 : ".$row[4]."  <br/> " ." engine 5 : ".$row[5]. "  <br/> " ." engine 6 : ".$row[6]." <br/>";   


?>