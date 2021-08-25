<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ThumbController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;
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

Route::get('/', [IndexController::class, 'index']);
Route::get('about', [IndexController::class, 'about']);
Route::get('tours', [IndexController::class, 'tours']);
Route::get('fleet', [IndexController::class, 'fleet']);
Route::get('booking', [BookingController::class, 'index']);
Route::get('flights', [IndexController::class, 'flights']);
Route::get('/detaliu-zbor/{url_slug}',[IndexController::class, 'flight_detail']);
Route::get('/tour-detail/{url_slug}',[IndexController::class, 'tour_detail']);
Route::get('contact', [ContactController::class, 'contact']);

Route::get('gallery', [IndexController::class, 'gallery']);

Route::post('send_contact', [ContactController::class, 'send_contact']);
Route::post('validate_part1', [BookingController::class, 'validate_part1']);
Route::post('validate_part2', [BookingController::class, 'validate_part2']);

Route::get('terms', [IndexController::class, 'terms']);
Route::get('policy', [IndexController::class, 'policy']);
Route::get('cookies', [IndexController::class, 'cookies']);

Route::post('/booking-service/{service}',[BookingController::class, 'booking_service']);



Route::get('locale/{locale}', function($locale) {
    \Session::put('locale', $locale);
    return redirect()->back();
  });

  Route::get('/storage/thumb/{query}/{file?}', [ThumbController::class,'index'])
    ->where([
        'query' => '[A-Za-z0-9\:\;\-]+',
        'file'  => '[A-Za-z0-9\/\.\-\_]+',
    ])
    ->name('thumb');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
