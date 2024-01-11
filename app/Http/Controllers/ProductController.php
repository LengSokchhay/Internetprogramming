<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->input('name');
        $product->category_id = $request->input('category_id');
        $product->pricing = $request->input('pricing'); // Assuming pricing is part of the request
        $product->description = $request->input('description'); // Assuming description is part of the request
        $product->images = $request->input('images'); // Assuming images is part of the request
        // Add more fields as needed
        $product->save();
    
        return "Product created successfully";
    }
}
