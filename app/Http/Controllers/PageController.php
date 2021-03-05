<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comic;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function comics()
    {
        $comics = Comic::all()->take(4);
        $articles = Article::all()->take(3);
        return view('guests.comics', compact('comics', 'articles'));
    }

    public function showComic(Comic $comic)
    {
        return view('guests.show_comic', compact('comic'));
    }
}
