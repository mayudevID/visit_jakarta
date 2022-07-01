<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Location;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'posts' => Post::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            "categories" => Category::all(),
            "locations" => Location::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'location_id' => 'required',
            'mainPhoto' => 'required|image|file|max:2048',    
            'body' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['description'] = Str::limit($request->body, 0, "");  
        $validatedData['mainPhoto'] = $request->file('mainPhoto')->store('post-images');
        
        $post = Post::create($validatedData);

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            
            foreach ($images as $image) {
                $img = $image->store('post-images');  
                Image::create([
                    'post_id' => $post->id,
                    'photoUrl' => $img,
                ]);
            }
        }

        return redirect('/dashboard/posts')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show' , [
            'post' => $post,
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            "post" => $post,
            "categories" => Category::all(),
            "locations" => Location::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'location_id' => 'required',
            'mainPhoto' => 'image|file',
            'body' => 'required',
        ];

        if($request->slug != $post->slug){
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        if ($request->hasFile('mainPhoto')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['mainPhoto'] = $request->file('mainPhoto')->store('post-images');    
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['description'] = Str::limit($request->body, 0, ""); 

        if ($request->hasFile('images')) {
            $oldImages = Image::where('post_id', $post->id)->get();
            foreach ($oldImages as $oldImage) {
                Storage::delete($oldImage->photoUrl);
                Image::where('post_id', $post->id)->delete();
            }
            
            $images = $request->file('images');
            foreach ($images as $image) {
                $img = $image->store('post-images');  
                Image::create([
                    'post_id' => $post->id,
                    'photoUrl' => $img,
                ]);
            }
        }
        
        Post::where('id', $post->id)->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Post has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if ($post->mainPhoto) {
            Storage::delete($post->mainPhoto);
            Image::where('post_id', $post->id)->delete();
        }

        $postImages = Image::where('post_id', $post->id)->get();

        foreach ($postImages as $image) {
            Storage::delete($image->photoUrl);
        }

        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('success', 'Post has been deleted !');
    }

    public function checkSlug(Request $request) 
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]); 
    }
}
