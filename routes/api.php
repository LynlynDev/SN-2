<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\REST\RegionController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\REST\EntiteController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

            //PARTICIPANT
Route::apiResource('participant', ParticipantController::class);
Route::get("onoff/{id_participant}", [ParticipantController::class,"onoff"]);


Route::apiResource('regionModel', RegionController::class);

Route::apiResource('entite', EntiteController::class);