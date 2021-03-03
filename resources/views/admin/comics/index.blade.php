@extends('layouts.dashboard')

@section('content')

    <div class="jumbotron">
        <h1 class="display-4">All Comics</h1>
        <a class="btn btn-primary btn-lg" href="{{ route('admin.comics.create') }}" role="button">Add a comic</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cover</th>
                <th>Series</th>
                <th>Volume</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comics as $comic)
            <tr>
                <td scope="row">{{ $comic->id }}</td>
                <td><img class="preview-img" src="{{ asset('storage/' . $comic->cover) }}"></td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->volume }}</td>
                <td class="d-flex justify-content-between">
                    <a href="{{ route('admin.comics.show', ['comic'=> $comic->id]) }}" class="btn btn-primary"> <i class="fas fa-eye fa-xs fa-fw"></i> </a>
                    <a href="{{ route('admin.comic.edit', ['comic'=> $comic->id]) }}" class="btn btn-secondary"> <i class="fas fa-pen fa-xs fa-fw"></i> </a>
                    <a href="#" class="btn btn-danger"> <i class="fas fa-trash fa-xs fa-fw"></i> </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
