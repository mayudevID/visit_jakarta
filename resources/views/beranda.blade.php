<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Visit Jakarta</title>

  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" type="text/css">
  <!-- CSS -->
  <link rel="stylesheet" href="./css/style.css" type="text/css">
  <!-- Unicons (Icons) -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>

<body>
  <!-- Scroll top button -->
  <button onclick="topFunction()" class="btn btn-purple" id="myBtn" title="Go to top">
    <i class="uil uil-arrow-up"></i>
  </button>
  <!-- Akhir scroll top button -->
  @include('partials.navbar')

  <main>
    <!-- Welcome -->
    <section id="welcomePage" class="welcomePage text-center">
      <h1 class="title-welcomePage fw-bold">Selamat Datang di <span>Visit Jakarta</span>!</h1>
      <p class="container subtitle-welcomePage subtitle  fw-semibold">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius, assumenda nihil quia aliquam molestiae impedit architecto ducimus alias voluptate id libero. Architecto ipsa voluptatum magnam! Exercitationem nisi numquam suscipit veniam.</p>
      <button class="btn btn-purple button-welcomePage"><a href="#">Gabung sekarang</a></button>


    </section>

    <!-- Museum -->
    <section id="museum" class="container museum">
      <div class="row d-flex justify-content-evenly">
        <div class="col">
          <div class="rectangle">

          </div>
        </div>
        <div class="col text-museum align-self-center">
          <h1 class="text-decoration-underline">Museum</h1>
          <p class="subtitle subtitle-museum mt-3 fw-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus veritatis ipsa delectus beatae incidunt eveniet consectetur dolores nemo? Iste, facilis modi? Corporis, error quasi. Maiores excepturi vitae dolor saepe qui!</p>
          <button class="btn btn-purple button-museum mt-4"><a href="#">Selengkapnya</a></button>
        </div>
      </div>
    </section>

    <!-- Galeri -->
    <section id="galeri" class="container galeri">
      <div class="row d-flex justify-content-evenly">
        <div class="col text-galeri align-self-center">
          <h1 class="text-decoration-underline">Galeri</h1>
          <p class="subtitle subtitle-galeri mt-3 fw-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus veritatis ipsa delectus beatae incidunt eveniet consectetur dolores nemo? Iste, facilis modi? Corporis, error quasi. Maiores excepturi vitae dolor saepe qui!</p>
          <button class="btn btn-purple button-museum mt-4"><a href="#">Selengkapnya</a></button>
        </div>
        <div class="col">
          <div class="rectangle">

          </div>
        </div>

      </div>
    </section>

    <!-- Kuliner -->
    <section id="kuliner" class="container kuliner">
      <div class="kuliner-title">
        <h1 class="text-decoration-underline text-center">Kuliner</h1>
      </div>
      <div class="subtitle kuliner-subtitle">
        <p class="subtitle subtitle-kuliner mt-3 fw-semibold text-center" style="color: hsla(0, 0%, 18%, 0.603);">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus veritatis ipsa delectus beatae incidunt eveniet consectetur dolores nemo? Iste, facilis modi? Corporis, error quasi. Maiores excepturi vitae dolor saepe qui!</p>
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
          <div class="rectangle">

          </div>
        </div>
        <div class="col text-tempat-rekreasi align-self-center">
          <h1 class="text-decoration-underline">Tempat Rekreasi</h1>
          <p class="subtitle subtitle-tempat-rekreasi mt-3 fw-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus veritatis ipsa delectus beatae incidunt eveniet consectetur dolores nemo? Iste, facilis modi? Corporis, error quasi. Maiores excepturi vitae dolor saepe qui!</p>
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
          <p class="subtitle-tentang-kami mt-1 fw-semibold text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore nesciunt vel veniam et cupiditate, harum aut voluptate nobis aperiam ea dicta dolore quas nihil, tempora suscipit exercitationem facilis recusandae labore aspernatur, eaque eligendi modi! Dolores voluptas quas inventore dolorum, repudiandae distinctio rerum similique possimus laudantium quos consectetur at dolore? Debitis et repellat nobis fugit eligendi sapiente nesciunt dolores quas, corporis hic! Quas sapiente nobis incidunt laboriosam alias. Deserunt, incidunt inventore!</p>
          <p class="subtitle-tentang-kami mt-1 fw-semibold text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore nesciunt vel veniam et cupiditate, harum aut voluptate nobis aperiam ea dicta dolore quas nihil, tempora suscipit exercitationem facilis recusandae labore aspernatur, eaque eligendi modi! Dolores voluptas quas inventore dolorum, repudiandae distinctio rerum similique possimus laudantium quos consectetur at dolore? Debitis et repellat nobis fugit eligendi sapiente nesciunt dolores quas, corporis hic! Quas sapiente nobis incidunt laboriosam alias. Deserunt, incidunt inventore!</p>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <div id="footer">
      <p class="text-center">Tugas Project UAS Pemrograman Web</p>
    </div>
  </footer>

  <script src="./js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>