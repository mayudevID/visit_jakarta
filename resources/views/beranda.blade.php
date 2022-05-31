@extends('layout.app')

@section('content')
<main>
    <!-- Welcome -->
    <section id="welcomePage" class="welcomePage text-center">
      <h1 class="title-welcomePage fw-bold">Selamat Datang di <span>Visit Jakarta</span>!</h1>
      <p class="container subtitle-welcomePage subtitle  fw-semibold">Ingin berwisata ke Jakarta tetapi tidak tahu apa saja yang asyik untuk dikunjungi? Tenang, <span>Visit Jakarta</span> hadir untuk membantu kamu menentukan tujuan wisata. Yuk, gabung!</p>
      <button class="btn btn-purple button-welcomePage"><a href="/login">Gabung sekarang</a></button>


    </section>

    <!-- Museum -->
    <section id="museum" class="container museum">
      <div class="row d-flex justify-content-evenly">
        <div class="col">
          <img class="rectangle" src="img/museum.png" alt="Museum">
        </div>
        <div class="col text-museum align-self-center">
          <h1 class="text-decoration-underline">Museum</h1>
          <p class="subtitle subtitle-museum mt-3 fw-semibold">Kita hidup sekarang karena masa lalu, dan masa depan adalah kita hari ini. Demikian kata seorang bijak yang menggambarkan pentingnya sejarah. Nah, salah satu cara belajar sejarah dengan cara yang menyenangkan adalah dengan mengunjungi museum.</p>
          <button class="btn btn-purple button-museum mt-4"><a href="#">Selengkapnya</a></button>
        </div>
      </div>
    </section>

    <!-- Galeri -->
    <section id="galeri" class="container galeri">
      <div class="row d-flex justify-content-evenly">
        <div class="col text-galeri align-self-center">
          <h1 class="text-decoration-underline">Galeri</h1>
          <p class="subtitle subtitle-galeri mt-3 fw-semibold">Galeri adalah ruangan atau bangunan yang digunakan sebagai tempat memajang barang, karya seni, dan lain-lain.</p>
          <button class="btn btn-purple button-museum mt-4"><a href="#">Selengkapnya</a></button>
        </div>
        <div class="col">
          <img class="rectangle" src="img/galeri.jpg" alt="Galeri">
        </div>

      </div>
    </section>

    <!-- Kuliner -->
    <section id="kuliner" class="container kuliner">
      <div class="kuliner-title">
        <h1 class="text-decoration-underline text-center">Kuliner</h1>
      </div>
      <div class="subtitle kuliner-subtitle">
        <p class="subtitle subtitle-kuliner mt-3 fw-semibold text-center" style="color: hsla(0, 0%, 18%, 0.603);">Sejarah nusantara melihat masakan Indonesia sebagai hasil persilangan budaya. Saat ini, kreativitas anak muda berkontribusi pada keragaman makanan dan minuman di Jakarta. Belum lagi beragamnya gaya hidup diet (modified diet), dari vegetarian (tanpa daging), vegan (tanpa makanan hewani) hingga ketogenik (makanan rendah karbohidrat dan tinggi lemak), yang menciptakan kancah kuliner baru.</p>
      </div>

      <div class="wrapper">
        <div class="row justify-content-evenly ">
          <div class="col-md-3 m-1">
            <div class="card" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title fw-bolder">Card title</h5>
                <p class="card-text fw-semibold">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#"><button class=" btn btn-purple">Selengkapnya</button></a>
              </div>
            </div>
          </div>
          <div class="col-md-3 m-1">
            <div class="card" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title fw-bolder">Card title</h5>
                <p class="card-text fw-semibold">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#"><button class=" btn btn-purple">Selengkapnya</button></a>
              </div>
            </div>
          </div>
          <div class="col-md-3 m-1">
            <div class="card" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title fw-bolder">Card title</h5>
                <p class="card-text fw-semibold">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#"><button class=" btn btn-purple">Selengkapnya</button></a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Tempat Rekreasi -->
    <section id="tempat-rekreasi" class="container tempat-rekreasi">
      <div class="row d-flex justify-content-evenly">
        <div class="col">
          <img class="rectangle" src="img/rekreasi.jpg" alt="Tempat Rekreasi">
        </div>
        <div class="col text-tempat-rekreasi align-self-center">
          <h1 class="text-decoration-underline">Tempat Rekreasi</h1>
          <p class="subtitle subtitle-tempat-rekreasi mt-3 fw-semibold">Jakarta memiliki banyak tempat rekreasi dan taman bermain bagi warga atau siapa saja yang berkunjung ke ibu kota. Dari taman bermain di pusat kota hingga area bermain alam di area pulau, kami tidak akan pernah kehabisan wahana.</p>
          <button class="btn btn-purple button-tempat-rekreasi mt-4"><a href="#">Selengkapnya</a></button>
        </div>
      </div>
    </section>

    <!-- Tentang Kami -->
    <section id="tentang-kami" class="tentang-kami">
      <div class="container">
        <div class="tentang-kami-title">
          <h1 class="text-decoration-underline text-center">Tentang Kami</h1>
        </div>
        <div class="tentang-kami-subtitle">
          <p class="subtitle-tentang-kami mt-5 fw-semibold text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore nesciunt vel veniam et cupiditate, harum aut voluptate nobis aperiam ea dicta dolore quas nihil, tempora suscipit exercitationem facilis recusandae labore aspernatur, eaque eligendi modi! Dolores voluptas quas inventore dolorum, repudiandae distinctio rerum similique possimus laudantium quos consectetur at dolore? Debitis et repellat nobis fugit eligendi sapiente nesciunt dolores quas, corporis hic! Quas sapiente nobis incidunt laboriosam alias. Deserunt, incidunt inventore!</p>
          <!--
          <p class="subtitle-tentang-kami mt-1 fw-semibold text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore nesciunt vel veniam et cupiditate, harum aut voluptate nobis aperiam ea dicta dolore quas nihil, tempora suscipit exercitationem facilis recusandae labore aspernatur, eaque eligendi modi! Dolores voluptas quas inventore dolorum, repudiandae distinctio rerum similique possimus laudantium quos consectetur at dolore? Debitis et repellat nobis fugit eligendi sapiente nesciunt dolores quas, corporis hic! Quas sapiente nobis incidunt laboriosam alias. Deserunt, incidunt inventore!</p>
          <p class="subtitle-tentang-kami mt-1 fw-semibold text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore nesciunt vel veniam et cupiditate, harum aut voluptate nobis aperiam ea dicta dolore quas nihil, tempora suscipit exercitationem facilis recusandae labore aspernatur, eaque eligendi modi! Dolores voluptas quas inventore dolorum, repudiandae distinctio rerum similique possimus laudantium quos consectetur at dolore? Debitis et repellat nobis fugit eligendi sapiente nesciunt dolores quas, corporis hic! Quas sapiente nobis incidunt laboriosam alias. Deserunt, incidunt inventore!</p>
          -->
        </div>
      </div>
    </section>
  </main>

  <footer>
    <div id="footer">
      <!--<p class="text-center">Tugas Project UAS Pemrograman Web</p>*/-->
      <div class="container">
        <div class="tentang-kami-title">
          <h1 class="text-center mt-4">Visit Jakarta</h1>
        </div>
        <div class="tentang-kami-subtitle">
          <p class="subtitle-tentang-kami mt-5 fw-semibold text-center">Visit Jakarta merupakan website yang memberikan referensi berbagai tempat yang berada di kota Jakarta. Website ini diharapkan dapat menjadi rujukan pengguna untuk mendapatkan informasi mengenai tempat tersebut.</p>
          <!--
          <p class="subtitle-tentang-kami mt-1 fw-semibold text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore nesciunt vel veniam et cupiditate, harum aut voluptate nobis aperiam ea dicta dolore quas nihil, tempora suscipit exercitationem facilis recusandae labore aspernatur, eaque eligendi modi! Dolores voluptas quas inventore dolorum, repudiandae distinctio rerum similique possimus laudantium quos consectetur at dolore? Debitis et repellat nobis fugit eligendi sapiente nesciunt dolores quas, corporis hic! Quas sapiente nobis incidunt laboriosam alias. Deserunt, incidunt inventore!</p>
          <p class="subtitle-tentang-kami mt-1 fw-semibold text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore nesciunt vel veniam et cupiditate, harum aut voluptate nobis aperiam ea dicta dolore quas nihil, tempora suscipit exercitationem facilis recusandae labore aspernatur, eaque eligendi modi! Dolores voluptas quas inventore dolorum, repudiandae distinctio rerum similique possimus laudantium quos consectetur at dolore? Debitis et repellat nobis fugit eligendi sapiente nesciunt dolores quas, corporis hic! Quas sapiente nobis incidunt laboriosam alias. Deserunt, incidunt inventore!</p>
          -->
        </div>
      </div>
    </div>
  </footer>
@endsection