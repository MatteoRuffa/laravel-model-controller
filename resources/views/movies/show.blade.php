@extends('layouts.app')

@section('title', 'Books')

@section('content')
<main>
    <div class="container">
        <div class="p-2">
            <div class="card" style="width: 18rem; background-color: rgb(8, 8, 8); color: gray;">
                <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                <div class="card-body">
                    <h5 style="height: 70px;" class="card-title">{{ $movie->title }}</h5>
                    <p style="height: 200px; overflow: auto;" class="card-text">{!! $movie->getDetails() !!}</p>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection