<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard/clients', function (Request $request) {
    return view('clients', [
        'clients' => $request->user()->clients
    ]);
})->middleware(['auth'])->name('dashboard.clients');
require __DIR__.'/auth.php';

// Route::get('/home', [HomeController::class, 'renderHome']);
// Route::get('/products/add', [ProductController::class, 'add']);
// Route::get('/products/edit', [ProductController::class, 'edit']);
// Route::get('/products/store', [ProductController::class, 'store']);


Route::get('/todo', [TodoController::class, 'index']);
Route::get('/todo/add', [TodoController::class, 'add']);
Route::get('/todo/edit', [TodoController::class, 'edit']);
Route::post('/todo/store', [TodoController::class, 'store']);

Route::get('/products', [TodoController::class, 'index1']);
Route::get('/products/add', [TodoController::class, 'add1']);
Route::get('/products/edit', [TodoController::class, 'edit1']);
Route::post('/products/store', [TodoController::class, 'store1']);

Route::get('/home', [HomeController::class, 'renderHome']);

// Route::get('/home', function () {
//     $menus = ["Home", "Product", "Category", "Blog"];
//     $title = "Awesome App";
//     $purchasedItems =["Book", "Pencil","Eraser"];
//     $favoriteItems = ["Calculator", "Bag"];
//     // return view("frontend.home" , compact("menus" , "title", " purchasedItems") );
//     return view("frontend.home", ["menus" =>$menus, "title" =>$title, "purchasedItems" =>$purchasedItems, "favoriteItems" =>$favoriteItems]);
// });
