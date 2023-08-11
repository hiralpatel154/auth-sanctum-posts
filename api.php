<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Public Routes

Route::get('posts/{id}', [PostController::class, 'show']);
Route::get('posts',[PostController::class, 'index']);



Route::post('register',[UserController::class,'register']);
Route::post('login',[UserController::class,'loginUser']);

// Protected Routes
Route::group(['middleware' => 'auth:sanctum'],function(){
    Route::post('posts',[PostController::class, 'store']);
    Route::put('/posts/{id}', [ProductController::class, 'update']);
    Route::delete('/posts/{id}', [ProductController::class, 'destroy']);
    Route::get('user',[UserController::class,'userDetails']);
    Route::get('logout',[UserController::class,'logout']); 
});
