@extends('layouts.dashboard')


@section('content')
    <div class="jumbotron">
        <h1 class="display-3">All articles</h1>
        <p class="lead">All the articles of the DC Universe</p>
        <a class="btn btn-primary" href="{{ route('admin.articles.create') }}" role="button">Write an article</a>
    </div>
    
    @if($articles == null)
        <h2>Unable to use the database, contact the DB manager</h2>
    @elseif(count($articles) > 0)
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created at</th>
                <th>Modified at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td class="body-preview">{{ $article->body }}</td>
                    <td>{{ $article->created_at }}</td>
                    <td>{{ $article->updated_at }}</td>
                    <td class="d-flex justify-content-between align-items-center"> 
                        <a class="btn btn-primary" href="{{ route('admin.articles.show', ['article' => $article->id]) }}">
                            <i class="fas fa-eye fa-lg fa-fw"></i> 
                        </a>
                        <a class="btn btn-secondary" href="{{ route('admin.articles.edit', ['article' => $article->id]) }}">
                            <i class="fas fa-pen fa-lg fa-fw"></i> 
                        </a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-modal-{{ $article->id }}">
                            <i class="fas fa-trash fa-lg fa-fw"></i> 
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="delete-modal-{{ $article->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitle-{{ $article->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Are you sure to delete this article?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you really sure to delete the article with<br>ID: {{ $article->id }} and Title: '{{ $article->title }}' ?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        
                                        <form action="{{ route('admin.articles.destroy', ['article' => $article->id]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash fa-lg fa-fw"></i>Delete</button>
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
    @else
        <h2>Non ci sono articoli nel blog</h2>
        <p class="lead">Prima di scrivere un articolo si consiglia di visionare le categorie per accertarsi di avere una categoria da associare all'articolo</p>
    @endif

@endsection