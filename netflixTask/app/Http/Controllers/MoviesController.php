<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Requests\StoreMovieRequest;
use Illuminate\Http\Request;
use App\Models\Genre;
use Illuminate\Support\Facades\DB;

class MoviesController extends Controller
{
    public function index()
    {


        $movies = Movie::all();
        return view('movies.index', compact('movies'));

    }

    public function create()
    {

        $genres = Genre::all();
        return view('movies.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMovieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'movie_name' => 'required',
            'movie_description' => 'required',
        ]);
        if ($image = $request->file('movie_img')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $image = "$profileImage";
        }


        Movie::create([
            'movie_name' => $request->movie_name,
            'movie_description' => $request->movie_description,
            'movie_img' => $image,
            'movie_gener' => $request->genre_id,


        ]);
        return redirect('/movies')->with(['message' => 'create was successful']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {

        return view('movies.edit', compact('movie'));
        return redirect('/movies')->with(['message' => 'Edit was successful']);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMovieRequest  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'movie_name' => 'required',
            'movie_description' => 'required',

        ]);
        if ($image = $request->file('movie_img')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $image = "$profileImage";
        } else {
            
        }

        $movie->update([
            'movie_name' => $request->movie_name,
            'movie_description' => $request->movie_description ,
            'movie_img' => $image,
            // 'movie_gener' => $movie->genre->genre_name,
            'genre_name' => $request->genre_id


        ]);
        return redirect('/movies')->with(['message' => 'edit was successful']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->deleteOrFail();
        return redirect('/movies')->with(['message' => 'Delete was successful']);

    }
}




