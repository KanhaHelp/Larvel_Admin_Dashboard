<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form extends Controller
{
    function getData(Request $req){
        $req->validate([
            'name' => 'required | max :10',
            'age' => 'required | min:5',
        ]);
        return $req->input();
 

        // echo 'data';

    }
}
