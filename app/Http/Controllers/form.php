<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form extends Controller
{
    function getData(Request $req){
        $req->validate([
            'name' => 'required | max : 30',
            'age' => 'required | min:2 | max:2',
        ]);
        return $req->input();
 

        // echo 'data';

    }
}
