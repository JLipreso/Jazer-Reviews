<?php

namespace Jazer\Reviews\Http\Controllers\Fetch;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PaginateReport extends Controller
{
    public static function paginate(Request $request) {

        if((isset($request['where'])) && ($request['where'] !== null )) {
            return DB::connection("conn_reviews")->table("reviews_report")
            ->where([
                "project_refid"     => config('jtreviewsconfig.project_refid')
            ])
            ->where(json_decode($request['where']))
            ->orderBy("dataid", "desc")
            ->paginate(config('jtreviewsconfig.fetch_paginate_max'));
        }
        else {
            return DB::connection("conn_reviews")->table("reviews_report")
            ->where([
                "project_refid"     => config('jtreviewsconfig.project_refid')
            ])
            ->orderBy("dataid", "desc")
            ->paginate(config('jtreviewsconfig.fetch_paginate_max'));
        }
    }
}