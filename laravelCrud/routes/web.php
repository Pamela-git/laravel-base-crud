<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/devices', 'DeviceController@index') -> name('devices-index');
Route::get('/device/{id}', 'DeviceController@show') -> name('device-show');
Route::get('/adddevice', 'DeviceController@create') -> name('device-create');
Route::post('/newdevice', 'DeviceController@store') -> name('device-store');

Route::get('/braintree' , 'DeviceController@braintree') -> name('braintree-index');
Route::post('/checkout', 'DeviceController@checkout') -> name('braintree-checkout');
