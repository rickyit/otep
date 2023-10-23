<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "otep";

// Create connection
$connect = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connect->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}