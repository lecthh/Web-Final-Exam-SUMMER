<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;

class ActorController extends Controller
{
    public function show($id) {
        return Actor::with('movies')->findOrfail($id);
    }
}
