@extends('layouts.dashboard')

@section('content')

    <div class="jumbotron">
        <h1 class="display-4">{{ $comic->series . " #" . $comic->volume }}</h1>
        <a class="btn btn-primary btn-lg" href="{{ route('admin.comics.edit', ['comic'=> $comic->id]) }}" role="button">Edit this comic</a>
    </div>

    <div class="comic_admin_info">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 col-lg-4">
                    <img src="{{ asset ('storage/' . $comic->cover) }}" class="img-fluid" alt="{{ $comic->series . ' #' . $comic->volume }}">
                </div>
                
                <div class="col-xs-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="card-header">{{ $comic->description }}</div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>Volume: {{ $comic->volume }}</li>
                                <li>Author: {{ $comic->author->name .  $comic->author->lastname }}</li>
                                <li>Artists: 
                                    @foreach($comic->artists as $artist)
                                        {{ $artist->name . ' ' .  $artist->lastname }}
                                        @if ( !$loop->last )
                                        ,
                                        @endif
                                    @endforeach
                                </li>
                                <li>Price: {{ $comic->price }}</li>
                                <li>Trim size: {{ $comic->trim_size }}</li>
                                <li>Sale Date: {{ $comic->sale_date }}</li>
                                <li>Page Count: {{ $comic->page_count }}</li>
                                <li>Rated: {{ $comic->rated }}</li>
                                <li>Available: {{ $comic->available == 1 ? 'Yes' : 'No' }}</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
