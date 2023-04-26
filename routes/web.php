<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductAjaxController;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/everja', function () {
    return view('everja');
});
Route::get('/customer', function () {
    return view('customer');
});
Route::get('/login', function () {
    return view('login');
});

  
  
  
Route::resource('products-ajax-crud', ProductAjaxController::class);

