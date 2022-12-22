<?php

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

/*Route::get('/', function () {
    return view('index');
});

Route::get('/credit', function () {
    return view('credit');
});*/

Route::get('/', [App\Http\Controllers\CreditController::class, 'index'])->name('index');
Route::post('/send-credit', [App\Http\Controllers\CreditController::class, 'sendCredit'])->name('send-credit');
Route::get('/third', [App\Http\Controllers\CreditController::class, 'third'])->name('third');
Route::get('/quarter', [App\Http\Controllers\CreditController::class, 'quarter'])->name('quarter');
Route::get('/fifth', [App\Http\Controllers\CreditController::class, 'fifth'])->name('fifth');
Route::get('/sixth', [App\Http\Controllers\CreditController::class, 'sixth'])->name('sixth');
Route::get('/seventh', [App\Http\Controllers\CreditController::class, 'seventh'])->name('seventh');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
