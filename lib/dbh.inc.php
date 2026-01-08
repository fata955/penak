<?php

$servername = "localhost";
$username = "root";
$password = "nadirad3mi208";
$database = "spm";


$koneksi = new mysqli($servername, $username, $password,$database);

// Check connection
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}
// echo "Connected successfully";
?>