<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\IndexController;
use App\Controllers\FinishController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class,"index"]
);
Route::post(
    '/',
    [IndexController::class, "post"]
);
Route::get(
    '/finish',
    [FinishController::class, "index"]
);
