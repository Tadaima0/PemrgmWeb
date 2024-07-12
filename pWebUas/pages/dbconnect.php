<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mahasiswa";

// Membuat koneksi
$konek = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($konek->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
   