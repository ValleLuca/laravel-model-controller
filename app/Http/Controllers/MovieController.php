<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller
{
    public function index(){
        $risultati = Movie::all();
        return view('homepage', ['finale' => $risultati]);
    }
}
