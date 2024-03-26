<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Response;


class HomeController extends Controller
{
    public function renderHome(){
        $products = Product::all();
        return view('homepage', compact( 'products'));
    }
}
