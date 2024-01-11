<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/categories' , function (Request $request) {
    return "Get all Categories";
});
Route::post('/categories' , function (Request $request) {
    return "Create 1 Category";
});
Route::patch('/categories' , function (Request $request){
    return "Update 1 Category";
});
Route::delete('/categories' , function (Request $request) {
    return "Delete 1 Category";
});

Route::get('/products', [ProductController::class, 'index']);

Route::post('/products', [ProductController::class, 'store']);