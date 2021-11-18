<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ThirdModel;
use Illuminate\Http\Request;

class ThirdModelController extends Controller
{
    function thirdModels($hall_id){
        $thirdModels = ThirdModel::where("hall_id",$hall_id)->with(["galleries","hall","showcase"])->get();
        return response()->json($thirdModels);
    }

    function singlethirdModel($alias){
        $thirdModel = ThirdModel::where("alias",$alias)->with(["galleries","hall","showcase"])->first();
        return response()->json($thirdModel);
    }
    function singleShowCase($showcase_id){
        $thirdModels = ThirdModel::where("showcase_id",$showcase_id)->with(["galleries","hall","showcase"])->get();
        return response()->json($thirdModels);
    }
}
