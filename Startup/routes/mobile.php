<?php

$controller_prefix = "\\App\\Extensions\\Startup\\Controllers\\";
//Route::get('/demo', $controller_prefix.'MobileController@index');


Route::get('/', $controller_prefix.'SiteController@index');
Route::get('/home', $controller_prefix.'SiteController@index');

