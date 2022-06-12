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
              <h3 class="fw-bolder mt-3 mb-3" id="list-item-1">Jakarta Pusat</h3>
              @foreach ($galeries as $galery)
                @if ($galery->location->name == "Jakarta Pusat")
                  <div class="row mb-5">
                  <div class="col-md-7">
                        <h4 class="mt-3">{{ $galery["title"] }}</h4>
                        <p class="subtitle fw-semibold mt-3">{!! $galery["description"] !!}</p>
                        <button class="btn btn-purple button-galeri mt-2 mb-3"><a href="/galeri/{{ $galery["slug"] }}">Lihat semua</a></button>
                      </div>
                      <div class="col">
                        <img class="img-fluid" src="{{ asset('storage/' . $galery->mainPhoto) }}" width="300px" alt="{{ $galery->title }}">
                      </div>               
                  </div>  
                @endif
              @endforeach

              <!-- Jakbar -->
              <h3 class="fw-bolder mb-3" id="list-item-2">Jakarta Barat</h3>
              @foreach ($galeries as $galery)
                @if ($galery->location->name == "Jakarta Barat")
                  <div class="row mb-5">
                  <div class="col-md-7">
                        <h4 class="mt-3">{{ $galery["title"] }}</h4>
                        <p class="subtitle fw-semibold mt-3">{!! $galery["description"] !!}</p>
                        <button class="btn btn-purple button-galeri mt-2 mb-3"><a href="/galeri/{{ $galery["slug"] }}">Lihat semua</a></button>
                      </div>
                      <div class="col">
                        <img class="img-fluid" src="{{ asset('storage/' . $galery->mainPhoto) }}" width="300px" alt="{{ $galery->title }}">
                      </div>
                  </div>  
                @endif
              @endforeach           


              <!-- Jaksel -->
              <h3 class="fw-bolder mb-3" id="list-item-3">Jakarta Selatan</h3>
              @foreach ($galeries as $galery)
                @if ($galery->location->name == "Jakarta Selatan")
                  <div class="row mb-5">
                  <div class="col-md-7">
                        <h4 class="mt-3">{{ $galery["title"] }}</h4>
                        <p class="subtitle fw-semibold mt-3">{!! $galery["description"] !!}</p>
                        <button class="btn btn-purple button-galeri mt-2 mb-3"><a href="/galeri/{{ $galery["slug"] }}">Lihat semua</a></button>
                      </div>
                      <div class="col">
                        <img class="img-fluid" src="{{ asset('storage/' . $galery->mainPhoto) }}" width="300px" alt="{{ $galery->title }}">
                      </div>
                  </div>  
                @endif
              @endforeach

              <!-- Jakut -->
              <h3 class="fw-bolder mb-3" id="list-item-4">Jakarta Utara</h3>
              @foreach ($galeries as $galery)
                @if ($galery->location->name == "Jakarta Utara")
                  <div class="row mb-5">
                  <div class="col-md-7">
                        <h4 class="mt-3">{{ $galery["title"] }}</h4>
                        <p class="subtitle fw-semibold mt-3">{!! $galery["description"] !!}</p>
                        <button class="btn btn-purple button-galeri mt-2 mb-3"><a href="/galeri/{{ $galery["slug"] }}">Lihat semua</a></button>
                      </div>
                      <div class="col">
                        <img class="img-fluid" src="{{ asset('storage/' . $galery->mainPhoto) }}" width="300px" alt="{{ $galery->title }}">
                      </div>
                  </div>  
                @endif
              @endforeach

              <!-- Jaktim -->
              <h3 class="fw-bolder mb-3" id="list-item-5">Jakarta Timur</h3>
              @foreach ($galeries as $galery)
                @if ($galery->location->name == "Jakarta Timur")
                  <div class="row mb-5">
                  <div class="col-md-7">
                        <h4 class="mt-3">{{ $galery["title"] }}</h4>
                        <p class="subtitle fw-semibold mt-3">{!! $galery["description"] !!}</p>
                        <button class="btn btn-purple button-galeri mt-2 mb-3"><a href="/galeri/{{ $galery["slug"] }}">Lihat semua</a></button>
                      </div>
                      <div class="col">
                        <img class="img-fluid" src="{{ asset('storage/' . $galery->mainPhoto) }}" width="300px" alt="{{ $galery->title }}">
                      </div>
                  </div>  
                @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection