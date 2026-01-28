<?php

$servername = "103.160.152.124";
$username = "root";
$password = "Penataus4ha4n_2026#!";
$database = "spm";


$koneksi = new mysqli($servername, $username, $password,$database);

// Check connection
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}
// echo "Connected successfully";
?>