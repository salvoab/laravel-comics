@extends('layouts.dashboard')


@section('content')
    <div class="jumbotron">
        <h1 class="display-3">Edit the article</h1>
        <p class="lead">Edit this article of the DC Universe</p>
    </div>
    
    
    @include('partials.errors')

    <form action="{{ route('admin.articles.update', ['article'=> $article->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Titolo" required value="{{ $article->title }}">
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" name="body" id="body" rows="3" required>{{ $article->body }}</textarea>
        </div>
        @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        
        <div class="edit_cover">
            <img src="{{ asset('storage/' . $article->cover) }}" class="edit_cover">
            <div class="alert alert-warning">Choose a new image only if you want to change this image</div>
            <div class="form-group">
                <label for="cover">Cover image</label>
                <input type="file" class="form-control-file" name="cover" id="cover" placeholder="cover" aria-describedby="cover-helper">
            </div>
            @error('cover')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>

@endsection