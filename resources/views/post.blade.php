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
                <img src="{{ asset('storage/' . $post->image) }}" alt="" style="width: 350px;">       
                <p>{!! $post["body"] !!}</p>
            </article>
        </section>
    </main>
    
@endsection