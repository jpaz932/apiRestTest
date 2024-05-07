<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieStoreRequest;
use App\Http\Requests\MovieUpdateRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Movie::paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MovieStoreRequest $request)
    {
        $Movie = Movie::create($request->all());
        return response()->json($Movie, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        return $movie->load('category');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MovieUpdateRequest $request, Movie $Movie)
    {
        $Movie->update($request->all());
        return response()->json($Movie, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $Movie)
    {
        $Movie->delete();
        return response()->json(['deleted'=>true], 200);
    }
}