@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<main>
    <div class="container">
        <h1 class="my-4 text-center text-uppercase">Movies</h1>
        <div class="row" id="row-movie">
            @foreach ($movies as $movie)
                <div class="col-md-3 p-2">
                    <div class="card">
                        <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                        <div class="card-body  text-center ">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <a href="{{ url('/movies', $movie->id) }}" class="btn btn-secondary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>

@endsection
