<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Dashboard - User SaSu</title>
  <link href="../../https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link href="../../backend/assets/css/styles.css" rel="stylesheet" />
  <script src="../../https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
  <!-- partial:partials/_sidebar.html -->
  <?php include('../component/sidebar.php'); ?>
  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_navbar.html -->
    <?php include('../component/navbar.php'); ?>
    <!-- partial -->
    <div id="layoutSidenav_content">
      <div class="container-fluid px-4">
        <h1 class="mt-4">Identifikasi</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Selamat Datang DI NBC SALES </li>
        </ol>
        <div class="col-12 grid-margin stretch-card">
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body bg-light">
                <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Seleksi Barang Restock </h4>
                      <form class="form-horizontal" method="post" action="hasil.php">
                        <!-- <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="inNama" class="form-control" placeholder="Nama" required>
                  </div>
                  <div class="form-group">
                    <label>NIK</label>
                    <input type="text" name="inNik" class="form-control" placeholder="NIK" required>
                  </div> -->
                        <div class="form-group">
                          <label>Nama Barang</label>
                          <select name="nama_barang" class="form-control" required>
                            <option>Pilih Nama Barang</option>
                            <?php
                                include('../../config/koneksi.php');
                                $sql=mysqli_query($con, "SELECT * FROM barang ");
                                while( $data = mysqli_fetch_array($sql)){
                            ?>
                            <option value="<?=$data['nama_barang']?>"><?=$data['nama_barang']?></option>
                            <?php
                                }
                            ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Jenis Barang</label>
                          <select name="jb" class="form-control" required>
                            <option>Pilih Jenis Barang</option>
                            <?php
                                include('../../config/koneksi.php');
                                $sql=mysqli_query($con, "SELECT * FROM sub_kriteria WHERE id_variabelkriteria=1");
                                while( $data = mysqli_fetch_array($sql)){
                            ?>
                            <option value="<?=$data['bobot_nilai_sub']?>;<?=$data['nama_sub_kriteria']?>">
                              <?=$data['nama_sub_kriteria']?></option>
                            <?php
                                }
                            ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Harga</label>
                          <select name="harga" class="form-control" required>
                            <option>Pilih Harga</option>
                            <?php
                                include('../../config/koneksi.php');
                                $sql=mysqli_query($con, "SELECT * FROM sub_kriteria WHERE id_variabelkriteria=2");
                                while( $data = mysqli_fetch_array($sql)){
                            ?>
                            <option value="<?=$data['bobot_nilai_sub']?>;<?=$data['nama_sub_kriteria'] ?>">
                              <?=$data['nama_sub_kriteria']?></option>
                            <?php
                                }
                            ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Masa Kadaluarsa</label>
                          <select name="kadaluarsa" class="form-control" required>
                            <option>Pilih Masa Kadaluarsa</option>
                            <?php
                                include('../../config/koneksi.php');
                                $sql=mysqli_query($con, "SELECT * FROM sub_kriteria WHERE id_variabelkriteria=3");
                                while( $data = mysqli_fetch_array($sql)){
                            ?>
                            <option value="<?=$data['bobot_nilai_sub']?>;<?=$data['nama_sub_kriteria'] ?>">
                              <?=$data['nama_sub_kriteria']?></option>
                            <?php
                                }
                            ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Barang Terjual </label>
                          <select name="terjual" class="form-control" required>
                            <option>Pilih Jumlah Barang Terjual </option>
                            <?php
                                include('../../config/koneksi.php');
                                $sql=mysqli_query($con, "SELECT * FROM sub_kriteria WHERE id_variabelkriteria=5");
                                while( $data = mysqli_fetch_array($sql)){
                            ?>
                            <option value="<?=$data['bobot_nilai_sub']?>;<?=$data['nama_sub_kriteria'] ?>">
                              <?=$data['nama_sub_kriteria']?></option>
                            <?php
                                }
                            ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Riwayat Barang</label>
                          <select name="rs" class="form-control" required>
                            <option>Pilih Riwayat Barang</option>
                            <?php
                                include('../../config/koneksi.php');
                                $sql=mysqli_query($con, "SELECT * FROM sub_kriteria WHERE id_variabelkriteria=4");
                                while( $data = mysqli_fetch_array($sql)){
                            ?>
                            <option value="<?=$data['bobot_nilai_sub']?>;<?=$data['nama_sub_kriteria'] ?>">
                              <?=$data['nama_sub_kriteria']?></option>
                            <?php
                                }
                            ?>
                          </select>
                        </div>
                        <br>
                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                        <input type="reset" class="btn btn-dark" value="Cancel">
                      </form>
                    </div>
                  </div>
                </div>

                <footer class="py-4 bg-light mt-auto">
                  <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                      <div class="text-muted">Copyright &copy; NBC SALES 2023</div>
                      <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                      </div>
                    </div>
                  </div>
                </footer>
              </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
              crossorigin="anonymous"></script>
            <script src="js/scripts.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous">
            </script>
            <script src="assets/demo/chart-area-demo.js"></script>
            <script src="assets/demo/chart-bar-demo.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
            <script src="js/datatables-simple-demo.js"></script>
</body>

</html>