<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    function showName(){


        // return 'Return from my new controller';

        return view('home');
    }
}
