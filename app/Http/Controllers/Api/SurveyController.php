<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function index(){
        return Survey::all();
    }

    public function singleSurvey($alias){
        return Survey::firstWhere("alias",$alias);
    }
}
