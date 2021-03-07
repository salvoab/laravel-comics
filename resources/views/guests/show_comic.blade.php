@extends('layouts.app')

@section('content')

<div class="top_comic_show_page" style="background-image: url({{asset('storage/' . $comic->cover)}})">
    <div class="show_cover">
        <img src="{{ asset('storage/' . $comic->cover) }}" alt="$comic->title">
        <h6>VIEW GALLERY</h6>
        <div class="tag">COMIC BOOK</div>
    </div>
</div>


<div class="middle_comic_show_page py-5">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6">
                <h2>{{ $comic->series . ' #' . $comic->volume }}</h2>
                <div class="show_available {{ ($comic->available == 1) ? 'bg_green' : 'bg_red' }}">
                    <div class="price">
                        <span>U.S. Price: ${{$comic->price}}</span> 
                        <span>{{ ($comic->available == 1) ? 'AVAILABLE' : 'NOT AVAILABLE' }}</span>
                    </div>
                    <div class="check_available">
                        <span>Check Availability</span>
                        <i class="fas fa-caret-down fa-sm fa-fw"></i>
                    </div>
                </div>

                <p class="description">{{ $comic->description }}</p>
            </div>
            
        </div>
    </div>
</div>

<div class="lower_comic_show_page">
    <div class="container">
        <div class="row">
            <!-- Talent -->
            <div class="col-xs-12 col-md-6 col-lg-6">
                <div class="informations">
                    <h4>Talent</h4>
                    <hr>
                    <div class="information">
                        <dt>Art by</dt>
                        <dd>
                            @foreach($comic->artists as $artist)
                                <a href="#">{{$artist->name . ' ' . $artist->lastname}}</a>
                                @if( !$loop->last) 
                                ,
                                @endif
                            @endforeach
                        </dd>
                    </div>
                    <hr>
                    <div class="information">
                        <dt>Written by</dt>
                        <dd><a href="#">{{$comic->author->name . ' ' . $comic->author->lastname}}</a></dd>
                    </div>
                    <hr>
                </div>
            </div>

            <!-- Specs -->
            <div class="col-xs-12 col-md-6 col-lg-6">
                <div class="informations">
                    <h4>Specs</h4>
                    <hr>
                    <div class="information">
                        <dt>Series</dt>
                        <dd><a href="#">{{$comic->series}}</a></dd>
                    </div>
                    <hr>
                    <div class="information">
                        <dt>U.S. Price</dt>
                        <dd>${{$comic->price}}</dd>
                    </div>
                    <hr>
                    <div class="information">
                        <dt>On Sale Date</dt>
                        <dd>{{$comic->sale_date}}</dd>
                    </div>
                    <hr>
                    <div class="information">
                        <dt>Volume/Issue #</dt>
                        <dd>{{$comic->volume}}</dd>
                    </div>
                    <hr>
                    <div class="information">
                        <dt>Trim Size</dt>
                        <dd>{{$comic->trim_size}}</dd>
                    </div>
                    <hr>
                    <div class="information">
                        <dt>Page Count</dt>
                        <dd>{{$comic->page_count}}</dd>
                    </div>
                    <hr>
                    <div class="information">
                        <dt>Rated</dt>
                        <dd>{{$comic->rated}}</dd>
                    </div>
                    <hr>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection