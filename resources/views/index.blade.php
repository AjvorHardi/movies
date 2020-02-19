@extends('layouts.master')

@section('content')
    <div class="container">
    @if ($movies)
        @foreach ($movies as $movie)
            <a href="movies/{{ $movie->id }}"><h3>{{ $movie->title }}</h3></a>
            <p>{{ $movie->storyline }}</p>
        @endforeach
    @endif
    </div>
@endsection