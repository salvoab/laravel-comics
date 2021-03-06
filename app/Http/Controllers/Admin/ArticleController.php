<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
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
            'category' => 'nullable|max:255',
            'summary' => 'nullable|max:255',
            'body' => 'required',
            'cover' => 'mimes:jpeg,png,jpg,gif,svg|max:500'
        ]);

        $cover = Storage::put('article_covers', $request->cover);
        $validatedData['cover'] = $cover;
        Article::create($validatedData);

        return redirect()->route('admin.articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('admin.articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'category' => 'nullable|max:255',
            'summary' => 'nullable|max:255',
            'body' => 'required'
        ]);
        
        if($request->has('cover')){
            $cover = Storage::put('article_covers', $request->cover); //Salvo l'immagine e conservo il percorso in $cover
            $validatedData['cover'] = $cover;
            $oldArticle = Article::find($article->id); // prendo l'articolo nel database prima di aggiornarlo
            Storage::delete($oldArticle->cover); // e cancella la sua vecchia cover
        }

        $article->update($validatedData);
        return redirect()->route('admin.articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Storage::delete($article->cover);
        $article->delete();
        return redirect()->route('admin.articles.index');
    }
}
