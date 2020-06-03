<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'guest:api'], function () {
    Route::post('login', 'Auth\LoginController@index')->name('login');
    Route::post('register', 'Auth\RegisterController@register');
});


Route::group(['middleware' => 'auth:sanctum'], function () {

    Route::get('/test', function (Request $request) {

        $user = $request->user();

        if ($user->tokenCan('server:update')) {
            dd('can');
        }else {
            dd('stop');
        }
    });

});