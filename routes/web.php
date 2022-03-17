<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
// Route::get('/trang-chu',[HomeController::class, 'index']);
// Route::get('/', 'HomeController@index');
// Route::get('/trang-chu','HomeController@index');

Route::get('/', [HomeController::class, 'index']);
Route::get('/trang-chu', 'App\Http\Controllers\HomeController@index');
///admin
Route::get('/', [AdminController::class, 'index']);
Route::get('/admin', 'App\Http\Controllers\AdminController@index');
Route::get('/dashboard', 'App\Http\Controllers\AdminController@show_dashboard');
Route::post('/admin-dashboard', 'App\Http\Controllers\AdminController@dashboard');
