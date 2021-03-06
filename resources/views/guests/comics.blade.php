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
                <p class="series">{{ $comic->series . ' #' . $comic->volume }}</p>
                <p class="available">
                    {{ ($comic->available == 1) ? 'AVAILABLE NOW' : 'AVAILABLE SOON'}}
                </p>
            </div>
        @endforeach
    </div>
</div>

<div class="middle_comic_page my-4">
    <div class="container">
        <h2>MUST READS</h2>
        <div class="articles my-4">
            @foreach($articles as $article)
                <img src="{{ asset('storage/' . $article->cover) }}" alt="$article->title">
            @endforeach
        </div>
    </div>
</div>
@endsection