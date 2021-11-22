<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);
        Order::firstOrCreate([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'message' => $request['message']
        ]);
        return response()->json(['message'=>'ok']);
    }
}
