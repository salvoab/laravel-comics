@extends('layouts.app')

@section('content')

<img src="{{ asset('storage/' . $comic->cover) }}" alt="$comic->title">

@endsection