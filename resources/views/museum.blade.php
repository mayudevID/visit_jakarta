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
              <h3 class="fw-bolder mt-3 mb-3" id="list-item-1">Jakarta Pusat</h3>
              @foreach ($museums as $museum)
                @if ($museum->location->name == "Jakarta Pusat")
                  <div class="row mb-5">
                    @if ($loop->odd)
                      <div class="col-md-7">
                        <h4 class="mt-3">{{ $museum["title"] }}</h4>
                        <p class="subtitle fw-semibold mt-3">{!! $museum["description"] !!}</p>
                        <button class="btn btn-purple button-museum mt-2 mb-3"><a href="/museum/{{ $museum["slug"] }}">Lihat semua</a></button>
                      </div>
                      <div class="col">
                        <img class="img-fluid" src="{{ asset('storage/' . $museum->image) }}" width="300px" alt="{{ $museum->title }}">
                      </div>
                    @else
                      <div class="col">
                        <img class="img-fluid" src="{{ asset('storage/' . $museum->image) }}" width="300px" alt="{{ $museum->title }}">
                      </div>
                      <div class="col-md-7">
                        <h4 class="mt-3">{{ $museum["title"] }}</h4>
                        <p class="subtitle fw-semibold mt-3">{!! $museum["description"] !!}</p>
                        <button class="btn btn-purple button-museum mt-2 mb-3"><a href="/museum/{{ $museum["slug"] }}">Lihat semua</a></button>
                      </div>
                    @endif
                  </div>    
                @endif
              @endforeach

              <!-- Jakbar -->
              <h3 class="fw-bolder mb-3" id="list-item-2">Jakarta Barat</h3>
              @foreach ($museums as $museum)
                @if ($museum->location->name == "Jakarta Barat")
                <div class="row mb-5">
                    @if ($loop->odd)
                      <div class="col-md-7">
                        <h4 class="mt-3">{{ $museum["title"] }}</h4>
                        <p class="subtitle fw-semibold mt-3">{!! $museum["description"] !!}</p>
                        <button class="btn btn-purple button-museum mt-2 mb-3"><a href="/museum/{{ $museum["slug"] }}">Lihat semua</a></button>
                      </div>
                      <div class="col">
                        <img class="img-fluid" src="{{ asset('storage/' . $museum->image) }}" width="300px" alt="{{ $museum->title }}">
                      </div>
                    @else
                      <div class="col">
                        <img class="img-fluid" src="{{ asset('storage/' . $museum->image) }}" width="300px" alt="{{ $museum->title }}">
                      </div>
                      <div class="col-md-7">
                        <h4 class="mt-3">{{ $museum["title"] }}</h4>
                        <p class="subtitle fw-semibold mt-3">{!! $museum["description"] !!}</p>
                        <button class="btn btn-purple button-museum mt-2 mb-3"><a href="/museum/{{ $museum["slug"] }}">Lihat semua</a></button>
                      </div>
                    @endif
                  </div>  
                @endif
              @endforeach

              <!-- Jaksel -->
              <h3 class="fw-bolder mb-3" id="list-item-3">Jakarta Selatan</h3>
              @foreach ($museums as $museum)
                @if ($museum->location->name == "Jakarta Selatan")
                <div class="row mb-5">
                    @if ($loop->odd)
                      <div class="col-md-7">
                        <h4 class="mt-3">{{ $museum["title"] }}</h4>
                        <p class="subtitle fw-semibold mt-3">{!! $museum["description"] !!}</p>
                        <button class="btn btn-purple button-museum mt-2 mb-3"><a href="/museum/{{ $museum["slug"] }}">Lihat semua</a></button>
                      </div>
                      <div class="col">
                        <img class="img-fluid" src="{{ asset('storage/' . $museum->image) }}" width="300px" alt="{{ $museum->title }}">
                      </div>
                    @else
                      <div class="col">
                        <img class="img-fluid" src="{{ asset('storage/' . $museum->image) }}" width="300px" alt="{{ $museum->title }}">
                      </div>
                      <div class="col-md-7">
                        <h4 class="mt-3">{{ $museum["title"] }}</h4>
                        <p class="subtitle fw-semibold mt-3">{!! $museum["description"] !!}</p>
                        <button class="btn btn-purple button-museum mt-2 mb-3"><a href="/museum/{{ $museum["slug"] }}">Lihat semua</a></button>
                      </div>
                    @endif
                  </div>      
                @endif
              @endforeach

              <!-- Jakut -->
              <h3 class="fw-bolder mb-3" id="list-item-4">Jakarta Utara</h3>
              @foreach ($museums as $museum)
                @if ($museum->location->name == "Jakarta Utara")
                  <div class="row mb-5">
                    @if ($loop->odd)
                      <div class="col-md-7">
                        <h4 class="mt-3">{{ $museum["title"] }}</h4>
                        <p class="subtitle fw-semibold mt-3">{!! $museum["description"] !!}</p>
                        <button class="btn btn-purple button-museum mt-2 mb-3"><a href="/museum/{{ $museum["slug"] }}">Lihat semua</a></button>
                      </div>
                      <div class="col">
                        <img class="img-fluid" src="{{ asset('storage/' . $museum->image) }}" width="300px" alt="{{ $museum->title }}">
                      </div>
                    @else
                      <div class="col">
                        <img class="img-fluid" src="{{ asset('storage/' . $museum->image) }}" width="300px" alt="{{ $museum->title }}">
                      </div>
                      <div class="col-md-7">
                        <h4 class="mt-3">{{ $museum["title"] }}</h4>
                        <p class="subtitle fw-semibold mt-3">{!! $museum["description"] !!}</p>
                        <button class="btn btn-purple button-museum mt-2 mb-3"><a href="/museum/{{ $museum["slug"] }}">Lihat semua</a></button>
                      </div>
                    @endif
                  </div>    
                @endif
              @endforeach

              <!-- Jaktim -->
              <h3 class="fw-bolder mb-3" id="list-item-5">Jakarta Timur</h3>
              @foreach ($museums as $museum)
                @if ($museum->location->name == "Jakarta Timur")
                  <div class="row mb-5">
                    @if ($loop->odd)
                      <div class="col-md-7">
                        <h4 class="mt-3">{{ $museum["title"] }}</h4>
                        <p class="subtitle fw-semibold mt-3">{!! $museum["description"] !!}</p>
                        <button class="btn btn-purple button-museum mt-2 mb-3"><a href="/museum/{{ $museum["slug"] }}">Lihat semua</a></button>
                      </div>
                      <div class="col">
                        <img class="img-fluid" src="{{ asset('storage/' . $museum->image) }}" width="300px" alt="{{ $museum->title }}">
                      </div>
                    @else
                      <div class="col">
                        <img class="img-fluid" src="{{ asset('storage/' . $museum->image) }}" width="300px" alt="{{ $museum->title }}">
                      </div>
                      <div class="col-md-7">
                        <h4 class="mt-3">{{ $museum["title"] }}</h4>
                        <p class="subtitle fw-semibold mt-3">{!! $museum["description"] !!}</p>
                        <button class="btn btn-purple button-museum mt-2 mb-3"><a href="/museum/{{ $museum["slug"] }}">Lihat semua</a></button>
                      </div>
                    @endif
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