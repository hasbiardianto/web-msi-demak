      @extends('home.format')

      @section('msi')

      <style>
        .load-button-container {
          display: flex;
          justify-content: center;
          margin-top: 100px;
        }
      
        .load-button {
          margin: 0 10px !important;
        }
      </style>
      

      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/image/magang7.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

          <h2 class="text-center">BERITA DAN KEGIATAN MSI KAB DEMAK</h2>
          <ol>
            <li><a href="/">BERANDA</a></li>
            <li>BERITA DAN KEGIATAN</li>
          </ol>

        </div>
      </div><!-- End Breadcrumbs -->

      <main id="main">


        <!-- ======= Constructions Section ======= -->
        <section id="constructions" class="constructions">
          <div class="container" data-aos="fade-up">

            <div class="text-center mb-8">
              <h2>BERITA DAN KEGIATAN</h2>
              <div class="garis offset-md-2 "></div>
            </div>

            <div class="row gy-4">
              @php
              $count = 0;
              @endphp

              @foreach($sliders as $index => $slider)
              <div class="col-lg-4 col-md-6 col-sm-12 mb-3 slider-item" style="{{ $count > 8 ? 'display: none;' : '' }}">
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

              @php
              $count++;
              @endphp
              @endforeach

              <div class="col-md-12 text-center mt-5 load-button-container">
                <button id="load-previous-button" class="btn color2 text-white btn-lg" onclick="loadPrevious()" style="{{ $count <= 9 ? 'display: none;' : 'display: none;' }} margin-right: 50px;">Lihat Sebelumnya</button>
                <button id="load-more-button" class="btn color2 text-white btn-lg" onclick="loadMore()" style="{{ $count <= 9 ? 'display: none;' : '' }} ">Lihat Selanjutnya</button>
              </div>              
            </div>

          </div>
        </section>
        <script>
          var itemCount = 9;
          var visibleCount = 9;

          function loadMore() {
            var sliderItems = document.querySelectorAll('.slider-item');

            for (var i = 0; i < sliderItems.length; i++) {
              if (i >= visibleCount && i < visibleCount + itemCount) {
                sliderItems[i].style.display = 'block';
              } else {
                sliderItems[i].style.display = 'none';
              }
            }

            visibleCount += itemCount;

            var loadMoreButton = document.querySelector('#load-more-button');
            var loadPreviousButton = document.querySelector('#load-previous-button');

            if (visibleCount >= sliderItems.length) {
              loadMoreButton.style.display = 'none';
            }

            if (visibleCount > itemCount) {
              loadPreviousButton.style.display = 'block';
            } else {
              loadPreviousButton.style.display = 'none';
            }
          }

          function loadPrevious() {
            var sliderItems = document.querySelectorAll('.slider-item');
            var firstVisibleIndex = visibleCount - itemCount * 2;

            if (firstVisibleIndex >= 0) {
              for (var i = 0; i < sliderItems.length; i++) {
                if (i >= firstVisibleIndex && i < firstVisibleIndex + itemCount) {
                  sliderItems[i].style.display = 'block';
                } else {
                  sliderItems[i].style.display = 'none';
                }
              }

              visibleCount -= itemCount;
            }

            var loadMoreButton = document.querySelector('#load-more-button');
            var loadPreviousButton = document.querySelector('#load-previous-button');

            if (firstVisibleIndex >= 0) {
              loadPreviousButton.style.display = 'block';
            } else {
              loadPreviousButton.style.display = 'none';
            }

            loadMoreButton.style.display = 'block';
          }
        </script>
        <!-- End Constructions Section -->


      </main><!-- End #main -->
      @endsection
