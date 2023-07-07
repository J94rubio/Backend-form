<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
  Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});  
*/

Route::get("/form", [FormController::class,'read']);

Route::post("/form", [FormController::class,'create']);

Route::put("/form", [FormController::class,'update']);

Route::delete("/form", [FormController::class,'delete']);
