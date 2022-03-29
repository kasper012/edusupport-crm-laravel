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
    return view('login');
});

// Route::get('/', [MainController::class, 'home']);

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('login', function () {
    return view('login');
});

Route::get('signup', function () {
    return view('signup');
});


Route::get('sales', function () {
    return view('sales-view');
});

Route::get('sales-add', function () {
    return view('sales-create-form');
});


Route::get('experts', function () {
    return view('expert-view');
});

Route::get('review', function () {
    return view('expert');
});

Route::post('/crm/review/check', [MainController::class, 'review_check']);
