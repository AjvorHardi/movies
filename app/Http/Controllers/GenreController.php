<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class GenreController extends Controller
{
    public function show($genre) {
        $movies = Movie::where('genre', $genre)->get();
        return view('index', compact(['movies']));
    }
}
