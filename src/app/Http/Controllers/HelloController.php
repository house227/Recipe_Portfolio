<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request){
        $data = [
            'msg' => $request->text1,
        ];
        return view('index', $data);
    }
}
