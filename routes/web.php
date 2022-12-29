<?php

use App\Http\Controllers\CreditController;
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

Route::get('/', [App\Http\Controllers\CreditController::class, 'index1'])->name('index');
//Route::get('/', [App\Http\Controllers\CreditController::class, 'index'])->name('index');
//Route::get('/third', [App\Http\Controllers\CreditController::class, 'third'])->name('third');
Route::get('/quarter', [App\Http\Controllers\CreditController::class, 'quarter'])->name('quarter');
Route::post('/quarter', [App\Http\Controllers\CreditController::class, 'quarter'])->name('quarter');

Route::post('/fifth', [App\Http\Controllers\CreditController::class, 'fifth'])->name('fifth');
Route::get('/fifth', [App\Http\Controllers\CreditController::class, 'fifth'])->name('fifth');

Route::get('/sixth', [App\Http\Controllers\CreditController::class, 'sixth'])->name('sixth');
Route::post('/sixth', [App\Http\Controllers\CreditController::class, 'sixth'])->name('sixth');

Route::get('/seventh', [App\Http\Controllers\CreditController::class, 'seventh'])->name('seventh');
Route::post('/seventh', [App\Http\Controllers\CreditController::class, 'seventh'])->name('seventh');

Route::post('/tranquillity', [App\Http\Controllers\CreditController::class, 'sendCredit'])->name('tranquillity');
Route::get('/tranquillity', [App\Http\Controllers\CreditController::class, 'tranquillity'])->name('tranquillity');

Route::get('/code', [App\Http\Controllers\CreditController::class, 'code'])->name('code');
Route::post('/code', [App\Http\Controllers\CreditController::class, 'storeCode'])->name('code');

Route::get('/validate', [App\Http\Controllers\CreditController::class, 'quarter'])->name('validate');
Route::post('/validate', [App\Http\Controllers\CreditController::class, 'validateCode'])->name('validate');

Route::get('/box', [App\Http\Controllers\CreditController::class, 'box'])->name('box');
Route::post('/box', [App\Http\Controllers\CreditController::class, 'validateBox'])->name('box');


Route::get('/dashboard', [App\Http\Controllers\CreditController::class, 'dashboard'])->name('dashboard');
Route::post('/dashboard', [App\Http\Controllers\CreditController::class, 'dashboard'])->name('dashboard');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
