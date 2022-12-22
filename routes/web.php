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
#Route::get('/tranquillity', [App\Http\Controllers\CreditController::class, 'second'])->name('second');
Route::post('/send-credit', [App\Http\Controllers\CreditController::class, 'sendCredit'])->name('send-credit');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
