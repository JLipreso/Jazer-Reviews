<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'api'], function () {
    Route::group(['prefix' => 'reviews'], function () {
        Route::get('test_call', function () {
            return [
                "success"   => true,
                "message"   => "Connected successfully"
            ];
        });
    });
});

