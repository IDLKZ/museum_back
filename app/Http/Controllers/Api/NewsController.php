<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    function news(){
        $news = News::with("galleries")->orderBy("created_at","DESC")->paginate(3);
        return response()->json($news);
    }
    function singleNews($alias){
        $news = News::where("alias",$alias)->with("galleries")->first();
        return response()->json($news);
    }
}
