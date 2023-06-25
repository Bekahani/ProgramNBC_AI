<?php
include('../../config/koneksi.php');
    $no = 1;
    $query = mysqli_query($con,"SELECT * FROM variabel_kriteria");

	while( $row = mysqli_fetch_assoc($query)){
?>
    <tr>
        <td> <?php echo $no++ ?> </td>
        <td> <?php echo $row['nama_variabel_kriteria']?> </td>
        <td> 
            <a href="edit-kriteria.php?tes=<?php echo $row['id_kriteria'];?>" class="btn btn-info btn-icon-text">Edit <i class="mdi mdi-file-check btn-icon-append"></i></a>
            <a href="../../config/admin/inital-variabel/delete.php?tes=<?php echo $row['id_kriteria'];?>" class="btn btn-warning btn-icon-text">Delete <i class="mdi mdi-alert btn-icon-prepend"></i></a>
        </td>
    </tr>
<?php				
	}
?>