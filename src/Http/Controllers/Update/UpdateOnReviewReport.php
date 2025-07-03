<?php

namespace Jazer\Reviews\Http\Controllers\Update;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class UpdateOnReviewReport extends Controller
{
    public static function updateonreview(Request $request) {
        $updated = DB::connection("conn_reviews")->table("reviews_report")
            ->where([
                "review_refid" => $request['review_refid']
            ])
            ->update([
                "onreview"    => '1'
            ]);

        if($updated) {
            return [
                "success"   => true,
                "message"   => "Report reviewed successfully."
            ];
        }
        else {
            return [
                "success"   => false,
                "message"   => "Failed to review the report."
            ];
        }
    
    }
}