<?php

use App\Http\Controllers\Properties\PropertyController;
use App\Http\Controllers\UserAccountController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

// Sanctum middleware group
Route::middleware('auth:sanctum')->group(function (){

    // User Auth API
    Route::get('/user/authenticate', static function (Request $request) {
        return $request->user();
    });

    Route::get('/user/account', [UserAccountController::class, 'getProfile']);
    Route::post('/user/property/submit', [UserAccountController::class, 'submitProperty']);
    Route::get('/user/properties', [UserAccountController::class, 'myProperties']);
    Route::get('/user/property/{id}/edit', [UserAccountController::class, 'myPropertyEdit']);
    Route::post('/user/property/{id}/update', [UserAccountController::class, 'myPropertyUpdate']);
    Route::delete('/user/property/{id}/delete', [UserAccountController::class, 'deleteProperty']);
});

// Login
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
// Register
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

// Properties
Route::get('/states', [PropertyController::class, 'getStates']);
Route::get('/countries', [PropertyController::class, 'getCountries']);
Route::get('/property/types', [PropertyController::class, 'getPropertyTypes']);
