@extends('layout.app')

@section('title-bar')
    <title>{{ $post["title"] }}</title>
@endsection

@section('content')
    <!-- Scroll top button -->
    <button onclick="topFunction()" class="btn btn-purple" id="myBtn" title="Go to top">
        <i class="uil uil-arrow-up"></i>
    </button>
    <!-- Akhir scroll top button -->
    <main>
        <section class="container">
            <article class="">
                <h1><b>{{ $post["title"] }}</b></h1>
                <h5 class="my-4">
                @if ($post->category->name != 'Kuliner')
                    {{ $post->location->name }}
                @else
                    @if ($post->location->name == 'Jakarta Utara')
                        Makanan di Jakarta
                    @else
                        Minuman di Jakarta
                    @endif
                @endif
                </h5>
                <div class="container my-4" style="width: 50%;">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                            @foreach ($images as $key => $image)
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}" class="active" aria-label="Slide {{ $key }}"></button>
                            @endforeach
                            
                            <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
                        </div>
                        <div class="carousel-inner">
                            @foreach ($images as $key => $image)
                                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                <img src="{{ asset('storage/' . $image->photoUrl) }}" class="d-block w-100" alt="...">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div> 
                </div>   
                <br>
                <div class="container my-4">
                    {!! $post["body"] !!}
                </div>
              
            </article>
        </section>
    </main>
    
@endsection