<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController; 
use App\Http\Controllers\EventsController; 
use Illuminate\Support\Facades\Route;

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


Route::get('/about', [AboutController::class, 'index']);

Route::get('/services', [ServicesController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/events', [EventsController::class, 'index']);

