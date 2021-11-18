<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Showcase;
use Illuminate\Http\Request;

class ShowcaseController extends Controller
{
    public function singleShowCase($alias){
        return response()->json(Showcase::firstWhere(["alias"=>$alias]));
    }
}
