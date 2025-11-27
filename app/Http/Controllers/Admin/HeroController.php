<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function hero(){
        return view('admin.pages.hero');
    }

    public function aboutus(){
        return view('admin.pages.aboutus');
    }

    public function resume(){
        return view('admin.pages.resume');
    }

    public function services(){
        return view('admin.pages.services');
    }

    public function portfolio(){
        return view('admin.pages.portfolio');
    }

    public function contact(){
        return view('admin.pages.contact');
    }
}
