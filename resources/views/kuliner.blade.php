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
              <h3 class="fw-bolder mt-3 mb-3" id="list-item-1">Makanan</h3>
              @foreach ($culinaries as $culinary)
                @if ($culinary->location->name == "Jakarta Utara")
                  <div class="row mb-5">
                    <div class="col-md-7">
                      <h4 class="mt-3">{{ $culinary["title"] }}</h4>
                      <p class="subtitle fw-semibold mt-3">{{ $culinary["description"] }}</p>
                      <button class="btn btn-purple button-kuliner mt-2 mb-3"><a href="/kuliner/{{ $culinary["slug"] }}">Lihat restoran</a></button>
                    </div>
                    <div class="col">
                      <img class="img-fluid" src="{{ asset('storage/' . $culinary->image) }}" width="300px" alt="Soto Betawi">
                    </div>
                  </div>
                @endif
              @endforeach

              <!-- Minuman -->
              <h3 class="fw-bolder mb-3" id="list-item-2">Minuman</h3>
              @foreach ($culinaries as $culinary)
                @if ($culinary->location->name == "Jakarta Selatan")
                  <div class="row mb-5">
                    <div class="col-md-7">
                      <h4 class="mt-3">{{ $culinary["title"] }}</h4>
                      <p class="subtitle fw-semibold mt-3">{{ $culinary["description"] }}</p>
                      <button class="btn btn-purple button-kuliner mt-2 mb-3"><a href="/kuliner/{{ $culinary["slug"] }}">Lihat restoran</a></button>
                    </div>
                    <div class="col">
                      <img class="img-fluid" src="{{ asset('storage/' . $culinary->image) }}" width="300px" alt="Soto Betawi">
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