<?php

Route::get('/', function() {
    return redirect()->route('sign-in');
});

Route::group(['middleware' => 'uninstalled'], function() {
    Route::get('/install', ['as' => 'install', 'uses' => 'InstallController@getInstallForm']);
    Route::post('/install', 'InstallController@processInstallForm');
});

Route::group(['middleware' => 'guest'], function() {
    Route::get('/sign-in', ['as' => 'sign-in', 'uses' => 'AuthController@getSignInForm']);
    Route::post('/sign-in', ['uses' => 'AuthController@processSignInForm']);
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/sign-out', ['as' => 'sign-out', 'uses' => 'AuthController@signOut']);

    Route::get('/dashboard', ['middleware' => 'auth', 'as' => 'dashboard', function () {
        return view('dashboard');
    }]);
});
