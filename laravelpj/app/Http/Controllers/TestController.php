<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $animals = ["cat","dog","pig"];
        return view("hello.index",compact("animals"));
    }
}
