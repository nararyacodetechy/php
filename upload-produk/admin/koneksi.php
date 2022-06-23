<?php 

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "db_produk";

$conn = new mysqli($servername, $username, $password, $databasename);

if ($conn->connect_error) {
    die("connection failed! :" . $conn->connect_error);
} else {
    // echo "connection Success!";
}
?>
