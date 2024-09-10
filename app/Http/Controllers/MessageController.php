<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function random()
    {
        $messages = [
            'おはよう',
            'こんにちは',
            'こんばんは',
            'おやすみ'
        ];

        // 配列からランダムに1つ選択
        $randomMessage = $messages[array_rand($messages)];

        // 選ばれたメッセージを返す
        return view('message.random', ['randomMessage' => $randomMessage]);
    }
}
