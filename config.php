<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname ="school";

//Creating connection
$conn = new mysqli($hostname,$username,$password,$dbname);

//Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>