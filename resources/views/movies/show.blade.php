@extends('layouts.app')

@section('title', 'Books')

@section('content')
<main>
    <h1>{{ $movie->title }}</h1> 
    <p>{{$movie->original_title}}</p>
</main>

@endsection