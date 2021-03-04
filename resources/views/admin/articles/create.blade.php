@extends('layouts.dashboard')


@section('content')
    <div class="jumbotron">
        <h1 class="display-3">Write an article</h1>
        <p class="lead">Add the article to the DC Universe</p>
    </div>
    
    
    @include('partials.errors')

    <form action="{{ route('admin.articles.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Titolo" required value="{{ old('title') }}">
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" name="body" id="body" rows="3" required>{{ old('body') }}</textarea>
        </div>
        @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        
        <div class="form-group">
            <label for="cover">Cover image</label>
            <input type="file" class="form-control-file" name="cover" id="cover" placeholder="cover" aria-describedby="cover-helper">
            <small id="cover-helper" class="form-text text-muted">Insert a cover image</small>
        </div>
        @error('cover')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Save</button>
    </form>

@endsection