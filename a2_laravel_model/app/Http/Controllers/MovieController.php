<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Movie;


class MovieController extends Controller
{
    public function index()
    {
        return view('index')->with('movies', Movie::all());
    }

    public function create()
    {
        return view('create');
    }

    public function store(StoreMovieRequest $request)
    {
        Movie::create($request->validated());
        return redirect('/movies')->with('success', "La pelicula ok.");
    }

    public function show(Movie $movie)
    {
        return view('show')->with('movie', $movie);
    }

    public function edit(Movie $movie)
    {
        return view('edit')->with('movie', $movie);
    }

    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        Movie::where('id', $movie->id)->update($request->validated());
        return redirect('/movies');
    }

    public function destroy(Movie $movie)
    {
        Movie::destroy($movie->id);
        return redirect('/movies')->with('success', "Se ha eliminado la pelicula");
    }
}
