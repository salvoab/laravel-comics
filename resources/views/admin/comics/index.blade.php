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
                <td><img class="preview_img" src="{{ asset('storage/' . $comic->cover) }}"></td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->volume }}</td>
                <td class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('admin.comics.show', ['comic'=> $comic->id]) }}" class="btn btn-primary"> <i class="fas fa-eye fa-lg fa-fw"></i> </a>
                    <a href="{{ route('admin.comics.edit', ['comic'=> $comic->id]) }}" class="btn btn-secondary"> <i class="fas fa-pen fa-lg fa-fw"></i> </a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-{{$comic->id}}">
                        <i class="fas fa-trash fa-lg fa-fw"></i>
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="delete-{{$comic->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitle-{{$comic->id}}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Are you sure to delete {{$comic->series . ' #' . $comic->volume}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                    Are you really sure that you want to delete the comic: <strong>{{$comic->series . ' #' . $comic->volume}}</strong>?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    
                                    <form action="{{ route('admin.comics.destroy', ['comic'=> $comic->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash fa-lg fa-fw"></i> Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
