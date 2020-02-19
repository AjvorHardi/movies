@extends('layouts.master')

@section('content')
    <div class="container">
    
        <h1>{{ $movie->title }}</h1>

        <ul>
            <li>{{ $movie->director }} </li>
            <li>{{ $movie->genre }}</li>
            <li>{{ $movie->year }}</li>
            <p>{{ $movie->storyline }}</p>
        </ul>
    </div>
@endsection