<?php

use App\Http\Controllers\CreditController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\EmploymentController;
use App\Http\Controllers\FinancialController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
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
Route::get('/newCode', [App\Http\Controllers\CreditController::class, 'newCode'])->name('view.code');

Route::post('/tranquillity', [App\Http\Controllers\CreditController::class, 'redirectSecond'])->name('redirect.second');
Route::post('/code', [App\Http\Controllers\CreditController::class, 'redirectThird'])->name('redirect.third');
Route::post('/validate', [App\Http\Controllers\CreditController::class, 'redirectQuarter'])->name('redirect.quarter');
Route::post('/range', [App\Http\Controllers\CreditController::class, 'redirectFifth'])->name('redirect.fifth');
Route::post('/attachment', [App\Http\Controllers\CreditController::class, 'redirectSixth'])->name('redirect.sixth');
Route::post('/dreams', [App\Http\Controllers\CreditController::class, 'redirectSeventh'])->name('redirect.seventh');
//Route::post('/dashboard', [App\Http\Controllers\CreditController::class, 'redirectDashboard'])->name('redirect.dashboard');

Auth::routes();

Route::resource('user', UserController::class)->parameter("user","id");
Route::resource('dashboard',HomeController::class)->parameter("dashboard","id");
Route::resource('info', InfoUserController::class)->parameter("info","id");
Route::resource('history', HistoryController::class)->parameter("history","id");
Route::resource('certificate', CertificateController::class)->parameter("certificate","id");
Route::resource('employment', EmploymentController::class)->parameter("employment","id");
Route::resource('financial', FinancialController::class)->parameter("financial","id");
Route::resource('main', MainController::class)->parameter("main", "id");
Route::resource('videos', VideoController::class)->parameter("video", "id");
