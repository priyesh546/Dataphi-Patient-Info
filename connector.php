<?php

$url = parse_url(getenv("mysql://b5f778db8fcb3c:d53354e0@us-cdbr-iron-east-04.cleardb.net/heroku_d967a08d6902966?reconnect=true"));

$user = $url["user"];
$password = $url["pass"];
$db = substr($url["path"]);
$host = $url["host"];
// $port = 8889;

// Create connection
$conn = new mysqli($host,$user,$password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>