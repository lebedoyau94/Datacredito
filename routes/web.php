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

Route::get('/', [App\Http\Controllers\CreditController::class, 'index1'])->name('view.index');
Route::get('/tranquillity', [App\Http\Controllers\CreditController::class, 'tranquillity'])->name('view.second');
Route::get('/code', [App\Http\Controllers\CreditController::class, 'viewCode'])->name('view.third');
Route::get('/validate', [App\Http\Controllers\CreditController::class, 'viewQuarter'])->name('view.quater');
Route::get('/range', [App\Http\Controllers\CreditController::class, 'viewValidateRange'])->name('view.fifth');
Route::get('/attachment', [App\Http\Controllers\CreditController::class, 'viewSixth'])->name('view.sixth');
Route::get('/sixth', [App\Http\Controllers\CreditController::class, 'sixth'])->name('sixth');
Route::get('/dreams', [App\Http\Controllers\CreditController::class, 'viewSeventh'])->name('view.seventh');

Route::post('/tranquillity', [App\Http\Controllers\CreditController::class, 'redirectSecond'])->name('redirect.second');
Route::post('/validate', [App\Http\Controllers\CreditController::class, 'redirectQuarter'])->name('redirect.quarter');
Route::post('/range', [App\Http\Controllers\CreditController::class, 'redirectFifth'])->name('redirect.fifth');
Route::post('/attachment', [App\Http\Controllers\CreditController::class, 'redirectSixth'])->name('redirect.sixth');
Route::post('/dreams', [App\Http\Controllers\CreditController::class, 'redirectSeventh'])->name('redirect.seventh');
Route::post('/dashboard', [App\Http\Controllers\CreditController::class, 'redirectDashboard'])->name('redirect.dashboard');

Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
