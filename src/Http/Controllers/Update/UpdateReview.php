<?php

namespace Jazer\Reviews\Http\Controllers\Update;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class UpdateReview extends Controller
{
    public static function update(Request $request) {
        $updated = DB::connection("conn_reviews")->table("reviews")
            ->where([
                "reference_id" => $request['reference_id']
            ])
            ->update([
                "comment"    => $request['comment']
            ]);

        if($updated) {
            return [
                "success"   => true,
                "message"   => "Comment successfully updated."
            ];
        }
        else {
            return [
                "success"   => false,
                "message"   => "Failed to update comment."
            ];
        }
    
    }
}