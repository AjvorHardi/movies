<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Http\Requests\MovieRequest;

class MovieController extends Controller
{
    public function index() {
        $movies = Movie::all();
        return view('index', compact('movies'));
    }

    public function show($id) {
        $movie = Movie::with('comments')->find($id);
        return view('show', compact('movie'));
    }

    public function create() {
        return view('create');
    }

    public function store(MovieRequest $request) {
        Movie::create($request->all());
        return redirect('/movies');
    }
}
