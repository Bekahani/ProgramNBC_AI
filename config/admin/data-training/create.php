<?php
    include('../../koneksi.php');

    $jk         = $_POST['jk'];
    $pekerjaan  = $_POST['pekerjaan'];
    $usia       = $_POST['usia'];
    $km         = $_POST['keadaan_mengandung'];
    $rw         = $_POST['riwayat_kesehatan'];
    $vaksin     = $_POST['vaksin'];

    $data = mysqli_query($con,"INSERT INTO data_training VALUES('','$jk','$pekerjaan','$usia','$km','$rw','$vaksin')") or die(mysqli_error($con));;

    if($query) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='../../../admin/data-sampel/data-training.php';</script>";
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
    header("location:../../../admin/data-sampel/data-training.php");
?>