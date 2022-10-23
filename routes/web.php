<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurrencyController;
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
Auth::routes();

Route::get('/', [CurrencyController::class, 'currency'])->name('currency');
Route::post('/currency/post', [CurrencyController::class, 'currency_post'])->name('currency.post');
