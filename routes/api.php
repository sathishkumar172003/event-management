<?php

use App\Http\Controllers\Api\AttendeeController;
use App\Http\Controllers\Api\EventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


// EVENTS 
Route::get('/events', [EventController::class, 'index']);

Route::post('/events', [EventController::class, 'store']);

Route::get('/events/{event}', [EventController::class, 'show']);

Route::match(['PUT', 'PATCH'], '/events/{event}',[EventController::class, 'update']);

Route::delete('/events/{event}', [EventController::class, 'destroy']);


// ATTENDEES 

Route::get('/events/{event}/attendees/', [AttendeeController::class, 'index']);

Route::get('/events/{event}/attendees/{attendee}', [AttendeeController::class, 'show']);

Route::post('/events/{event}/attendees/',[AttendeeController::class, 'store']);

Route::delete('/events/{event}/attendees/{attendee}', [AttendeeController::class, 'destroy']);
