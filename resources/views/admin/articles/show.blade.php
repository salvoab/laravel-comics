@extends('layouts.dashboard')

@section('content')

  <div class="jumbotron">
    <h1>{{$article->title}}</h1>
    <a href="{{ route('admin.articles.edit', ['article' => $article->id]) }}" class="btn btn-primary">Edit this article</a>
  </div>  
    
  <div class="article_admin_info">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-4 col-lg-4">
          <img src="{{ asset ('storage/' . $article->cover) }}" class="img-fluid" alt="{{ $article->title }}">
        </div>
        
        <div class="col-xs-12 col-md-8 col-lg-8">  
          <p class="lead">{{$article->body}}</p>
        </div>
      </div>
    </div>
  </div>

@endsection