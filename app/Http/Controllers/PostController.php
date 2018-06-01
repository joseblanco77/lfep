<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() 
    {
        $posts = Post::orderBy('id', 'desc')->get();

        return view('articulos')
            ->with(compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();

        $sidebar = Post::where('slug', '!=', $slug)->where('subtitle', $post->subtitle)->get(['title', 'slug']);

        return view('articulo')
            ->with(compact('post', 'sidebar'));
    }
}
