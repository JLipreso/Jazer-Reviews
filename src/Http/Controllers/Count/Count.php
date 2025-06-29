<?php

namespace Jazer\Reviews\Http\Controllers\Count;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Count extends Controller
{
    public static function count(Request $request) {

        /**
         * This function should return the rating based on number of reviews
         */

        return [
            "rating"    => 4.7,
            "reviews"   => 467
        ];
    }
}
