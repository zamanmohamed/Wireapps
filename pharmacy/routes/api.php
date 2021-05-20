<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\CashiersController;
use App\Http\Controllers\ManagerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//owner
Route::post("/insertmedicine",[OwnerController::class,'insertmedicine']);
Route::post("/insertcutomer",[OwnerController::class,'insertcutomer']);

//Cashiers
Route::put("/updatemedicine",[CashiersController::class,'updatemedicine']);
Route::delete("/deletemedicine/{id}",[CashiersController::class,'deletemedicine']);

//Manager
Route::put("/updatecustomer",[ManagerController::class,'updatecustomer']);
Route::delete("/deletecustomer/{id}",[ManagerController::class,'deletecustomer']);