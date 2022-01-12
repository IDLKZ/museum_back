<?php

namespace App\Http\Controllers;

use App\Models\ThirdModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except("models");
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function models($alias){
        $model =  ThirdModel::firstWhere("alias",$alias);
        $wavefront = $model->getFile("wavefront");
        return view("three.model",compact("wavefront"));
    }
}
