<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactController;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

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
// Route::get('experts', function () {
//     return view('expert-view');
// });

// Route::get('expert', function () {
//     return view('expert');
// });

Route::get('/', function () {
    return view('login');
})->name('login');


Route::post('sales', [ContactController::class, 'submit'])->name('sales-submit');

Route::get('sales', [ContactController::class, 'allData'])->name('sales-view');




Route::get('/sales/update/{id}', [ContactController::class, 'UpdatePage'])->name('sales-update-page');
Route::post('/sales/update/{id}', [ContactController::class, 'Update'])->name('sales-update-submit');


Route::get('/sales/delete/{id}', [ContactController::class, 'DeleteContact'])->name('sales-delete');
