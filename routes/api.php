<?php

use Illuminate\Support\Facades\Route;
use Jazer\Reviews\Http\Controllers\Create\Review;
use Jazer\Reviews\Http\Controllers\Update\UpdateReview;
use Jazer\Reviews\Http\Controllers\Fetch\Paginate;
use Jazer\Reviews\Http\Controllers\Create\Report;
use Jazer\Reviews\Http\Controllers\Update\UpdateOnReviewReport;
use Jazer\Reviews\Http\Controllers\Update\ResponseReport;
use Jazer\Reviews\Http\Controllers\Update\CloseReport;
use Jazer\Reviews\Http\Controllers\Fetch\PaginateReport;

Route::group(['prefix' => 'api'], function () {
    Route::group(['prefix' => 'reviews'], function () {     
         Route::post('createreview', [Review::class, 'create']);
         Route::post('updatecomment', [UpdateReview::class, 'update']);
         Route::get('paginatereview', [Paginate::class, 'paginate']);
    });
    Route::group(['prefix' => 'reports'], function () {     
         Route::post('createreport', [Report::class, 'create']);
         Route::post('onreviewreport', [UpdateOnReviewReport::class, 'updateonreview']);
         Route::post('responsereport', [ResponseReport::class, 'updateresponse']);
         Route::post('closereport', [CloseReport::class, 'reportdone']);
         Route::get('paginatereport', [PaginateReport::class, 'paginate']);
    });
});

