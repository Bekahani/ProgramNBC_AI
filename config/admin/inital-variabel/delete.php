<?php
    include('../../koneksi.php');

    $id = $_GET['tes'];

    mysqli_query($con,"DELETE FROM variabel_kriteria WHERE id_kriteria ='$id' ");

    header("location:../../../admin/data-variabel/data-kriteria-variabel.php");

?>