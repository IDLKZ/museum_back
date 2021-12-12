<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        return response()->json(Service::paginate(20));
    }
    public function singleService($alias){
        return response()->json(Service::firstWhere("alias",$alias));
    }
}
