@extends('layouts.app')

@section('content')

<div class="top_comic_show_page" style="background-image: url({{asset('storage/' . $comic->cover)}})">
    <div class="show_cover">
        <img src="{{ asset('storage/' . $comic->cover) }}" alt="$comic->title">
        <h6>VIEW GALLERY</h6>
        <div class="tag">COMIC BOOK</div>
    </div>
</div>

@endsection