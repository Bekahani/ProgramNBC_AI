<?php

    include("../koneksi.php");

    $nama       =$_POST['nama'];
    $username   = $_POST['username'];
    $email      = $_POST['email'];
    $pass       = md5($_POST['password']);
    $level      = "user";
    // $status     = "process";

    $query = mysqli_query($con,"INSERT INTO tbl_user VALUES('','$nama','$email','$username','$pass','$level')") or die(mysqli_error($con));

    if($query) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='../../login.php';</script>";
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
?>