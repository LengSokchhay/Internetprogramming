<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
// use App\Http\Controllers\AuthController1;

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

// -- Category api urls
Route::get('/categories', [CategoryController::class, 'getCategories']);
Route::post('/categories', [CategoryController::class, 'createCategory']);
Route::get('/categories/{categoryId}', [CategoryController::class, 'getCategory']);
Route::patch('/categories/{categoryId}', [CategoryController::class, 'updateCategory']);
Route::delete('/categories/{categoryId}', [CategoryController::class, 'deleteCategory']);
Route::get('/categories/{categoryId}/products', [CategoryController::class, 'getProductsOfCategory']);

// -- Product api urls
Route::get('/products', [ProductController::class, 'getProducts']);
Route::post('/products', [ProductController::class, 'createProduct']);
Route::get('/products/{productId}', [ProductController::class, 'getProduct']);
Route::patch('/products/{productId}', [ProductController::class, 'updateProduct']);
Route::delete('/products/{productId}', [ProductController::class, 'deleteProduct']);

// -- Authentication api urls
Route::middleware('auth:api')->get('/user',function (Request $request){
    return $request->user();
});

Route::post('/register', [AuthenticationController::class, 'register']);
// Login
Route::post('/login', [AuthenticationController::class, 'login']);

Route::get('/verify-otp', [AuthenticationController::class, 'verifyOTP'])->name('verify.otp');
Route::middleware('auth:api')->get('/profile', [AuthenticationController::class, 'getProfile']);

Route::middleware('authorizer')->post('/profile', [AuthenticationController::class, 'getProfile']);

Route::post('/login1', [AuthenticationController::class, 'login1']);

// Route::group([

//     'middleware' => 'api',
//     'prefix' => 'auth'

// ], function ($router) {

//     Route::post('login', [AuthController1::class, 'login']);
//     Route::post('logout', 'AuthController@logout');
//     Route::post('refresh', 'AuthController@refresh');
//     Route::post('me', 'AuthController@me');

// });