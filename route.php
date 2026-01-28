<?php
// Aktifkan error reporting untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include koneksi database
require_once __DIR__ . '/lib/dbh.inc.php';

// Deteksi BASE_URL otomatis
$script_name = dirname($_SERVER['SCRIPT_NAME']);
if ($script_name === "/" || $script_name === "\\") {
    $project_location = "/";
} else {
    $project_location = rtrim($script_name, "/") . "/";
}
$me = $project_location;

// Ambil URI dan normalisasi
$request = $_SERVER['REQUEST_URI'] ?? '/';
$request = strtok($request, '?'); // buang query string
$request = str_replace('/index.php', '', $request); // buang index.php kalau ada

switch ($request) {
    case $me:
    case $me . 'home':
        require __DIR__ . '/content/home.view.php';
        break;

    case $me . 'daftarsp2d':
        require __DIR__ . '/content/daftar.view.php';
        break;

    case $me . 'listpenguji':
        require __DIR__ . '/content/daftarpenguji.view.php';
        break;

    case $me . 'berkas':
        require __DIR__ . '/content/berkas.view.php';
        break;

    case $me . 'kertaskerja':
        require __DIR__ . '/content/kertaskerja.view.php';
        break;

    case $me . 'spm':
        require __DIR__ . '/content/getdataspm.view.php';
        break;

    case $me . 'logout':
        require __DIR__ . '/proses/logout/page.php';
        break;

    case $me . 'mocking':
        require __DIR__ . '/content/tarik.view.php';
        break;

    case $me . 'verifikasi':
        require __DIR__ . '/content/verif.view.php';
        break;

    case $me . 'status':
        require __DIR__ . '/content/statusberkas.view.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/content/login.view.php';
        break;
}
