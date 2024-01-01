<?php

use App\Http\Controllers\ContactController;
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
Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/admin', function () {
    return view('backend.dashboard');
});

Route::get('/login', function () {
    return view('backend.login');
});
Route::get('/contact',[ContactController::class,'contact']);
Route::post('/send',[ContactController::class,'store']);
Route::get('/contactlist',[ContactController::class,'contactlist']);
