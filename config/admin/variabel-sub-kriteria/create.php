<?php
    include('../../koneksi.php');

    $title = $_POST['nama_sub_initial_variabel'];
    $category = $_POST['initial_variabel'];
    $bobot  = $_POST['bobot_nilai_sub_variabel'];

    $data = mysqli_query($con,"INSERT INTO sub_initial VALUES('','$category','$title','$bobot')") or die(mysqli_error($con));;

    if($query) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='../../../admin/data-variabel/bobot-penilaian-fuzzy.php';</script>";
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
    header("location:../../../admin/data-variabel/bobot-penilaian-fuzzy.php");
?>