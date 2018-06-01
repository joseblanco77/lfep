<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index() 
    {
        $posts = Question::orderBy('id', 'desc')->get();

        return view('preguntas')
            ->with(compact('posts'));
    }

    public function show($slug)
    {
        $post = Question::where('slug', $slug)->first();

        $sidebar = Question::where('slug', '!=', $slug)->orderBy('id', 'desc')->take(10)->get(['title', 'slug']);

        return view('pregunta')
            ->with(compact('post', 'sidebar'));
    }
}
