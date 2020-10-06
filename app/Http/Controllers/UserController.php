<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


//Responsible for handling requests 
//associated with the movie model

class UserController extends Controller
{
    public function create(){
        return view('users/create');
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            ,
            'description' => 'required|min:10'
        ]);

        $movie = Movie::create($input);

        return redirect($movie->url());
    }

}