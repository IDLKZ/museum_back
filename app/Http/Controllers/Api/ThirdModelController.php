<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ThirdModel;
use Illuminate\Http\Request;

class ThirdModelController extends Controller
{
    function thirdModels($tour_id){
        $thirdModels = ThirdModel::where("tour_id",$tour_id)->with(["galleries","tour"])->get();
        return response()->json($thirdModels);
    }

    function singlethirdModel($alias){
        $thirdModel = ThirdModel::where("alias",$alias)->with(["galleries","tour"])->first();
        return response()->json($thirdModel);
    }
}
