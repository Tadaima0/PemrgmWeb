<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];


$u = 'A12.2022.06800';
$p = 'password111';

if($username === $u && $password === $p) {
    $_SESSION['nama'] = $username;
    $_SESSION['is_logged_in'] = TRUE;

    foreach ($username as  $value) {
        echo $value;
    }

    header("Location: ../beranda.php");
    exit();
} else {
    echo "Username atau password salah silahkan isi dengan sesuai!";
}
?>
