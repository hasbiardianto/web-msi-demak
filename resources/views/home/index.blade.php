@extends('home.format')

  @section('msi')
  
<!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

      <div class="info d-flex align-items-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
              <h2 data-aos="fade-down">YAYASAN MENTARI SEHAT INDONESIA KABUPATEN DEMAK</h2>
              <p data-aos="fade-up">“Segeralah Shalat agar hatimu tenang, Istighfarlah agar kecewamu hilang. Dan Berdoalah agar bahagiamu segera datang.”</p>
            </div>
          </div>
        </div>
      </div>

      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active" style="background-image: url(/image/web/idulfitri-pengurus.jpg)"></div>
        <div class="carousel-item" style="background-image: url(/image/web/dukungan-pasien.jpg)"></div>
        <div class="carousel-item" style="background-image: url(/image/web/refreshment-kader.jpg)"></div>
        <div class="carousel-item" style="background-image: url(/image/web/validasi-data.jpg)"></div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

    </section><!-- End Hero Section -->

    <main id="main">

      
      <!-- ======= Constructions Section ======= -->
      <section id="constructions" class="constructions">
        <div class="container" data-aos="fade-up">

          <div class="text-center mb-8">
            <h2>BERITA DAN KEGIATAN TEBARU</h2>
            <h2>MSI KABUPATEN DEMAK</h2>
            <div class="garis offset-md-2 "></div>
          </div>
        
          <div class="row gy-4">
            @foreach($sliders->sortByDesc('created_at')->take(6) as $index => $slider)
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3 ">
              <div class="card h-100">
                <a href="{{ route('slider.show', $slider->id) }}">
                  <div class="box-image">
                    <img src="/image/{{ $slider->image }}" class="img-fluid" alt="" style="object-fit: cover; width: 100%; height: 400px;">
                  </div>
                </a>
                <div class="card-body text-center">
                  <a href="{{ route('slider.show', $slider->id) }}">
                    <h4 class="card-title text-black">{{ $slider->title }}</h4>
                  </a>
                  <a href="{{ route('slider.show', $slider->id) }}">
                    <p class="card-text text-black">{{ substr(strip_tags($slider->description), 0, 300) }}...</p>
                  </a>
                  <a href="{{ route('slider.show', $slider->id) }}" class="btn color2 text-white mt-3">Baca Selengkapnya</a>
                </div>
              </div>
            </div>
          @endforeach
          
          </div>
          
          </div>
          

          </div>

        </div>
      </section><!-- End Constructions Section -->

      <!-- ======= Services Section ======= -->
      <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>VISI YAYASAN </h2>
            <h3>MENTARI SEHAT INDONESIA</h3>
            <p>Penggerak terwujudnya infrastruktur kesehatan non pemerintah dan dinamika kelompok sosial yang mampu secara mandiri menanggulangi masalah kesehatan, sosial, dan pendidikan di masyarakat.</p>
            <a href="tentangKamiDemak" target="_blank" class="btn color2 text-white mt-3 ">Selengkapnya</a>
          </div>

        </div>
      </section><!-- End Services Section -->

      <!-- ======= Alt Services Section ======= -->
      <section id="alt-services" class="alt-services">
        <div class="container" data-aos="fade-up">

          <div class="row justify-content-around gy-4">
            <div class="col-lg-6 img-bg" style="background-image: url(/assets/img/hero-carousel/banner.png.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>
            <div class="col-lg-5 d-flex flex-column justify-content-center ">
              <h2 class="text-center mt-3">MENTARI SEHAT INDONESIA KABUPATEN DEMAK</h2>
              <div class="garis offset-md-2 mb-3"></div>
              <p>Mentari Sehat Indonesia Kabupaten Demak terletak di Perum Bintoro Asri Blok F No. 02 RT. 003 RW. 008 Desa Jogoloyo Kecamatam Wonosalam Kabupaten Demak </p>
              <div class="col-4 mx-auto text-center">
              <a href="tentangKamiDemak" target="_blank" class="btn color2 text-white mt-3 ">Selengkapnya</a>
            </div>
            </div>
          </div>

        </div>
      </section><!-- End Alt Services Section -->

      <!-- ======= Recent Blog Posts Section ======= -->
      <section id="recent-blog-posts" class="recent-blog-posts section-bg">
        <div class="container" data-aos="fade-up">

      <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
          
        <div class="section-header">
        <h2>PENGURUS</h2>
        </div>

          <div class="row gy-4">
            <div class="row justify-content-center">
              @foreach($pengurus as $penguru)
                  <div class="col-lg-4 col-md-6 member mb-4" data-aos="fade-up" data-aos-delay="200" style="display: flex; flex-direction: column; align-items: center;">
                      <div class="member-img mb-3" style="width: 300px; height: 300px; overflow: hidden; background-image: url('/image/{{ $penguru->poto }}'); background-size: cover;"></div>
                      <div class="member-info text-center">
                          <h4 class="mb-1">{{ $penguru->nama }}</h4>
                          <strong><span class="d-block mb-2">{{ $penguru->jabatan }}</span></strong>
                          <p class="mb-0">{{ $penguru->deskripsi }}</p>
                      </div>
                  </div>
              @endforeach
          </div>    
        </div>

    </main><!-- End #main -->
  @endsection