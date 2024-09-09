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
    return '<h1>朝のあいさつ</h1>
    <h2>おはようございます</h2>';
});

Route::get('/comments/afternoon', function () {
    return '<h1>昼のあいさつ</h1>
    <h2>こんにちは</h2>';
});

Route::get('/comments/evening', function () {
    return '<h1>夕方のあいさつ</h1>
    <h2>こんばんは</h2>';
});

Route::get('/comments/night', function () {
    return '<h1>夜のあいさつ</h1>
    <h2>おやすみ</h2>';
});

Route::get('/comments/freeword/{msg}', function ($msg) {
    return view('message.word', ['msg' => $msg]);
});

Route::get('/comments/random', function () {
    // 表示するメッセージを配列に格納
    $messages = [
        '<h1>ランダムなメッセージ</h1><h2>おはよう</h2>',
        '<h1>ランダムなメッセージ</h1><h2>こんにちは</h2>',
        '<h1>ランダムなメッセージ</h1><h2>こんばんは</h2>',
        '<h1>ランダムなメッセージ</h1><h2>おやすみ</h2>'
    ];

    // 配列からランダムに1つ選択
    $randomMessage = $messages[array_rand($messages)];

    // 選ばれたメッセージを返す
    return $randomMessage;
});
