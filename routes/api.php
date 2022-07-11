<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Middleware + sanctum para somente quem é autenticado acessar aos favoritos
Route::group(['middleware' => 'auth:sanctum'], function () {
    //comics
    Route::delete('/comic/{comic}', [ComicController::class, 'destroy']);
    Route::get('/comic', [ComicController::class, 'index']);
    Route::post('/comic', [ComicController::class, 'store']);


    //characters
    Route::delete('/character/{character}', [CharacterController::class, 'destroy']);
    Route::get('/character', [CharacterController::class, 'index']);
    Route::post('/character', [CharacterController::class, 'store']);
});


Route::post('/login', [UserController::class, 'login']);
Route::post('/user', [UserController::class, 'store']);
