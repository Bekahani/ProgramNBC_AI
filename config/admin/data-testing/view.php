<?php
include('../../config/koneksi.php');
    $no = 1;
    $query = mysqli_query($con,"SELECT * FROM data_testing");

	while( $row = mysqli_fetch_array($query)){
?>                            
                        <tr>
                            <td> <?php echo $no++?> </td>
                            <td> <?php echo $row['jenis_kelamin_testing'];?> </td>
                            <td> <?php echo $row['pekerjaan_testing'];?></td>
                            <td> <?php echo $row['usia_testing'];?></td>
                            <td> <?php echo $row['kendaraan_testing'];?> </td>
                            <td> <?php echo $row['riwayat_testing'];?> </td>
                            
                          </tr>
<?php				
	}
?>