<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LotController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/auctions', [HomeController::class, 'showAuctions'])->name('all-auctions');
Route::get('/bids', [HomeController::class, 'showBids'])->name('all-bids');

Route::resource('products',LotController::class);
