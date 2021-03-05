@extends('layouts.app')

@section('content')

<div class="top_comic_page">
    @foreach($comics as $comic)
        <div class="img_wrapper">
            <a href="{{route('show_comic', ['comic'=> $comic->id])}}"> 
                <img src="{{ asset('storage/' . $comic->cover) }}" alt="$comic->title">
            </a>
        </div>
    @endforeach
</div>

@endsection