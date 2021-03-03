@extends('layouts.dashboard')

@section('content')

<div class="jumbotron">
    <h1 class="display-4">Add a comic</h1>
    <p class="lead">Add a comic to the site</p>
</div>

<form action="{{ route('admin.comics.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    @include('partials.errors')

    <div class="form-group">
      <label for="series">Series</label>
      <input type="text"
        class="form-control" name="series" id="series" aria-describedby="series-helper" placeholder="Series name">
      <small id="series-helper" class="form-text text-muted">Type the name of the series</small>
    </div>
    @error('series')
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

    <div class="form-group">
      <label for="author">Author</label>
      <input type="text"
        class="form-control" name="author" id="author" aria-describedby="author-helper" placeholder="Author">
      <small id="author-helper" class="form-text text-muted">Type the Author's name</small>
    </div>
    @error('author')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
      <label for="artist">Artist</label>
      <input type="text"
        class="form-control" name="artist" id="artist" aria-describedby="artist-helper" placeholder="Artist">
      <small id="artist-helper" class="form-text text-muted">Type the Artist's name</small>
    </div>
    @error('artist')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" name="description" id="description" rows="3"></textarea>
    </div>
    @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
      <label for="volume">Volume</label>
      <input type="number"
        class="form-control" name="volume" id="volume" aria-describedby="volume-helper" placeholder="Volume #">
      <small id="volume-helper" class="form-text text-muted">Enter the volume number</small>
    </div>
    @error('volume')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
      <label for="price">Price</label>
      <input type="text" class="form-control" name="price" id="price" aria-describedby="price-helper" placeholder="Price">
      <small id="price-helper" class="form-text text-muted">Type the price</small>
    </div>
    @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
      <label for="trim_size">Trim size</label>
      <input type="text" class="form-control" name="trim_size" id="trim_size" aria-describedby="trim_size-helper" placeholder="Trim size">
      <small id="trim_size-helper" class="form-text text-muted">Type the trim size</small>
    </div>
    @error('trim_size')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label for="sale_date">Sale date</label>
        <input type="date" name="sale_date" id="sale_date">
    </div>
    @error('sale_date')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
      <label for="page_count">Page count</label>
      <input type="number"
        class="form-control" name="page_count" id="page_count" aria-describedby="page_count-helper" placeholder="Number of pages">
      <small id="page_count-helper" class="form-text text-muted">Insert the number of pages</small>
    </div>
    @error('page_count')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
      <label for="rated">Rated for</label>
      <input type="text" class="form-control" name="rated" id="rated" aria-describedby="rated-helper" placeholder="Rated for">
      <small id="rated-helper" class="form-text text-muted">This comic is rated for</small>
    </div>
    @error('rated')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="available" id="available" value="1" checked>
        Available
      </label>
    </div>
    @error('available')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Add</button>
</form>

@endsection
