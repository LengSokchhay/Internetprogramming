<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    $name = session('name');
    $id = session()->getId();
    $token = session('token');

    if($name) {
        return view('welcome', compact('name'), compact('id'));
    }
    else {
        session(
            ['name' => 'Sokchhay'],
            ['token' => 'VBZDrCyECl8bWa']
    );
        return view('welcome');
    }   
});

