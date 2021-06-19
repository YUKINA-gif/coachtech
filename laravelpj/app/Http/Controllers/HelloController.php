<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return view("hello.index", ["content" => "自由に入力してください",]);
    }
    public function post(Request $request)
    {
        $content = $request->content;
        return view("hello.index", ["content" => $content . "と入力しましたね"]);
    }
}