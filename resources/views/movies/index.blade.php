@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<main>
    <h1>All movies</h1>
    <ul>
        @foreach ($movies as $movie)
        <li>
        <a href="#">{{ $movie->title }}</a>
        </li>
        @endforeach
    </ul>
</main>

@endsection
