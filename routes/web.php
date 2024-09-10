<?php

use App\Http\Controllers\MessageController;
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

Route::get('/comments/morning', function () {
    return view('message.morning');
});

Route::get('/comments/afternoon', function () {
    return view('message.afternoon');
});

Route::get('/comments/evening', function () {
    return view('message.evening');
});

Route::get('/comments/night', function () {
    return view('message.night');
});

Route::get('/comments/freeword/{msg}', function ($msg) {
    return view('message.freeword', ['msg' => $msg]);
});

Route::get('/comments/random', [MessageController::class, 'random']);
