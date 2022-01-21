<?php

$extpath = 'startup';
$controller_prefix = "\\App\\Extensions\\Startup\\Controllers\\Admin\\";

Route::group([
    'as'         => 'startup.',
    'prefix'     => 'startup',
    
], function ($router) use ($extpath,$controller_prefix) {

    Route::get('index/{param?}', $controller_prefix.'HomeController@index');

    //设置页面
    Route::get('help', $controller_prefix.'HomeController@help');


    //职位分类
    Route::get('jobcate', $controller_prefix.'JobCateController@getList');

    Route::get('jobcate/add', $controller_prefix.'JobCateController@create');
    Route::get('jobcate/update/{id}', $controller_prefix.'JobCateController@update');
    Route::post('jobcate/save', $controller_prefix.'JobCateController@save');
    Route::post('jobcate/delete/{id}', $controller_prefix.'JobCateController@delete');

    Route::post('jobcate/editsort/{id}', $controller_prefix.'JobCateController@editSort');


});
