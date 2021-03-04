<?php

namespace App\Http\Controllers\Admin;

use App\Artist;
use App\Author;
use App\Comic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::all();
        $artists = Artist::all();
        return view('admin.comics.create', compact('authors', 'artists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validatedData = $request->validate([
            'series' => 'required',
            'cover' => 'required|mimes:jpeg,png,jpg,gif,svg|max:500',
            'description' => 'required',
            'author_id' => 'required|integer|min:1',
            'volume' => 'required|integer|min:0',
            'price' => 'nullable|numeric',
            'trim_size' => 'nullable',
            'sale_date' => 'nullable',
            'page_count' => 'nullable|integer|min:0',
            'rated' => 'required'
        ]);

        $validatedData['available'] = $request->has('available') ? 1 : 0;
        //dd($validatedData, $request->artist_ids);

        $cover = Storage::put('cover_imgs', $request->cover); //Salvo l'immagine e conservo il percorso in $cover
        $validatedData['cover'] = $cover;
        Comic::create($validatedData);

        $comic = Comic::orderBy('id', 'desc')->first(); // prendo il comic appena creato
        $comic->artists()->attach($request->artist_ids); // e lo metto in relazione con i suoi artisti

        return redirect()->route('admin.comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $authors = Author::all();
        $artists = Artist::all();
        return view('admin.comics.edit', compact('comic', 'authors', 'artists'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //dd($request->all());
        $validatedData = $request->validate([
            'series' => 'required',
            'description' => 'required',
            'author_id' => 'required|integer|min:1',
            'volume' => 'required|integer|min:0',
            'price' => 'nullable|numeric',
            'trim_size' => 'nullable',
            'sale_date' => 'nullable',
            'page_count' => 'nullable|integer|min:0',
            'rated' => 'required'
        ]);

        $validatedData['available'] = $request->has('available') ? 1 : 0;
        
        if($request->has('cover')){
            $cover = Storage::put('cover_imgs', $request->cover); //Salvo l'immagine e conservo il percorso in $cover
            $validatedData['cover'] = $cover;
            $oldComic = Comic::find($comic->id); // prendo il comic nel database prima di aggiornarlo
            Storage::delete($oldComic->cover); // e cancella la sua vecchia cover
        }

        $comic->update($validatedData);
        $comic->artists()->sync($request->artist_ids);
        return redirect()->route('admin.comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        Storage::delete($comic->cover);
        $artistIds = $this->extractIds($comic->artists);
        $comic->artists()->detach($artistIds); // Rimuovo i record nella tabella artist_comic inerenti al comic che sto per cancellare
        $comic->delete();
        return redirect()->route('admin.comics.index');
    }

    /**
     * Take a collection of models and return an array of their ids
     * 
     * @param \Illuminate\Database\Eloquent\Collection $models
     * @return array Array containing the models' ids 
    */
    private function extractIds($models)
    {
        $ids = [];
        foreach($models as $model){
            $ids[] = $model->id;
        }
        return $ids;
    }
}
