<?php
session_start();
if (!isset($_SESSION['username'])) {
    http_response_code(403);
    die("Akses ditolak. Silakan login terlebih dahulu.");
}

$file = basename($_GET['file']);
$path = __DIR__ . "/uploads/" . $file;

if (!file_exists($path)) {
    http_response_code(404);
    die("File tidak ditemukan.");
}

header("Content-Type: application/pdf");
header("Content-Disposition: inline; filename=\"$file\"");
header("Content-Length: " . filesize($path));
readfile($path);
exit;
