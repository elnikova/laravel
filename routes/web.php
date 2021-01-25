<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\NewsController;

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
    return view('welcome');
});*/

/*Route::get('/', 'MainController@index'); - до 8 версии*/

Route::get('/', [MainController::class, 'index']);
Route::get('/contacts', [MainController::class, 'contacts']);
Route::post('/contacts', [MainController::class, 'getContacts']);
Route::get('/reviews', [ReviewController::class, 'reviews']);
Route::post('/reviews', [ReviewController::class, 'reviewForm']);
Route::get('/sale', [StoreController::class, 'sale']);
Route::get('/news', [NewsController::class, 'news']);