<?php

function questionPortada() 
{
    return \App\Question::orderBy('id', 'desc')
        ->first();
}


function postsPortada() 
{
    return \App\Post::orderBy('id', 'desc')
        ->take(5)
        ->get()
        ->random(3);
}


function itemsPortada($tipo)
{
    return \App\Content::where('type', $tipo)
        ->orderBy('id', 'desc')
        ->get(['title', 'slug']);
}






















function slugger()
{
    $contents = \App\Content::all();

    $contents->each(function ($item, $key) {
        $title = str_replace('Serie ', '', $item->title);
        $item->slug = str_slug($title);
        $item->save();
    });

    dd($contents);
}