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

Route::group(['domain' => config('app.url')], function () {
    Route::get(
        '/',
        function () {
            Route::controllers(
                [
                    'auth'     => 'Auth\AuthController',
                    'password' => 'Auth\PasswordController',
                ]
            );
        }
    );
});