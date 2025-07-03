<?php

namespace Jazer\Reviews\Http\Controllers\Update;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ResponseReport extends Controller
{
    public static function updateresponse(Request $request) {
        $updated = DB::connection("conn_reviews")->table("reviews_report")
            ->where([
                "review_refid" => $request['review_refid']
            ])
            ->update([
                "response_at"    => Carbon::now(),
                "response_by"    => $request['response_by'],
                "response_comment"    => $request['response_comment']
            ]);

        if($updated) {
            return [
                "success"   => true,
                "message"   => "Responsed report successfully."
            ];
        }
        else {
            return [
                "success"   => false,
                "message"   => "Failed to response the report."
            ];
        }
    
    }
}