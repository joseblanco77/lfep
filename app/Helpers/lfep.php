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
