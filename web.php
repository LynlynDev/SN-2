<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Regioncontroller;

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


Route::get("/region_create" , [Regioncontroller::class,"index"]);
Route::post("/region_insert" , [Regioncontroller::class,"store"]);