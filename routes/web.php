<?php

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
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\productoController;

Route::get('/', function () {
	return redirect('/home');
});


//Route::get('/home', 'MainController@home')->name('home');
Route::get('/home', [MainController::class, 'home'])->name('home');
Route::resource('producto', productoController::class);