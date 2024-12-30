<?php

use App\Http\Controllers\Api\EventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('/events', [EventController::class, 'index']);

Route::post('/events', [EventController::class, 'store']);

Route::get('/events/{eventID}', [EventController::class, 'show']);