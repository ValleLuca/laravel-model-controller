<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller
{
    public function index(){
        $prova = Movie::all();
        return view('homepage', ['key' => $prova]);
    }
}
