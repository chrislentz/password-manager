<?php


Route::get('/install/', ['as' => 'install', 'uses' => 'InstallController@getInstallForm']);
Route::post('/install/', 'InstallController@processInstallForm');
