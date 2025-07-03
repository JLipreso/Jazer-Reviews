<?php

namespace Jazer\Reviews\Http\Controllers\Update;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CloseReport extends Controller
{
    public static function reportdone(Request $request) {
        $updated = DB::connection("conn_reviews")->table("reviews_report")
            ->where([
                "review_refid" => $request['review_refid']
            ])
            ->update([
                "done"    => '1',
                "done_date"    => Carbon::now()
                
            ]);

        if($updated) {
            return [
                "success"   => true,
                "message"   => "Closed report successfully."
            ];
        }
        else {
            return [
                "success"   => false,
                "message"   => "Failed to close the report."
            ];
        }
    
    }
}