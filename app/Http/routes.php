<?php


Route::group(['middleware' => 'uninstalled'], function() {
    Route::get('/install', ['as' => 'install', 'uses' => 'InstallController@getInstallForm']);
    Route::post('/install', 'InstallController@processInstallForm');
});
