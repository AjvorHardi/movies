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
    <aside class="col-sm-3 ml-sm-auto blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        @foreach($latest_movies as $latest_movie)
            <a href="/movies/{{ $latest_movie->id }}"><h4>{{ $latest_movie->title }}</h4></a>
        @endforeach
    </div>
    </aside>

    
@endsection
