<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
    return view('home');
});

// Route::get('/', [MainController::class, 'home']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/crm/login-in', function () {
    return view('crm/login');
});

Route::get('/crm/signup', function () {
    return view('crm/signup');
});
Route::get('/crm/sales', function () {
    return view('crm/sales-view');
});

Route::get('/crm/experts', function () {
    return view('crm/expert-view');
});

Route::get('/crm/review', function () {
    return view('crm/expert');
});

Route::post('/crm/review/check', [MainController::class, 'review_check']);
