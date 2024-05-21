@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<main>
    <div class="container">
        <h1 class="my-4">Movies</h1>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-md-4 p-2">
                    <div class="card" style="width: 18rem; background-color: rgb(8, 8, 8); color: gray;">
                        <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                        <div class="card-body">
                            <h5 style="height: 70px;" class="card-title">{{ $movie->title }}</h5>
                            <a href="{{ url('/movies', $movie->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>

@endsection
