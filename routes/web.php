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

// Route::get('/', function () {
//     return view('general.main');
// });


Route::get('/', 'Admin\LandingPageController@index')->name('landing-page');
//product module
Route::get('product', 'ShopController@index')->name('shop.index');
Route::get('product/{product}', 'ShopController@show')->name('shop.show');

Route::get('cart', 'CartController@index')->name('cart.index');
Route::post('cart', 'CartController@store')->name('cart.store');

Route::get('destroy', function(){
	Cart::destroy();

	return redirect()->back();
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/coba', function(){
	$data = RajaOngkir::Cost([
	'origin' 		=> 501, // id kota asal
	'destination' 	=> 114, // id kota tujuan
	'weight' 		=> 1700, // berat satuan gram
	'courier' 		=> 'jne', // kode kurir pengantar ( jne / tiki / pos )
	])->get();
	dd($data);
});
