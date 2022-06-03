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
        <section class="container md-4">
            <article>
                <h2>{{ $post["title"] }}</h2>
                <h5>
                    @if ($post->category->name != "Kuliner")
                        {{ $post->category->name }} di
                        @if ($post->location == "jp")
                            Jakarta Pusat
                        @elseif ($post->location == "jb")  
                            Jakarta Barat
                        @elseif ($post->location == "js")
                            Jakarta Selatan
                        @elseif ($post->location == "ju")
                            Jakarta Utara
                        @elseif ($post->location == "jt")
                            Jakarta Timur           
                        @endif
                    @elseif ($post->location == "ju")
                        Makanan di Jakarta
                    @elseif ($post->location == "js")
                        Minuman di Jakarta
                    @endif
                </h5>
                <p>{!! $post["body"] !!}</p>
            </article>
        </section>
    </main>
    
@endsection