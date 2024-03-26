<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TodoController extends Controller
{
    public function index() {
        $todos = Todo::all();
        return view("todo.index", compact('todos'));
    }
    public function add() {
        $todos = Todo::all();
        return view("todo.form1", compact('todos'));
    }
    public function edit() {
        return view("todo.form1");
    }
    public function store(Request $request) {
        // dd($request->all());
        $todo = new Todo();

        //3. save todo object
        
        $todo->task = $request->get('task');
        $todo->description = $request->get('description');

        $todo->save();
        $image_location = null;
        //1. save file to storage
        $image_location = Storage::putFile('public/'.$todo->id, $request->file('image'));

        //2. get file location, apply to todo object
        $todo->image_url = $image_location;
        $todo->save();
        return redirect("/todo");
    }

    public function index1() {
        $products = Product::all();
        return view("products.index", compact('products'));
    }
    public function add1() {
        $products = Product::all();
        return view("products.form", compact('products'));
    }
    public function edit1() {
        return view("products.form");
    }
    public function store1(Request $request) {
        // dd($request->all());
        $products = new Product();

        //3. save todo object
        
        $products->name = $request->get('name');
        $products->pricing = $request->get('pricing');
        $products->promotion = $request->get('promotion');
        $products->category = $request->get('category');
        $products->description = $request->get('description');

        $products->save();
        $image_location = null;
        //1. save file to storage
        $image_location = Storage::putFile('public/products/'.$products->id, $request->file('image'));

        //2. get file location, apply to todo object
        $products->image_url = $image_location;
        $products->save();
        return redirect("/products");
    }
}