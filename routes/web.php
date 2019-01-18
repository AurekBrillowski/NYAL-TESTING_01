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

Route::get('/', function () {
    return view('welcome');
});

Route::get('testing/installation_id_check', function () {
    return view('installation_id_check');
});

Route::get('testing/php_config_info', function () {
    return view('php_config_info');
});

Route::get('testing/test_connect', function () {
    return view('test_connect');
});