<?php

$user = 'root';
$password = 'root';
$db = 'patient_info';
$host = 'localhost';
// $port = 8889;

// Create connection
$conn = new mysqli($host,$user,$password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>