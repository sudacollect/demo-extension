<?php

$controller_prefix = "\\App\\Extensions\\Startup\\Controllers\\";

//test page
Route::get('/test', $controller_prefix.'SiteController@index');
Route::get('/example', $controller_prefix.'Site\ExampleController@test');


Route::get('/ppt', $controller_prefix.'Site\ExampleController@ppt');