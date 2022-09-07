<?php

use Illuminate\Support\Facades\Auth;
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
/*
Route::get('/', function () {
  return view('home');
})->name("home");
*/

Route::get('/','App\Http\Controllers\ProductController@index')->name("home");
//Route::get('productos/{id}','App\Http\Controllers\ProductController@show')->name("products.show");
Route::resource('productos','App\Http\Controllers\ProductController')
->parameters(['productos'=>'products'])
->names("products");

Route::resource('clientes','App\Http\Controllers\UserClientController')
->parameters(['clientes'=>'clients'])
->names("clients")
->middleware("auth");


Route::resource('direcciones','App\Http\Controllers\ClientDirectionController')
->parameters(['direcciones'=>'directions'])
->names("directions")
->middleware("auth");

Route::view('/contacto','contact')->name('contact');
Route::post('contacto', 'App\Http\Controllers\MessageController@store')->name('messages.store');

/*
Route::get('/registro', function () {
  return view('signin');
})->name("signin");

Route::get('/pedido', function () {
  return view('products.index');
})->name("products.index");

Route::get('/pedidoCheckIn', function () {
  return view('products.store');
})->name("products.store");

 Route::get('/clientes', function () {
  return view('clients.index');
})->name("clients");


*/



//Route::get('/contacto', 'ContactController')->name('contact');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
