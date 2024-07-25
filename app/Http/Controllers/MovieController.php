<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index() {
        return Movie::with(['directors', 'actors', 'genres', 'ratings.reviewer'])->get();
    }

    public function show($id) {
        return Movie::with(['directors', 'actors', 'genres', 'ratings.reviewer'])->findOrFail($id);
    }

    public function getAllMoviesWithGenres() {
        return Movie::with('genres')->get();
    }

    public function getAllMoviesWithRatings() {
        return Movie::with('ratings.reviewer')->get();
    }
}
