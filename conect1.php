<?php

// Varibals
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "task2"; //Scema name

// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error); }

// FORWARD Button
if(isset($_POST['Forward'])){
$sql =("insert into move (forward,backward,stop,leftbtn,rightbtn) values ('1','0','0','0','0')"); 
if ($conn->query($sql) === TRUE){
    echo "Data record added successfully"; }
    else {
    echo "ERROR: " . $sql . "<br>" . $conn->error; } }

// LEFT Button
if(isset($_POST['Left'])){
$sql =("insert into move (forward,backward,stop,leftbtn,rightbtn) values ('0','0','0','1','0')"); 
if ($conn->query($sql) === TRUE){
    echo "Data record added successfully"; }
    else {
    echo "ERROR: " . $sql . "<br>" . $conn->error; } }

// STOP Button
if(isset($_POST['Stop'])){
$sql =("insert into move (forward,backward,stop,leftbtn,rightbtn) values ('0','0','1','0','0')"); 
if ($conn->query($sql) === TRUE){
    echo "Data record added successfully"; }
    else {
    echo "ERROR: " . $sql . "<br>" . $conn->error; } }

// RIGHT Button
if(isset($_POST['Right'])){
$sql =("insert into move (forward,backward,stop,leftbtn,rightbtn) values ('0','0','0','0','1')"); 
if ($conn->query($sql) === TRUE){
    echo "Data record added successfully"; }
    else {
    echo "ERROR: " . $sql . "<br>" . $conn->error; } }

// BACKWARD Button
if(isset($_POST['Backward'])){
$sql =("insert into move (forward,backward,stop,leftbtn,rightbtn) values ('0','1','0','0','0')"); 
if ($conn->query($sql) === TRUE){
    echo "Data record added successfully"; }
    else {
    echo "ERROR: " . $sql . "<br>" . $conn->error; } }

?>