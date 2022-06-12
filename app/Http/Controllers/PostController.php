<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Image;

class PostController extends Controller
{
    public function museum() 
    {
        return view('museum', [
            'title' => 'museum',
            'museums' => Post::where('category_id', 1)->get(),
            'images' => Image::all()
        ]);
    }

    public function galeri() 
    {
        return view('galeri',[
            'title' => 'galeri',
            'galeries' => Post::where('category_id', 2)->get(),
            'images' => Image::all()
        ]);
    }
    
    public function kuliner()
    {
        return view('kuliner', [
            'title' => 'kuliner',
            'culinaries' => Post::where('category_id', 3)->get(),
            'images' => Image::all()
        ]);
    }

    public function rekreasi() 
    {
        return view('rekreasi', [
            'title' => 'rekreasi',
            'recreations' => Post::where('category_id', 4)->get(),
            'images' => Image::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post,
            "images" => Image::where('post_id', $post->id)->get(),
        ]);
    }
}
