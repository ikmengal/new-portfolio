<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function show(Request $request){
        if(isset($request->title) && !empty($request->title)){
            return view("laura.$request->title");
        }else{
            return view('laura.index');
        }
    }
}
