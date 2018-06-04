<?php

namespace App\Http\Controllers;

use App\Content;
use App\Question;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function audio($slug) 
    {
        $item = Content::where('slug', $slug)->where('type', 'audio')->first();

        $sidebar = Content::where('slug', '!=', $slug)->where('type', 'audio')->orderBy('id', 'desc')->get(['title', 'slug']);

        return view('audios')
            ->with(compact('item', 'sidebar'));
    }

    public function capsula($slug)
    {
        $item = Content::where('slug', $slug)->where('type', 'capsula')->first();

        $sidebar = Content::where('slug', '!=', $slug)->where('type', 'capsula')->orderBy('id', 'desc')->get(['title', 'slug']);
        
        return view('capsulas')
            ->with(compact('item', 'sidebar'));
    }

    public function somos($slug)
    {
        $item = Content::where('slug', $slug)->where('type', 'somos')->first();

        $sidebar = Content::where('slug', '!=', $slug)->where('type', 'somos')->orderBy('id', 'desc')->get(['title', 'slug']);

        return view('somos')
            ->with(compact('item', 'sidebar'));
    }

    public function conferencias($slug)
    {
        $item = Content::where('slug', $slug)->where('type', 'conferencias')->first();

        $sidebar = Content::where('slug', '!=', $slug)->where('type', 'conferencias')->orderBy('id', 'desc')->get(['title', 'slug']);

        return view('conferencias')
            ->with(compact('item', 'sidebar'));
    }

    public function video()
    {
        $item = Content::where('type', 'video')->first();

        $sidebar = Content::where('type', 'conferencias')->orderBy('id', 'desc')->get(['title', 'slug']);

        return view('video')
            ->with(compact('item', 'sidebar'));
    }

    public function fotos()
    {
        $sidebar = Content::where('type', 'audio')->orderBy('id', 'desc')->take(10)->get(['title', 'slug']);

        return view('fotos')
            ->with(compact('sidebar'));
    }

    public function orientador()
    {
        $sidebar = Question::orderBy('id', 'desc')->take(10)->get(['title', 'slug']);

        return view('orientador')
            ->with(compact('sidebar'));
    }
}
