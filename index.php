<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NBC SALES</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="frontend/assets/img/favicon.png" rel="icon">
  <link href="frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="frontend/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="frontend/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="frontend/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.7.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
.team.section-bg {
  background-color: #f8fafc;
  padding: 60px 0;
}

.team .section-title h2 {
  font-size: 32px;
  font-weight: bold;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
}

.team .section-title h2::after {
  content: "";
  position: absolute;
  display: block;
  width: 50px;
  height: 3px;
  background: #51b3ff;
  bottom: 0;
  left: calc(50% - 25px);
}

.team .section-title p {
  font-size: 15px;
  color: #777777;
  margin-bottom: 0;
}

.team .member {
  margin-bottom: 30px;
}

.team .member .pic {
  width: 80px;
  overflow: hidden;
  border-radius: 50%;
}

.team .member .pic img {
  max-width: 100%;
}

.team .member h4 {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 5px;
}

.team .member span {
  font-size: 14px;
  display: block;
  margin-bottom: 12px;
  color: #777777;
}

.team .member p {
  font-size: 14px;
  margin-bottom: 20px;
}

.team .member .social a {
  font-size: 16px;
  color: #b3b3b3;
  transition: 0.3s;
  padding: 8px;
  line-height: 1;
}

.team .member .social a:hover {
  color: #51b3ff;
  text-decoration: none;
}

@media (max-width: 768px) {
  .team .member {
    text-align: center;
  }
}

#hero {
  background: url(frontend/assets/img/background_we.jpg) top center;
  background-size: cover;
  position: relative;
  padding: 100px 0;
}

#hero::before {
  content: "";
  background: rgba(0, 0, 0, 0.5);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#hero .container {
  position: relative;
  z-index: 2;
}

#hero h1 {
  color: #fff;
  font-size: 48px;
  font-weight: 700;
  margin-bottom: 20px;
}

#hero h2 {
  color: #fff;
  font-size: 24px;
  font-weight: 400;
  margin-bottom: 30px;
}

#hero .btn-get-started {
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-size: 15px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 32px;
  border-radius: 50px;
  transition: 0.5s;
  margin-top: 20px;
  border: 2px solid #fff;
  color: #fff;
}

#hero .btn-get-started:hover {
  background: #fff;
  color: #51b3ff;
}

@media (max-width: 991px) {
  #hero h1 {
    font-size: 28px;
  }
  #hero h2 {
    font-size: 18px;
  }
}


</style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">NBC SALES</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#why-us">Petunjuk</a></li>  
          <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="getstarted scrollto" href="Login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Selamat Datang Di NBC Sales </h1>
          <h2>Kami menyediakan pertimbangan untuk menentukan stock barang agar penjualan semakin baik</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
        
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="frontend/assets/img/clients/nbc.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="frontend/assets/img/clients/nbc.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="frontend/assets/img/clients/nbc.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="frontend/assets/img/clients/nbc.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="frontend/assets/img/clients/nbc.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="frontend/assets/img/clients/nbc.jpg" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Aplikasi NBC SALES ini dibuat dengan tujuan agar Staff alfamart dan manajemen dapat mengetahui barang mana yang harus di restrock .
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Untuk meningkatkan Penjualan </li>
              <li><i class="ri-check-double-line"></i> Untuk Meminimalisi tingkat Ketugian</li>
              <li><i class="ri-check-double-line"></i> Meminimalisir ketidak tepatan Pemilihan Barang restocl</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Diharapkan dengan penggunaan aplikasi ini dapat meningkatkan penjualan dan meminimalisir kerugian .
            </p>
            
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Petunjuk Penggunaan <strong>dari Aplikasi NBC SALES</strong></h3>
              <p>
                Berikut Adalah petunjuk penggunaannya 
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span>Melakukan Registrasi<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Agar dapat login dan masuk kedalam sistem
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Pilih Menu Login <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Proses masuk ke halaman Login.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Mendaftarkan Diri <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Setelah Mendaftarkan Diri, Pengguna Login Untuk Melakukan Identifikasi.
                    </p>
                  </div>
                </li>

                 <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"><span>04</span> Masuk Ke Sistem <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Pilih menu Identifikasi.
                    </p>
                  </div>
                </li>

                 <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5" class="collapsed"><span>05</span> Masukan Data <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Menginput data dengan sejujur-jujurnya.
                    </p>
                  </div>
                </li>

                 <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-6" class="collapsed"><span>06</span> Submit Data <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-6" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Seluruh data di input untuk proses identifikasi.
                    </p>
                  </div>
                </li>

                 <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-7" class="collapsed"><span>07</span> Hasil <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-7" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Setelah semua proses, maka hasil akan ditampilkan.
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("frontend/assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

  
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Layanan</h2>
          <p>Berikut adalah layanan yang didapatkan dari aplikasi SaSu.</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
             <h4><a href="">Pengklasifikiasian</a></h4>
              <p>Anda Akan mendapatkan pelayanan pengklasifikasian Barang Restock dan Tidak Restock</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
               <h4><a href="">Data</a></h4>
              <p>Berdasarkan data yang di input untuk pengklasifikasian Anda akan disuguhkan hasil data pengklasifikasian</p>
            </div>
          </div>

          
        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

   

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Team</h2>
      <p>Berikut Adalah Team Pengembang dari Aplikasi SaSu ini.</p>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
          <div class="pic"><img src="frontend/assets/img/team/bagas.jpeg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Bagas Yusa Abidin</h4>
            <span>Mahasiswa</span>
            <p>19330060 Informatika A</p>
            <div class="social">
              <a href=""><i class="ri-twitter-fill"></i></a>
              <a href=""><i class="ri-facebook-fill"></i></a>
              <a href=""><i class="ri-instagram-fill"></i></a>
              <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4">
        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
          <div class="pic"><img src="frontend/assets/img/team/beka.jpeg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Bekka Hani Susanti</h4>
            <span>Mahasiswa</span>
            <p>20200013 Informatika A</p>
            <div class="social">
              <a href=""><i class="ri-twitter-fill"></i></a>
              <a href=""><i class="ri-facebook-fill"></i></a>
              <a href=""><i class="ri-instagram-fill"></i></a>
              <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
          <div class="pic"><img src="frontend/assets/img/team/Yumarlin.png" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Yumarlin MZ.,S.Kom.,M.Pd.,M.Kom</h4>
            <span>Dosen Pengampu</span>
            <p>Mata Kuliah Kecerdasan Buatan</p>
            <div class="social">
              <a href=""><i class="ri-twitter-fill"></i></a>
              <a href=""><i class="ri-facebook-fill"></i></a>
              <a href=""><i class="ri-instagram-fill"></i></a>
              <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


   

   
   

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>TIM 1 KECERDASAN BUATAN </span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
       
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="frontend/assets/vendor/aos/aos.js"></script>
  <script src="frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="frontend/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="frontend/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="frontend/assets/js/main.js"></script>

</body>

</html>