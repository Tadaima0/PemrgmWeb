<?php
    $server = 'localhost:3306';//127.0.0.1:8889'
    $username = 'root';
    $password = '';
    $namadb = 'newdb';

    $k = new mysqli($server, $username, $password, $namadb);
   if($k->connect_error)
   {
        echo "failed ", $k->connect_error;
        exit();
   }
    echo " berhasil";