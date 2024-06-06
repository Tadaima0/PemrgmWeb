<?php
// $username = $_POST['username'];
// $password = $_POST['password'];

// echo $username. ' '. $password;
// foreach ($_POST as $key => $value) {
//     echo  $value;
// }
// foreach ($_POST as $datauser) {
//     echo ' '. $datauser;
// }

$username = $_POST['username'];
$password = $_POST['password'];

$u = 'A12.2022.06800'; //username
$p = 'polke001'; //password

if($username == $u AND  $password == $p)
{
session_start();
$_SESSION['nama'] = $username;
$_SESSION['is_logged_in'] = TRUE;
header("location : main/halaman1.php");
}
else
{
echo "Silahkan cek kembali Username atau Password anda !";
}
