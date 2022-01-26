<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\form;

Route::get('/', function () {
    return view('welcome');
    // return redirect('home');
});


// Route::get('/home/{id}', function ($id =null) {
//     return view('home', ['id'=>$id]);
// });

Route::view('home','home');

Route::get('mypath', [user::class , 'showName']);



Route::get('/user', function () {
    $users  = ['name'=>'kanha','age' => '24' , 'doy' => 1997];
    return view('users', ['users'=>$users]);
});

Route::view('login', 'form');

Route::post('form', [form::class , 'getData']);

Route::view('noaccess', 'noaccess');
// Route::post( '/page-name', [form::class, 'getData']);
