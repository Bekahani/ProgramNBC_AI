<?php
    include('../../koneksi.php');

    $id    = $_POST['id_kriteria'];
    $title = $_POST['nama_variabel_kriteria'];

    $data = mysqli_query($con,"UPDATE kriteria_variabel SET nama_variabel_kriteria='$title' WHERE id_kriteria='$id'")or die(mysqli_error($con));

    if($query) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='../../../admin/data-variabel/initial-variabel-data.php';</script>";
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
    header("location:../../../admin/data-variabel/initial-variabel-data.php");
?>