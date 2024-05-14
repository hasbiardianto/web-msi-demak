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
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="/assets/css/main.css" rel="stylesheet">

</head>


<body>
  
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/image/{{ $slider->image }}');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

          <h2 class="text-center">HALAMAN DETAIL</h2>
          <ol>
            <li><a href="/berita">BERITA</a></li>
            <li>DETAIL</li>
          </ol>

        </div>
      </div><!-- End Breadcrumbs -->

      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <a href="/berita" class="btn color2 text-white mb-5" style="width: 100px">Kembali</a>
            
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center">
                    <img src="/image/{{ $slider->image }}" class="img-fluid" alt="Gambar" style="object-fit: cover; max-width: 100%; height: auto;">
                </div>
                <div class="col-lg-12 col-md-12 text-center mt-4">
                    <div class="Kotak mt-5">
                        <strong><h1 class="mb-2">{{ $slider->title }}</h1></strong>
                        <div class="garis1" style="max-width:100%;width: auto;"></div>
                    </div>
                  </div>
                
                    <div class="content ps-0 ps-lg-4" style="white-space: pre-line; word-wrap: break-word;">
                      <p class="">
                          {!! $slider->description !!}
                      </p>                
                  </div>

                                
            </div>
        </div>
    </section>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="footer-content position-relative">
        <div class="container-fluid py-5 content-footer text-light">
            <div class="container">
                <h2 class="text-center mb-4">MENTARI SEHAT INDONESIA KABUPATEN DEMAK</h2>
                <div class="row justify-content-center">
                    <div class="col-sm-1 d-flex justify-content-center mt-4 mb-2">
                        <a href="https://www.instagram.com/msi.demak/" class="tanpaWarna"><i class="fa-brands fa-instagram fs-2"></i></a>
                    </div>
                    <div class="col-sm-1 d-flex justify-content-center mt-4 mb-2">
                        <a href="https://web.facebook.com/wigig.purbandanu.71" class="tanpaWarna">
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
              <a href="https://www.instagram.com/wigiggg/"><span>WPD</span></strong>
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
  

  
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>

