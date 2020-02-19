@extends('layouts.master')

@section('content')
    <div class="container">
    <br>
    <h3>Add a movie</h3>
    <br>
    <form method="POST" action="{{ route('movie-create') }}">

        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title"/>

        </div>

        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre"/>
            
        </div>

        <div class="form-group">
            <label for="director">Director</label>
            <input type="text" class="form-control" id="director" name="director"/>
            
        </div>

        <div class="form-group">
            <label for="year">Year</label>
            <input type="number" class="form-control" id="year" name="year"/>
            
        </div>

        <div class="form-group">
            <label for="storyline">Storyline</label>
            <input type="text" class="form-control" id="storyline" name="storyline"/>
            
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Add movie</button>
        </div>

    </form>

    </div>
@endsection