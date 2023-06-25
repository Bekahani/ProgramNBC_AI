<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "nbc";

    $con = mysqli_connect($host,$user,$pass,$db);

    if($con->connect_error){
        die('Koneksi Gagal : '.$con->connect_error);
    }
?>