<?php

$servername = "localhost";
$username = "root"; // sesuaikan dengan username db masing-masing
$password = ""; // sesuaikan dengan password db masing-masing
$databasename = "db_blog";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $databasename);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {
    echo "Connection Success!";   
}

?>
