<?php

use App\Http\Controllers\BidController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LotController;
use App\Models\Bid;
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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user/lots', [HomeController::class, 'showUserLots'])->name('my-lots');
Route::get('/user/bids', [HomeController::class, 'showUserBids'])->name('user-bids');
Route::get('/bids', [HomeController::class, 'showBids'])->name('all-bids');

Route::resource('lots',LotController::class);

Route::post('/lots/{id}/bid', [BidController::class, 'makeBid'])->name('makeBid');
Route::post('/lots/{id}/deleteBid', [BidController::class, 'deleteBid'])->name('deleteBid');

Auth::routes();

