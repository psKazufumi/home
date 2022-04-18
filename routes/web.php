<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

// Route::get('/', [PostController::class, 'index']);
Route::get('/', [function() 
{
    return view('index');
}]);

Route::get('/event', [function () {
    return view('event');
}]);

Route::get('/member', [function () {
    return view('member');
}]);

Route::get('/about', [function () {
    return view('about');
}]);

Route::get('/contact', [function () {
    return view('contact');
}]);

Route::get('/past', [function () {
    return view('past/past');
}]);

Route::get('/now', [function () {
    return view('now/now');
}]);

Route::get('/future', [function () {
    return view('future/future');
}]);

Route::get('/osaka', [function () {
    return view('place/osaka');
}]);

Route::get('/kyoto', [function () {
    return view('place/kyoto');
}]);

Route::get('/hyogo', [function () {
    return view('place/hyogo');
}]);

Route::get('/online', [function () {
    return view('place/online');
}]);

Route::get('/past.curry', [function () {
    return view('past/curry');
}]);

Route::get('/past.online', [function () {
    return view('past/online');
}]);

Route::get('/past.christmas', [function () {
    return view('past/christmas');
}]);

Route::get('/past.atsukihitoyo', [function () {
    return view('past/atsukihitoyo');
}]);

Route::get('/now.joinus', [function () {
    return view('now/joinus');
}]);

Route::get('/now.drink', [function () {
    return view('now/drink');
}]);

Route::get('/now.furugi', [function () {
    return view('now/furugi');
}]);