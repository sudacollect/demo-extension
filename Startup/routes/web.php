<?php

$controller_prefix = "\\App\\Extensions\\Startup\\Controllers\\";

//测试路由
Route::get('/home', $controller_prefix.'Site\CardHomeController@index');
Route::get('/', $controller_prefix.'Site\CardHomeController@index');


