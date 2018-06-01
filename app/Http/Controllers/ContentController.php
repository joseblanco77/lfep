<?php

namespace App\Http\Controllers;

use App\Content;
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
}
