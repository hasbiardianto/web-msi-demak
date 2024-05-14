@extends('layout.app')

@section('title', 'Dashboard')

@section('content')

    <h1>Selamat Datang</h1>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4">
        <a href="/data" class="text-white text-decoration-none">
          <div class="card bg-danger text-white">
            <div class="card-body text-center">
              <i class="fas fa-newspaper fa-3x"></i>
              <h5 class="card-title">Berita & Kegiatan  : {{ count($data) }}</h5>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="/pengurus" class="text-white text-decoration-none">
          <div class="card bg-success text-white">
            <div class="card-body text-center">
              <i class="fas fa-sitemap fa-3x"></i>
              <h5 class="card-title">Pengurus  : {{ count($pengurus) }}</h5>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="/kontak" class="text-white text-decoration-none">
          <div class="card bg-primary text-white">
            <div class="card-body text-center">
              <i class="fas fa-envelope fa-3x"></i>
              <h4 class="card-title">Pesan : {{ count($sliders) }}</h4>
              
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
  <style>
    .card-body {
      transition: box-shadow 0.3s ease;
    }
  
    .card-body:hover {
      box-shadow: 0 18px 36px rgba(0, 0, 0, 0.5); /* Adjust the shadow values as needed */
    }
  
    .card-title {
      margin-top: 10px;
    }
  </style>
  
  
    
@endsection
