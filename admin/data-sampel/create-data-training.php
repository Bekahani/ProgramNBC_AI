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
        <div id="layoutSidenav">
          <?php include('../component/navbar.php'); ?>
        </div>
        <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-2">
                      
                        <ol class="breadcrumb mb-4">
                            
                        </ol>
              </nav>
            <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description"> Basic form elements </p>
                    <form class="forms-sample" method="POST" action="../../config/admin/data-training/create.php">
                      <div class="form-group">
                        <label for="exampleInputName1">Apa Jenis Kelamin Anda!</label>
                        <select class="form-control" id="exampleSelectGender" name="jk">
                            <option value="-">-</option>
                            <?php
                                include('../../config/koneksi.php');
                                $sql=mysqli_query($con, "SELECT * FROM sub_kriteria WHERE id_variabelkriteria=1");
                                while( $data = mysqli_fetch_array($sql)){
                            ?>
                                <option value="<?=$data['bobot_nilai_sub']?>"><?=$data['nama_sub_kriteria']?></option>
                            <?php
                                }
                            ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Apa Pekerjaan Anda!</label>
                        <select class="form-control" id="exampleSelectGender" name="pekerjaan">
                            <option value="-">-</option>
                            <?php
                                include('../../config/koneksi.php');
                                $sql=mysqli_query($con, "SELECT * FROM sub_kriteria WHERE id_variabelkriteria=2");
                                while( $data = mysqli_fetch_array($sql)){
                            ?>
                                <option value="<?=$data['bobot_nilai_sub']?>"><?=$data['nama_sub_kriteria']?></option>
                            <?php
                                }
                            ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Berapa Usia Anda!</label>
                        <select class="form-control" id="exampleSelectGender" name="usia">
                            <option value="-">-</option>
                            <?php
                                include('../../config/koneksi.php');
                                $sql=mysqli_query($con, "SELECT * FROM sub_kriteria WHERE id_variabelkriteria=3");
                                while( $data = mysqli_fetch_array($sql)){
                            ?>
                                <option value="<?=$data['bobot_nilai_sub']?>"><?=$data['nama_sub_kriteria']?></option>
                            <?php
                                }
                            ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Apa kendaraan anda!</label>
                        <select class="form-control" id="exampleSelectGender" name="kendaraan">
                            <option value="-">-</option>
                            <?php
                                include('../../config/koneksi.php');
                                $sql=mysqli_query($con, "SELECT * FROM sub_kriteria WHERE id_variabelkriteria=5");
                                while( $data = mysqli_fetch_array($sql)){
                            ?>
                                <option value="<?=$data['bobot_nilai_sub']?>"><?=$data['nama_sub_kriteria']?></option>
                            <?php
                                }
                            ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Apa Riwayat BBM</label>
                        <select class="form-control" id="exampleSelectGender" name="riwayat_BBM">
                            <option value="-">-</option>
                            <?php
                                include('../../config/koneksi.php');
                                $sql=mysqli_query($con, "SELECT * FROM sub_kriteria WHERE id_variabelkriteria=4");
                                while( $data = mysqli_fetch_array($sql)){
                            ?>
                                <option value="<?=$data['bobot_nilai_sub']?>"><?=$data['nama_sub_kriteria']?></option>
                            <?php
                                }
                            ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Apakah Dapat Subsidi</label>
                        <select class="form-control" id="exampleSelectGender" name="vaksin">
                            <option value="-">-</option>
                            <option value="Dapat">Dapat</option>
                            <option value="Tidak Dapat">Tidak Dapat</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <a class="btn btn-dark" href="bobot-penilaian-fuzzy.php">Cancel</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <!-- <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer> -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>