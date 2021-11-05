<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Hall;
use Illuminate\Http\Request;

class HallController extends Controller
{
    function allHall(){
        $halls = Hall::with(["galleries","tours","thirdModels"])->get();
        return response()->json($halls);
    }

    function singleHall($alias){
        $hall = Hall::where("alias",$alias)->with(["galleries","tours"])->first();
        return response()->json($hall);
    }


}
