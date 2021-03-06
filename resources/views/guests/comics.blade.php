@extends('layouts.app')

@section('content')

<div class="top_comic_page">
    <nav>
        <div class="container">
            <div class="big_tag"> 
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
                <a href="{{route('show_comic', ['comic'=> $comic->id])}}">
                    <p class="series">{{ $comic->series . ' #' . $comic->volume }}</p>
                </a>
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
        <div class="articles my-4 d-flex">
            @foreach($articles as $article)
                <div class="article">
                    <img src="{{ asset('storage/' . $article->cover) }}" alt="$article->title">
                    <h6>{{ $article->title }}</h6>
                    <h5>{{ $article->category }}</h5>
                    <p>{{ $article->summary }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="lower_comic_page py-4">
    <div class="container">
        <div class="big_tag"> 
            <h2>CURRENT SERIES</h2> 
        </div>
        <div class="row">
            @for ($i = 0; $i < 12; $i++)
                <div class="col-xs-12 col-md-4 col-lg-2">
                    <div class="current_series">
                        <img src="{{ asset('img/DC_placeholder_series.jpg') }}" alt="DC placeholder image">
                        <h6>SERIES' NAME</h6>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>

@endsection