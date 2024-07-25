<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviewer;

class ReviewerController extends Controller
{
    public function show($id) {
        return Reviewer::with(['ratings.movies'])->findOrFail($id);
    }
}
