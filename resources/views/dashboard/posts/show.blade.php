@extends('dashboard.layout.main')

@section('container')
<main>
        <section class="container my-4">
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
            <div class="col-lg-8 my-3">
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>Back to all posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span>Delete</button>
                </form>
                
            </div>  
            <article class="my-3 fs-6">
                {!! $post["body"] !!}
            </article>           
        </section>
    </main>
@endsection


