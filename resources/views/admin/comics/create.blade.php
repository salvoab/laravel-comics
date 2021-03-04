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
        class="form-control" name="series" id="series" aria-describedby="series-helper" placeholder="Series name" value="{{ old('series') }}">
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

    @if(count($authors) > 0)
      <div class="form-group">
        <label for="author_id">Author</label>
        <select class="form-control" name="author_id" id="author_id">
          @foreach($authors as $author)
            <option value="{{ $author->id }}" {{ $author->id == old('author_id') ? 'selected' : '' }} > 
              {{ $author->name . ' ' . $author->lastname }} 
            </option>
          @endforeach
        </select>
      </div>
    @endif

    @if(count($artists) > 0)
      <div class="form-group">
        <label for="artist_id">Artist</label>
        <select class="form-control" name="artist_ids[]" id="artist_ids" multiple>
          @foreach($artists as $artist)
            <option value="{{ $artist->id }}"> 
              {{ $artist->name . ' ' . $artist->lastname }} 
            </option>
          @endforeach
        </select>
      </div>
    @endif

    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" name="description" id="description" rows="3">{{ old('description') }}</textarea>
    </div>
    @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
      <label for="volume">Volume</label>
      <input type="number"
        class="form-control" name="volume" id="volume" aria-describedby="volume-helper" placeholder="Volume #" value="{{ old('volume') }}">
      <small id="volume-helper" class="form-text text-muted">Enter the volume number</small>
    </div>
    @error('volume')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
      <label for="price">Price</label>
      <input type="text" class="form-control" name="price" id="price" aria-describedby="price-helper" placeholder="Price" value="{{ old('price') }}">
      <small id="price-helper" class="form-text text-muted">Type the price</small>
    </div>
    @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
      <label for="trim_size">Trim size</label>
      <input type="text" class="form-control" name="trim_size" id="trim_size" aria-describedby="trim_size-helper" placeholder="Trim size" value="{{ old('trim_size') }}">
      <small id="trim_size-helper" class="form-text text-muted">Type the trim size</small>
    </div>
    @error('trim_size')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label for="sale_date">Sale date</label>
        <input type="date" name="sale_date" id="sale_date" value="{{ old('sale_date') }}">
    </div>
    @error('sale_date')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
      <label for="page_count">Page count</label>
      <input type="number"
        class="form-control" name="page_count" id="page_count" aria-describedby="page_count-helper" placeholder="Number of pages" value="{{ old('page_count') }}">
      <small id="page_count-helper" class="form-text text-muted">Insert the number of pages</small>
    </div>
    @error('page_count')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
      <label for="rated">Rated for</label>
      <input type="text" class="form-control" name="rated" id="rated" aria-describedby="rated-helper" placeholder="Rated for" value="{{ old('rated') }}">
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
