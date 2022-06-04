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
        <section class="container my-4">
            <article class="my-3 ft-5">
                <h2>{{ $post["title"] }}</h2>
                <h5>
                @if ($post->category->name != 'Kuliner')
                    {{ $post->location->name }}
                @else
                    @if ($post->location->name == 'Jakarta Utara')
                        Makanan
                    @else
                        Minuman
                    @endif
                @endif
                </h5>       
                <p>{!! $post["body"] !!}</p>
            </article>
        </section>
    </main>
    
@endsection