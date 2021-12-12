<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return response()->json(Event::paginate(20));
    }
    public function singleEvent($alias){
        return response()->json(Event::firstWhere("alias",$alias));
    }
}
