<?php
include('../../config/koneksi.php');
    $no = 1;
    $query = mysqli_query($con,"SELECT * FROM data_training");

	while( $row = mysqli_fetch_array($query)){
?>                            
                        <tr>
                            <td> <?php echo $no++?> </td>
                            <td> <?php echo $row['jenis_barang'];?> </td>
                            <td> <?php echo $row['harga'];?></td>
                            <td> <?php echo $row['terjual'];?></td>
                            <td> <?php echo $row['kadaluarsa'];?> </td>
                            <td> <?php echo $row['riwayat'];?> </td>
                            <td> <?php echo $row['stock'];?> </td>
                          </tr>
<?php				
	}
?>