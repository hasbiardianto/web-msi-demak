<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MSI kabupaten. demak</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  

  <!-- Favicons -->
  <link href="/assets/img/logo-msi.jpg" rel="icon">
  <link href="/assets/img/logo-msi.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Your main CSS file -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- Gaya untuk menahan header di bagian atas saat scroll -->
  <style>
    body {
      margin: 0;
      padding: 0;
    }

    header {
      background-color: transparent;
      transition: background-color 0.3s ease-in-out;
    }
    .navbar {
      padding: 3px 0; /* Sesuaikan dengan tinggi yang diinginkan */
    }

    .fixed-top {
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 1000;
    }
  </style>
</head>

<body id="body">

  <!-- ======= Header ======= -->
  <!-- Menambahkan kelas "fixed-top" pada header -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <img src="assets/img/navbar-logo.png" alt="" width="150" height="500">
      </a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar fs-3">
        <ul>
          <li><a href="/">Beranda</a></li>
          <li class="dropdown"><a href="tentangKamiDemak"><span>TENTANG MSI KAB DEMAK</span><i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="tentangKamiDemak">SIAPA ITU MSI KAB DEMAK</a></li>
              <li><a href="tentangKamiDemak#pengurus">PENGURUS</a></li>
            </ul>
          </li>
          <li><a href="berita">Berita dan Kegiatan</a></li>
          <li><a href="contact">Kontak</a></li>
          <li>
            <a href="login" class="btn color2 text-white d-flex justify-content-center align-items-center mx-3 px-3" style="width: 80px; height: 40px;">Login</a>
          </li>
        </ul>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- Bagian konten web Anda -->
  @yield('msi')

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="footer-content position-relative">
        <div class="container-fluid py-5 content-footer text-light">
            <div class="container">
                <h2 class="text-center mb-4">YAYASAN MENTARI SEHAT INDONESIA KABUPATEN DEMAK</h2>
                <div class="row justify-content-center">
                    <div class="col-sm-1 d-flex justify-content-center mt-4 mb-2">
                        <a href="https://www.instagram.com/msi.demak/" class="tanpaWarna"><i class="fa-brands fa-instagram fs-2"></i></a>
                    </div>
                    <div class="col-sm-1 d-flex justify-content-center mt-4 mb-2">
                        <a href="https://youtube.com/@ssrmsidemak?si=YY5e4nxC0EcPd_vJ" class="tanpaWarna">
                            <i class="fab fa-youtube fs-2"></i></a>
                    </div>
                    <div class="col-sm-1 d-flex justify-content-center mt-4 mb-2">
                        <a href="https://www.tiktok.com/@msi.demak?is_from_webapp=1&sender_device=pc" class="tanpaWarna">
                            <i class="fa-brands fa-tiktok fs-2"></i>
                    </div>
                </div>
            </div>
        </div>
          <div class="container-fluid  content-footer text-light">
            <div class="container d-flex justify-content-between">
                <label> Perum Bintoro Asri Blok F NO. 02 RT. 003 RW. 008 <br>
                    Desa Jogoloyo, Kec. Wonosalam, Kab. Demak<br><br>
                </label>

                <label>
                    <strong>Phone:</strong> 085641773975 / 082220220948<br>
                    <strong>Email:</strong> ssrmsi.demak@gmail.com<br>
                </label>
            </div>
        </div>
        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong>
              <a href="https://www.instagram.com/wigiggg/"><span>Mentari Sehat Indonesia Kab. Demak</span></strong>
              </a>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
            Designed by <a href="https://www.instagram.com/msi.demak/">Mentari Sehat Indonesia Kab. Demak</a>
          </div>
        </div>
      </div>
  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <!-- Tambahkan script ini di akhir file sebelum tag </body> -->
  <script>
    var header = document.getElementById("header");

    window.onscroll = function() {
      if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        header.classList.add("fixed-top");
        header.style.backgroundColor = "rgba(0, 0, 0, 0.8)"; // Ganti warna latar belakang pada scroll
      } else {
        header.classList.remove("fixed-top");
        header.style.backgroundColor = "transparent"; // Kembalikan ke transparan saat tidak di-scroll
      }
    };
  </script>
</body>

</html>
