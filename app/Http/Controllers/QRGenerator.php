<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Models\ThirdModel;
use App\Models\Tour;
use Illuminate\Http\Request;

class QRGenerator extends Controller
{
    public function index(Request $request){
        $alias = null;
        switch($request->get("type")){
            case "hall":{
                $hall = Hall::firstWhere("id",$request->get("id"));
                $hall ? $alias = "hall" . "/" . $hall->alias : null;
                break;
            }
            case "tour":{
                $tour = Tour::firstWhere("id",$request->get("id"));
                $tour ? $alias = "tour" . "/" . $tour->alias : null;
                break;
            }
            case "thirdModel":{

                $models = ThirdModel::firstWhere("id",$request->get("id"));
                $models ? $alias = "thirdModel" . "/" . $models->alias : null;
                break;
            }
        }
        if($alias == null){return redirect("404");}




        return view("qr.index",compact("alias"));
    }
}
