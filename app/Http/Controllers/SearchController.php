<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Actor;
use App\Models\User;
use App\Http\Controllers\MovieController;


class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $movies = Movie::all();
        $actors = Actor::all();


        $search = $request-> input('search');

        // $users= Searchy::driver('fuzzy')->users('name')->query('$search')->get();

        $movies = Movie::where('title','like',"%$search%")
            ->orWhere('genre','like', "%$search%")
            ->get();
        
        $actors = Actor::where('actor','like',"%$search%")
            ->get();

        //$results=view('movies/index',compact('search','movies','actors'));
        
        $results = compact('search', 'movies','actors');
    
        return view('movies/index', compact('search','movies','actors'));
    }
}
