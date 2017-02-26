<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$user = $url["user"];
$password = $url["pass"];
$db = substr($url["path"]);
$host = $url["host"];
// $port = 8889;

// Create connection
$conn = new mysqli($host,$user,$password,$db);
mysqli_select_db($conn,$db);

?>