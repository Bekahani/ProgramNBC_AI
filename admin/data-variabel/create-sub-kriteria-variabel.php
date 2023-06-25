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
            </div>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Form Initial Variabel Data </h3>
              <nav aria-label="breadcrumb">
                <!-- <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol> -->
              </nav>
            </div>
            <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description"> Basic form elements </p>
                    <form class="forms-sample" method="POST" action="../../config/admin/sub-initial-variabel/create.php">
                      <div class="form-group">
                        <label for="exampleInputName1">Nama Sub Initial Variabel</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="nama_sub_kriteria_variabel">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Initial Variabel</label>
                        <select class="form-control" id="exampleSelectGender" name="variabel_kriteria">
                            <option value="-">-</option>
                          <?php include('option.php'); ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Bobot Nilai</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="bobot_nilai_sub_variabel">
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