@extends('layouts.app')

@section('title', 'Books')

@section('content')
<main>
    <div class="container">
        <div class="p-2" id="card-movie">
            <div class="card">
                <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                <div class="card-body">
                    <h5 style="" class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">{!! $movie->getDetails() !!}</p>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection