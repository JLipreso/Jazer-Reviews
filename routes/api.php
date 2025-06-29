<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'api'], function () {
    Route::group(['prefix' => 'reviews'], function () {
        Route::post('test_call', function () {
            echo "Connected successfully";
        });
    });
});

