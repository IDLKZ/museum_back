<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    function tours($hall_id){
        $tours = Tour::where("hall_id",$hall_id)->with(["galleries","hall"])->get();
        return response()->json($tours);
    }

    function singleTour($alias){
        $tours = Tour::where("alias",$alias)->with(["galleries","hall"])->first();
        return response()->json($tours);
    }
}