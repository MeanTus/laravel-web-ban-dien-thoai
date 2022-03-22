<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\BrandProduct;

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
Route::get('/logout', 'App\Http\Controllers\AdminController@logout');
Route::post('/admin-dashboard', 'App\Http\Controllers\AdminController@dashboard');

//Category Product
Route::get('/add-category-product', 'App\Http\Controllers\CategoryProduct@add_category_product');
Route::post('/update-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@update_category_product');
Route::get('/edit-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@delete_category_product');
Route::get('/all-category-product', 'App\Http\Controllers\CategoryProduct@all_category_product');
Route::post('/save-category-product', 'App\Http\Controllers\CategoryProduct@save_category_product');
Route::post('/export-csv', 'CategoryProduct@export_csv');
Route::post('/import-csv', 'CategoryProduct@import_csv');
Route::get('/unactive-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@active_category_product');

//Brand Product
Route::get('/add-brand-product', 'App\Http\Controllers\BrandProduct@add_brand_product');
Route::post('/update-brand-product/{brand}', 'App\Http\Controllers\BrandProduct@update_brand_product');
Route::get('/edit-brand-product/{brand}', 'App\Http\Controllers\BrandProduct@edit_brand_product');
Route::get('/delete-brand-product/{brand}', 'App\Http\Controllers\BrandProduct@delete_brand_product');
Route::get('/all-brand-product', 'App\Http\Controllers\BrandProduct@all_brand_product');
Route::post('/save-brand-product', 'App\Http\Controllers\BrandProduct@save_brand_product');
Route::post('/export-csv', 'BrandProduct@export_csv');
Route::post('/import-csv', 'BrandProduct@import_csv');
Route::get('/unactive-brand-product/{brand_product_id}', 'App\Http\Controllers\BrandProduct@unactive_brand_product');
Route::get('/active-brand-product/{brand_product_id}', 'App\Http\Controllers\BrandProduct@active_brand_product');

//Product
Route::get('/add-product', 'App\Http\Controllers\ProductController@add_product');

Route::post('/update-product/{product_id}', 'App\Http\Controllers\ProductController@update_product');

Route::get('/edit-product/{product_id}', 'App\Http\Controllers\ProductController@edit_product');

Route::get('/delete-product/{product_id}', 'App\Http\Controllers\ProductController@delete_product');

Route::get('/all-product', 'App\Http\Controllers\ProductController@all_product');

Route::post('/save-product', 'App\Http\Controllers\ProductController@save_product');

Route::post('/export-csv', 'ProductController@export_csv');

Route::post('/import-csv', 'ProductController@import_csv');

Route::get('/unactive-product/{product_id}', 'App\Http\Controllers\ProductController@unactive_product');

Route::get('/active-product/{product_id}', 'App\Http\Controllers\ProductController@active_product');
