@extends('layout.app')

@section('title-bar')
    <title>Visit Jakarta | Kuliner</title>
@endsection

@section('content')
    <!-- Scroll top button -->
  <button onclick="topFunction()" class="btn btn-purple" id="myBtn" title="Go to top">
    <i class="uil uil-arrow-up"></i>
  </button>
  <!-- Akhir scroll top button -->
  <main>
    <section id="kuliner" class="container kuliner">
      <div class="kuliner-wrapper">
        <div class="row">
          <div class="col-md-3">
            <div id="list-example" class="list-group">
              <a class="list-group-item list-group-item-action" href="#list-item-1">Makanan</a>
              <a class="list-group-item list-group-item-action" href="#list-item-2">Minuman</a>
            </div>
          </div>
          <div class="col">
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
              <!-- Makanan -->
              <h3 class="fw-bolder mt-3" id="list-item-1">Makanan</h3>
              <div class="row mb-5">
                <div class="col-md-7">
                  <h4 class="mt-3">Soto Betawi</h4>
                  <p class="subtitle fw-semibold mt-3">Soto Betawi merupakan soto yang khas dari daerah DKI Jakarta yang terdiri dari campuran daging dan jerohan sapi. Kuah soto Betawi merupakan campuran santan dan susu. </p>
                  <button class="btn btn-purple button-kuliner mt-2 mb-3"><a href="#">Lihat restoran</a></button>
                </div>
                <div class="col">
                  <img class="img-fluid" src="./img/kuliner/soto-betawi.png" width="300px" alt="Soto Betawi">
                </div>
              </div>
              <div class="row mb-5">
                <div class="col">
                  <img class="img-fluid" src="./img/kuliner/kerak-telor.png" width="300px" style="border-radius: 10px;" alt="Kerak Telor">
                </div>
                <div class="col-md-7">
                  <h4 class="mt-3">Kerak Telor</h4>
                  <p class="subtitle fw-semibold mt-3">Kerak telor adalah makanan khas dari Jakarta (Betawi) yang dibuat dengan bahan dasar beras ketan putih dan telur ayam. Kerak telor sering dijumpai saat acara yang bertemakan Betawi bersama makanan khas Betawi lainnya.</p>
                  <button class="btn btn-purple button-kuliner mt-2 mb-3"><a href="#">Lihat restoran</a></button>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-7">
                  <h4 class="mt-3">Laksa Betawi</h4>
                  <p class="subtitle fw-semibold mt-3">Laksa betawi adalah Penganan berjenis mie yang diberi bumbu. Laksa Betawi memiliki kuah berwarna kekuningan. Campuran udang rebon yang ada dalam kuah laksa, membuat rasanya menjadi segar dan di padu aroma khas udang. Selain itu, Makanan ini menggunakan Ketupat.</p>
                  <button class="btn btn-purple button-kuliner mt-2 mb-3"><a href="#">Lihat Restoran</a></button>
                </div>
                <div class="col">
                  <img class="img-fluid" src="./img/kuliner/laksa-betawi.png" width="300px" alt="Laksa Betawi">
                </div>
              </div>

              <!-- Minuman -->
              <h3 class="fw-bolder mt-3" id="list-item-2">Minuman</h3>
              <div class="row mb-5">
                <div class="col-md-7">
                  <h4 class="mt-3">Es Selendang Mayang</h4>
                  <p class="subtitle fw-semibold mt-3">Es selendang mayang isinya mirip seperti puding atau kue lapis yang terbuat dari tepung sagu aren. Lapisan selendang mayang terdiri dari warna putih berasal dari santan dan merah muda atau hijau. Biasanya disajikan di mangkuk dan disiram pemanis dari gula merah atau sirup, santan, dan potongan es batu.</p>
                  <button class="btn btn-purple button-kuliner mt-2 mb-3"><a href="#">Lihat Restoran</a></button>
                </div>
                <div class="col">
                  <img class="img-fluid" src="./img/kuliner/selendang-mayang.png" width="300px" alt="Selendang Mayang">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection