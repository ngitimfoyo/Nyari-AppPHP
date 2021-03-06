<?php

/*
 * |--------------------------------------------------------------------------
 * | Application Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register all of the routes for an application.
 * | It's a breeze. Simply tell Laravel the URIs it should respond to
 * | and give it the controller to call when that URI is requested.
 * |
 */
Route::get ( '/', function () {
	return View::make ( 'index' );
} );

// Status page
Route::group ( array (
		'prefix' => 'api' 
), function () {
	Route::resource ( 'kategori', 'KategoriController', array (
			'only' => array (
					'index',
					'store' 
			) 
	) );
	Route::resource ( 'pengguna', 'PenggunaController', array (
			'only' => array (
					'index',
					'store' 
			) 
	) );
	Route::resource ( 'spot', 'SpotController', array (
			'only' => array (
					'index',
					'store' 
			) 
	) );
} );