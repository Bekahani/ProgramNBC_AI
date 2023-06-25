<?php

// print_r($_POST;);exit;

include('../../config/koneksi.php');
// $b_x = $_POST['x'];
// $b_y = $_POST['y'];
$jb = explode(";",$_POST['jb'])[0];
$harga = explode(";",$_POST['harga'])[0];
$terjual	= explode(";",$_POST['terjual'])[0];
$kadaluarsa		= explode(";",$_POST['kadaluarsa'])[0];
$rs	= explode(";",$_POST['rs'])[0];

$ambil_data_training = mysqli_query($con,"SELECT * FROM data_training ORDER BY id_data_training ASC");
$numrows    = mysqli_num_rows($ambil_data_training);

//Menentukan nilai K
	// $k=0.3 * $numrows;
	// $k=round($k);
	// $r=$k % 2;
	// if($r!=0)
	// {
	// 	$k=$k+1;
	// }
	// else
	// {
	// 	$k=$k;
	// }

//nilai k static
$k = 3;
// echo "Nilai K yang digunakan: $k <br><br><br>";

//hitung knn
for($i = 1; $i <= $numrows; $i++ ){
    $ambildata = mysqli_query($con,"SELECT * FROM data_training WHERE id_data_training='$i'");
    // printf("SELECT * FROM data_training WHERE id_data_training='$i'");
    while($data = mysqli_fetch_array($ambildata)){
        $v1 = $jb - $data['jenis_barang'];
	    $v2 = $harga - $data['harga'];
		$v3 = $terjual - $data['terjual'];
		$v4 = $kadaluarsa - $data['kadaluarsa'];
		$v5 = $rs - $data['riwayat'];

        $v11 = (pow($v1,2));
        $v22 = (pow($v2,2));
        $v33 = (pow($v3,2));
        $v44 = (pow($v4,2));
        $v55 = (pow($v5,2));
        
        
        // printf($v11); 
        // printf($v22); 
        // printf($v33); 
        // printf($v44); 
        // printf($v55); 
        $status = $data['stock'];

        $hitung1 =$v11 + $v22 + $v33 + $v44 + $v55;
        $hitung2 = sqrt($hitung1);
        //penyimpanan sementara
        $simpan = mysqli_query($con,"INSERT INTO sementara VALUES ('','$v22','$v22','$v33','$v44','$v55','$hitung2','$status')");
    }
    
}

//data sorting 
$s=1;
$sorting =  mysqli_query($con,"SELECT * FROM sementara ORDER BY stock DESC LIMIT 0,$k");
while($datasorting = $sorting->fetch_assoc()){

    // $urut = mysqli_query($con,"INSERT INTO urut VALUES ('','$v22','$v22','$v33','$v44','$v55','$hitung2','$status')");
    if($s == 3){
        // echo $datasorting['id_sementara']; 
        $jku = $datasorting['jenis_barang'];
        $pu = $datasorting['harga'];
        $uu = $datasorting['terjual'];
        $ku = $datasorting['kadaluarsa'];
        $rbu = $datasorting['riwayat'];
        $su =  $datasorting['status'];
        //udah pak
        // echo "data ke 3";
        $urut = mysqli_query($con,"INSERT INTO urut VALUES ('','$jku','$pu','$uu','$ku','$rbu','$hitung2','$su')");
    }
    $s++;
}

$tesHasil = mysqli_query($con,"SELECT * FROM urut ORDER BY id_urut DESC LIMIT 0,1");
while($dataTes = mysqli_fetch_array($tesHasil)){
    $dataurut = mysqli_query($con,"SELECT * FROM urut,barang JOIN sub_kriteria ON sub_kriteria.id_sub_kriteria = barang.sub_kriteria_id ORDER BY id_urut DESC");
    while($dataX = mysqli_fetch_array($dataurut)){

        $jb_l = explode(";",$_POST['jb'])[1];
        $harga_l = explode(";",$_POST['harga'])[1];
        $terjual_l	= explode(";",$_POST['terjual'])[1];
        $kadaluarsa_l		= explode(";",$_POST['kadaluarsa'])[1];
        $rs_l	= explode(";",$_POST['rs'])[1];

        // print_r($_POST); exit;
        if($dataX['stock'] == 0){
            $statuss = $dataX['status'];
            $cek = $dataX['nama_barang'];
            $aa = $dataX['jenis_barang'];
	        $bb = $dataX['harga'];
		    $cc = $dataX['terjual'];
		    $dd = $dataX['kadaluarsa'];
		    $ee = $dataX['riwayat'];
            echo "Hasil Identifikasi Anda: $statuss";
            echo"<br>";
            // echo "Daftar Barang : $cek ";
            echo "Nama Barang : " . $_POST['nama_barang'];
            echo"<br>";
            echo "Jenis Barang : " . $jb_l;
            echo"<br>";
            echo "Harga Barang : " . $harga_l;
            echo"<br>";
            echo "Terjual : " . $terjual_l;
            echo"<br>";
            echo "Masa Kadaluarsa : " . $kadaluarsa_l;
            break;
        }else{
            $statuss = $dataX['status'];
            $cek = $dataX['nama_barang'];
            $aa = $dataX['jenis_barang'];
	        $bb = $dataX['harga'];
		    $cc = $dataX['terjual'];
		    $dd = $dataX['kadaluarsa'];
		    $ee = $dataX['riwayat'];
            echo "Hasil Identifikasi Anda: $statuss";
            echo"<br>";
            // echo "Daftar Barang : $cek ";
            echo "Nama Barang : " . $_POST['nama_barang'];
            echo"<br>";
            echo "Jenis Barang : " . $jb_l;
            echo"<br>";
            echo "Harga Barang : " . $harga_l;
            echo"<br>";
            echo "Terjual : " . $terjual_l;
            echo"<br>";
            echo "Masa Kadaluarsa : " . $kadaluarsa_l;

            break;
        }
        
    }
}




// menghapus history perhitungaan

$deleteS = mysqli_query($con,"DELETE FROM sementara ORDER BY id_sementara ASC");
// $numrows1 = mysqli_num_rows($deleteS);

    // $deletmysqli_query($con,"DELETE FROM sementara WHERE id_sementara=$i");




// $deleteS = mysqli_query($con,"DELETE FROM sementara ORDER BY id_sementara ASC");
// $numrows1 = mysqli_num_rows($deleteS);
// for($i=1; $i<=$numrows1; $i++){
//     mysqli_query($con,"DELETE FROM sementara WHERE id_sementara=$i");
// }

//     $sql_urut = mysqli_query($con,"SELECT * FROM data_training ORDER BY id_data_training ASC");
// 	$numrows_urut = mysqli_num_rows($sql_urut);
// 	for ($i=1; $i <= $numrows_urut; $i++)
// 	{
// 		mysqli_query($con,"DELETE FROM urut WHERE id=$i");
// 	}
$simpan_data_training = mysqli_query($con,"INSERT INTO data_training VALUES('','$jb','$harga','$terjual','$kadaluarsa','$rs','$statuss')");
$simpan_data_testing = mysqli_query($con,"INSERT INTO data_testing VALUES('','$jb','$harga','$terjual','$kadaluarsa','$rs')");


?>