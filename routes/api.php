<?php
use Illuminate\Support\Facades\Route;


Route::namespace('Auth')->group(function(){
	Route::post('/register','RegisterController');
	Route::post('/login','LoginController');
	Route::post('/logout','LogoutController');
});


Route::namespace('Pinjaman')->middleware(['auth:api','authMiddleware'])->group(function(){

Route::group(['roles'=>'1'],function(){
 	Route::post('create_pinjaman','PinjamanController@store');
	Route::get('get_all_pinjaman','PinjamanController@index');
	Route::patch('pengembalian/{id}','PinjamanController@update');
	Route::get('pinjamen/{pinjaman}','PinjamanController@show');
 });
Route::group(['roles'=>'2'],function(){
 	
	
	Route::get('get_pinjaman/{id}','PinjamanController@show');
 });
	

	
});


Route::get('user','UserController');
