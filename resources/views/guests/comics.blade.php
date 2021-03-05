@extends('layouts.app')

@section('content')

<div class="top_comic_page">
    <nav>
        <div class="container">
            <div class="left"> 
                <h2>COMICS & GRAPHIC NOVELS</h2> 
            </div>

            <div class="right">
                <a href="#" class="active">THIS WEEK</a>
                <a href="#">LAST WEEK</a>
                <a href="#">NEXT WEEK</a>
                <a href="#">UPCOMING</a>
                <a href="#">SEE ALL</a>
            </div>
        </div>
    </nav>
    
    <div class="comics">
        @foreach($comics as $comic)
            <div class="comic_wrapper">
                <a href="{{route('show_comic', ['comic'=> $comic->id])}}"> 
                    <img src="{{ asset('storage/' . $comic->cover) }}" alt="$comic->title">
                </a>

                <div class="tag">COMIC BOOK</div>
            </div>
        @endforeach
    </div>
</div>

@endsection