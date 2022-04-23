<?php

use App\Http\Controllers\GithubDeploymentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/properties', [App\Http\Controllers\Properties\PropertyController::class, 'index'])
    ->name('properties');
Route::get('/property/{id}/detail', [App\Http\Controllers\Properties\PropertyController::class, 'show'])
    ->name('property.view');

Route::get('/locations', [App\Http\Controllers\HomeController::class, 'locations'])->name('locations');

Route::get('/about', static function () {
    return view('home.about');
});

Route::get('/terms', static function () {
    return view('home.terms');
});

Route::get('/privacy', static function () {
    return view('home.privacy-policy');
});

Route::get('/contact', static function () {
    return view('home.contact');
});

// Authentication
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])
    ->name('register.form');
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])
    ->name('login.form');

// User Account
Route::get('/user', [App\Http\Controllers\UserAccountController::class, 'index'])
    ->name('user.dashboard');

// Users SPA
Route::get('/user/{any}', static function () {
    return view('users.index');
})->where('any', '.*');

Route::post('/github/deploy', [GithubDeploymentController::class, 'deploy']);
