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
        dd($validatedData, $request->artist_ids);
        $cover = Storage::put('cover_imgs', $request->cover);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
