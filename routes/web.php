<?php

use App\Http\Controllers\OAuthController;
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
Route::get('/oauth/redirect', [OAuthController::class,'redirect']);
Route::get('/oauth/callback', [OAuthController::class,'callback']);
Route::get('/oauth/refresh', [OAuthController::class,'refresh']);
