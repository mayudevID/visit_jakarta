@extends('layout.app')

@section('title-bar')
    <title>Visit Jakarta | Museum</title>
@endsection

@section('content')
<!-- Scroll top button -->
<button onclick="topFunction()" class="btn btn-purple" id="myBtn" title="Go to top">
    <i class="uil uil-arrow-up"></i>
</button>
<!-- Akhir scroll top button -->
<main>
    <section id="museum" class="container museum">
      <div class="museum-wrapper">
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
                  <h4 class="mt-3">Museum Nasional Indonesia</h4>
                  <p class="subtitle fw-semibold mt-3">Museum Nasional Indonesia atau yang sering disebut masyarakat “Museum Gajah” karena di halaman depan museum terdapat sebuah patung gajah perunggu. Terdapat arkeologi, sejarah, etnografi, dan geografi. </p>
                  <button class="btn btn-purple button-museum mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
                <div class="col">
                  <img class="img-fluid" src="./img/museum/Museum-Gajah.png" width="300px" alt="Museum Gajah">
                </div>
              </div>
              <div class="row mb-5">
                <div class="col">
                  <img class="img-fluid" src="./img/museum/museum-taman-prasasti.jpeg" width="300px" style="border-radius: 10px;" alt="Museum Taman Prasasti">
                </div>
                <div class="col-md-7">
                  <h4 class="mt-3">Museum Taman Prasasti</h4>
                  <p class="subtitle fw-semibold mt-3">Museum Taman Prasasti adalah sebuah museum cagar budaya peninggalan masa kolonial Belanda yang berada di Jalan Tanah Abang No. 1, Jakarta Pusat. Museum ini memiliki koleksi prasasti nisan kuno serta miniatur makam khas dari 27 provinsi di Indonesia, beserta koleksi kereta jenazah antik. Museum seluas 1,2 ha ini merupakan museum terbuka yang menampilkan karya seni dari masa lampau tentang kecanggihan para pematung, pemahat, kaligrafer dan sastrawan yang menyatu. </p>
                  <button class="btn btn-purple button-museum mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
              </div>

              <!-- Jakbar -->
              <h3 class="fw-bolder" id="list-item-2">Jakarta Barat</h3>
              <div class="row mb-5">
                <div class="col-md-7">
                  <h4 class="mt-3">Museum Fatahillah</h4>
                  <p class="subtitle fw-semibold mt-3">Museum Fatahillah memiliki nama resmi Museum Sejarah Jakarta. Museum ini merupakan salah satu sejarah perjalanan kota Jakarta. Museum Fatahillah menempati balai kota tua dan berisi artefak, senjata, dan penjara tua. </p>
                  <button class="btn btn-purple button-museum mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
                <div class="col">
                  <img class="img-fluid" src="./img/museum/Museum-Fatahillah.png" width="300px" alt="Museum fatahillah">
                </div>
              </div>

              <!-- Jaksel -->
              <h3 class="fw-bolder mb-3" id="list-item-3">Jakarta Selatan</h3>
              <div class="row mb-5">
                <div class="col">
                  <img class="img-fluid" src="./img/museum/Museum-Satriamandala.png" width="300px" alt="Museum Kebangkitan Nasional">
                </div>
                <div class="col-md-7">
                  <h4 class="mt-3">Museum Satriamandala</h4>
                  <p class="subtitle fw-semibold mt-3">Merupakan museum sejarah perjuangan bangsa Indonesia. Di museum ini tersimpan berbagai benda sejarah yang berkaitan dengan perjuangan Tentara Nasional Indonesia (TNI) dari tahun 1945 sampai sekarang.</p>
                  <button class="btn btn-purple button-museum mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
              </div>

              <!-- Jakut -->
              <h3 class="fw-bolder mb-3" id="list-item-4">Jakarta Utara</h3>
              <div class="row mb-5">
                <div class="col-md-7">
                  <h4 class="mt-3">Museum Bahari</h4>
                  <p class="subtitle fw-semibold mt-3">Museum Bahari adalah museum yang menyimpan koleksi yang berhubungan dengan kebaharian dan kenelayanan bangsa Indonesia dari Sabang hingga Merauke. Diantaranya koleksi perahu tradisional yang digunakan nelayan.</p>
                  <button class="btn btn-purple button-museum mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
                <div class="col">
                  <img class="img-fluid" src="./img/museum/Museum-Bahari.png" width="300px" alt="Museum Bahari">
                </div>
              </div>

              <!-- Jaktim -->
              <h3 class="fw-bolder mb-3" id="list-item-5">Jakarta Timur</h3>
              <div class="row mb-5">
                <div class="col">
                  <img class="img-fluid" src="./img/museum/Museum-Perangko.jpeg" width="300px" style="border-radius: 10px;" alt="Museum Perangko">
                </div>
                <div class="col-md-7">
                  <h4 class="mt-3">Museum Perangko</h4>
                  <p class="subtitle fw-semibold mt-3">Museum Perangko menjadi salah satu Museum yang ada di kawasan TMII. Di sini terdapat ratusan koleksi prangko yang dipamerkan. Museum ini terbagi dari beberapa ruang. Setiap ruang memiliki pameran yang berbeda-beda seperti patung perancang perangko, koleksi perangko dari jaman penjajahan hingga koleksi perangko tematik dan modern.</p>
                  <button class="btn btn-purple button-museum mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection