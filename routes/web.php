<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\DraftsmanController;


Route::get('/', [NavController::class, 'home']);
Route::get('/draftsman/{id}', [NavController::class,'draftsman']);

Route::post('/deleteCharacter', [CharacterController::class,'delete']);

Route::get('/updateCharacter/{id}', [NavController::class,'updateCharacter']);
Route::post('/updateCharacter', [CharacterController::class,'update']);

Route::get('/addCharacter', [NavController::class,'addCharacter']);
Route::post('/addCharacter', [CharacterController::class,'add']);


Route::get('/addDraftsman', [NavController::class, 'addDraftsman']);
Route::post('/addDraftsman', [DraftsmanController::class, 'add']);

Route::get('/updateDraftsman/{id}', [NavController::class,'updateDraftsman']);
Route::post('/updateDraftsman', [DraftsmanController::class,'update']);

Route::post('/deleteDraftsman', [DraftsmanController::class,'delete']);