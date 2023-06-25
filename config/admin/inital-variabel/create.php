<?php
    include('../../koneksi.php');

    $title = $_POST['nama_kriteria_variabel'];

    $data = mysqli_query($con,"INSERT INTO variabel_kriteria VALUES('','$title')") or die(mysqli_error($con));;

    if($query) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='../../../admin/data-variabel/initial-variabel-data.php';</script>";
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
    header("location:../../../admin/data-variabel/initial-data-kriteria-variabel.php");
?>