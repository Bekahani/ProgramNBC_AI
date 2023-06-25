<?php
    include('../../config/koneksi.php');
    $sql = mysqli_query($con,"SELECT * FROM initial_variabel");
    while($data=mysqli_fetch_array($sql)){
?>
    <option value="<?=$data['id_initial']?>"><?=$data['name_initial_variabel']?></option>
<?php
    }
?>