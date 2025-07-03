<?php

namespace Jazer\Reviews\Http\Controllers\Create;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Review extends Controller
{
    public static function create(Request $request) {

         /**
         * Task 1:
         * CODE: RVW
         * This function review report
         */
        if($request['review_type'] == '') {
            return [
                "success"   => false,
                "message"   => "Review type is required."
            ];
        }
        else if($request['target_refid'] == '') {
            return [
                "success"   => false,
                "message"   => "No parent target reference"
            ];
        }
        else if($request['comment'] == '') {
            return [
                "success"   => false,
                "message"   => "Comment looks empty, please check."
            ];
        }
        else {
            $submitted = DB::connection("conn_reviews")->table("reviews")->insert([
                "project_refid"       => config('jtreviewsconfig.project_refid'),
                "reference_id"        => \Jazer\Forms\Http\Controllers\Utility\ReferenceID::create('RVW'),
                "review_type"         => $request['review_type'],
                "target_refid"        => $request['target_refid'],
                "comment"             => $request['comment'],
                "created_at"          => Carbon::now(),
                "created_by"          => $request['created_by']                               
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
                    "message"   => "Fail to create review"
                ];
            }
        }
    }
}