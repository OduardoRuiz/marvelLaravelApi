<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\ComicController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//comics
Route::post('/comic', [ComicController::class, 'store']);
Route::delete('/comic/{comic}', [ComicController::class, 'destroy']);
Route::get('/comic', [ComicController::class, 'index']);


//character
Route::post('/character', [CharacterController::class, 'store']);
Route::delete('/character/{character}', [CharacterController::class, 'destroy']);
Route::get('/character', [CharacterController::class, 'index']);
