<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request){
        $title = 'Dashboard';
        return view('admin.dashboards.dashboard', get_defined_vars());
    }
}
