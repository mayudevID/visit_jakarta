@extends('layout.app')

@section('title-bar')
    <title>Visit Jakarta | Galeri</title>
@endsection

@section('content')
    <!-- Scroll top button -->
  <button onclick="topFunction()" class="btn btn-purple" id="myBtn" title="Go to top">
    <i class="uil uil-arrow-up"></i>
  </button>
  <!-- Akhir scroll top button -->
  <main>
    <section id="galeri" class="container galeri">
      <div class="galeri-wrapper">
        <div class="row">
          <div class="col-md-3">
            <div id="list-example" class="list-group">
              <a class="list-group-item list-group-item-action" href="#list-item-1">Jakarta Pusat</a>
              <a class="list-group-item list-group-item-action" href="#list-item-2">Jakarta Barat</a>
              <a class="list-group-item list-group-item-action" href="#list-item-3">Jakarta Selatan</a>
              <a class="list-group-item list-group-item-action" href="#list-item-4">Jakarta Utara</a>
              <a class="list-group-item list-group-item-action" href="#list-item-5">Jakarta Timur</a>
            </div>
          </div>
          <div class="col">
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
              <!-- Jakpus -->
              <h3 class="fw-bolder mt-3" id="list-item-1">Jakarta Pusat</h3>
              <div class="row mb-5">
                <div class="col-md-7">
                  <h4 class="mt-3">Galeri Nasional Indonesia</h4>
                  <p class="subtitle fw-semibold mt-3">Galeri Nasional Indonesia merupakan tempat pameran seni rupa modern dan kontemporer. Terdapat juga beberapa gedung yang berfungsi sebagai tempat perhelatan seni rupa Indonesia dan juga mancanegara.</p>
                  <button class="btn btn-purple button-galeri mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
                <div class="col">
                  <img class="img-fluid" src="./img/galeri/galeri-nasional-indonesia.png" width="300px" alt="Galeri Nasional Indonesia">
                </div>
              </div>
              <div class="row mb-5">
                <div class="col">
                  <img class="img-fluid" src="./img/galeri/galeri-indonesia-kaya.png" width="300px" style="border-radius: 10px;" alt="Galeri Indonesia Kaya">
                </div>
                <div class="col-md-7">
                  <h4 class="mt-3">Galeri Indonesia Kaya</h4>
                  <p class="subtitle fw-semibold mt-3">Galeri Indonesia Kaya ini merupakan ruang edutainment budaya yang berbasis digital dimana tempat ini menampilkan karya seni nusantara mulai dari alat musik tradisional, baju adat, sampai informasi tentang kuliner daerah nusantara.</p>
                  <button class="btn btn-purple button-galeri mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-7">
                  <h4 class="mt-3">Galeri Bartele</h4>
                  <p class="subtitle fw-semibold mt-3">Galeri Bartele merupakan tempat seni yang menampilkan barang - barang antik. Dalam galeri ini terdapat berbagai koleksi barang langka seperti buku, peta foto - foto, dan lukisan yang berusia sampai lebih dari 500 tahun.</p>
                  <button class="btn btn-purple button-galeri mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
                <div class="col">
                  <img class="img-fluid" src="./img/galeri/galeri-bartele.png" width="300px" alt="Galeri Bartele">
                </div>
              </div>

              <!-- Jakbar -->
              <h3 class="fw-bolder" id="list-item-2">Jakarta Barat</h3>
              <p class="subtitle fw-semibold mt-3">Belum tersedia</p>


              <!-- Jaksel -->
              <h3 class="fw-bolder mb-3" id="list-item-3">Jakarta Selatan</h3>
              <div class="row mb-5">
                <div class="col">
                  <img class="img-fluid" src="./img/galeri/galeri-hadiprana.png" width="300px" style="border-radius: 10px;" alt="Galeri Hadiprana">
                </div>
                <div class="col-md-7">
                  <h4 class="mt-3">Galeri Hadiprana</h4>
                  <p class="subtitle fw-semibold mt-3">Galeri yang didirikan sejak 1961 ini menampilkan seni - seni lukisan dari nusantaran dan mancanegara. Selain memamerkan kesenian, di tempat ini juga terdapat kelas untuk mempelajari mengenai kesenian.</p>
                  <button class="btn btn-purple button-galeri mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
              </div>

              <!-- Jakut -->
              <h3 class="fw-bolder mb-3" id="list-item-4">Jakarta Utara</h3>
              <p class="subtitle fw-semibold mt-3">Belum tersedia</p>

              <!-- Jaktim -->
              <h3 class="fw-bolder mb-3" id="list-item-5">Jakarta Timur</h3>
              <p class="subtitle fw-semibold mt-3 mb-5">Belum tersedia</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection