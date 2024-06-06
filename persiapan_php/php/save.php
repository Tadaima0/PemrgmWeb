<?php
$fakultas = $_POST['fakultas'];
echo $fakultas, "br";
$NIM = $_POST['nim'];
echo $NIM, "br";


foreach($_POST['mhs'] as $key => $mhs)
{
    echo " ",$mhs,"<br>";
}
?>