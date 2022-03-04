<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller
{
    public function index(){
        $filmuno = Movie::where('id', 1)->get();
        return view('homepage', ['key' => $filmuno]);
    }
}
