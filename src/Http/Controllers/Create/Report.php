<?php

namespace Jazer\Reviews\Http\Controllers\Create;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Report extends Controller
{
    public static function create(Request $request) {
        /**
         * CODE: RVR
         * This function create report
         */
        if($request['report_comment'] == '') {
            return [
                "success"   => false,
                "message"   => "Comment looks empty, please check."
            ];
        }
        else {
            $submitted = DB::connection("conn_reviews")->table("reviews_report")->insert([
                "project_refid"       => config('jtreviewsconfig.project_refid'),
                "review_refid"        => \Jazer\Forms\Http\Controllers\Utility\ReferenceID::create('RVR'),
                "report_comment"      => $request['report_comment'],
                "report_at"           => Carbon::now(),
                "report_by"           => $request['report_by']                               
            ]);

            if($submitted) {
                return [
                    "success"   => true,
                    "message"   => "Successfully Created"
                ];
            }
            else {
                return [
                    "success"   => false,
                    "message"   => "Fail to create report"
                ];
            }
        }
    }
}