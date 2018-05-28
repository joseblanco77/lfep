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

        return view('articulo')
            ->with(compact('post'));
    }
}
