<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class PortfolioController extends Controller
{
    public function show(Request $request, string $id){
        if(isset($id) && !empty($id)){
            $project = Project::with('hasImages')->where('id', $id)->first();
            return view("laura.show", get_defined_vars());
        }else{
            return view('laura.index');
        }
    }
}
