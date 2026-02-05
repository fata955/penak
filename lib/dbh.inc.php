<?php

$servername = "103";
$username = "root";
$password = "";
$database = "spm";


$koneksi = new mysqli($servername, $username, $password,$database);

// Check connection
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}
// echo "Connected successfully";
?>