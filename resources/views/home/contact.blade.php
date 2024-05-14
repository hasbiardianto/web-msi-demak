@extends('home.format')

  @section('msi')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/image/magang2.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2 class="text-center">HUBUNGI KAMI</h2>
        <ol>
          <li><a href="/">BERANDA</a></li>
          <li>KONTAK</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-map"></i>
              <h3>Alamat</h3>
              <p class="text-center">Perum Jl. Bintoro Asri No.02, RT.003/RW.008, Jogoloyo, Kec. Wonosalam, Kabupaten Demak, Jawa Tengah</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>ssrmsi.demak@gmail.com</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telephone"></i>
              <h3>Telpon kita</h3>
              <p>085641773975</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">

          <div class="col-lg-6 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d253442.24885861765!2d110.4381254!3d-7.0051453!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70ebe34747a471%3A0x6ef1f990d78ce485!2sMentari%20Sehat%20Indonesia%20Kab.%20Demak!5e0!3m2!1sen!2sid!4v1693535022899!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>

          </div><!-- End Google Maps -->
          <div class="col-lg-6">
          <div id="pesan">
          <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form id="kontakForm" action="{{ route('kontak.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" name="nama" placeholder="nama" required>
                        </div>
                        <div class="form-group mb-3">
                          <input type="email" class="form-control" name="email" placeholder="Email Anda" required>
                        </div>
                        <div class="form-group mb-3">
                          <textarea class="form-control" name="pesan" rows="5" cols="20" placeholder="Pesan" required></textarea>
                        </div>        
                        <button type="submit" class="btn color2 btn-block mb-3 ">Kirim Pesan</button> 
                    </form>
                </div>
        
            </div>
          </div>
            @if(session('message'))
            <div id="notification" class="alert alert-success mb-3">
                {{ session('message') }}
            </div>
        
            <script>
                setTimeout(function() {
                    var notification = document.getElementById('notification');
                    if (notification) {
                        notification.style.display = 'none';
                    }
                }, 5000);
            </script>
        @endif        
        </div>
      </div>
          <!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->


  </main><!-- End #main -->
  

  @endsection