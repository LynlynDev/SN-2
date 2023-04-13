<?php

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
Route::get('/region-create', function () { //le chemin d'accès qui s'affichera sur l'URL
    return view('formuaire_region'); //le nom du fichier blade dans lequel la route doit nous rediriger
});


Route::get("/region_create",[RegionController::class, "index"]);
Route::post("/region_store",[RegionController::class, "store"]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
