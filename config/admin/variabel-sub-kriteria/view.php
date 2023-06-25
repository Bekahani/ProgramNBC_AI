<?php
include('../../config/koneksi.php');
$no = 1;
    // $query = mysqli_query($con,"SELECT * FROM sub_initial,initial_variabel WHERE sub_initial.id_intialVariabel=initial_variabel.id_initial order by id_sub_initial ");

	$query=mysqli_query($con, "SELECT * FROM sub_kriteria, variabel_kriteria where sub_kriteria.id_variabelkriteria=variabel_kriteria.id_kriteria order by id_sub_kriteria");
    while($row = mysqli_fetch_array($query)){
?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $row['nama_sub_kriteria']; ?> </td>
        <td><?php echo $row['nama_variabel_kriteria']; ?> </td>
        <td><?php echo $row['bobot_nilai_sub']; ?> </td>
    </tr>
    <?php				
	}
?>