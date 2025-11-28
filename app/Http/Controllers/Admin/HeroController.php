<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AboutUs;

class HeroController extends Controller
{
    public function hero(Request $request){
        $user = User::where('id', 1)->first();
        if($user){
            return view('admin.pages.hero', get_defined_vars());
        }else{
            return redirect()->back()->withErrors('User not found');
        }
    }

    public function aboutus(Request $request){
        $about = AboutUs::where('user_id', 1)->first();
        if($about){
            return view('admin.pages.aboutus', get_defined_vars());
        }else{
            return redirect()->back()->withErrors('User not found');
        }
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
