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
        $user = User::with(['hasEducations','hasExperiences'])->where('id', 1)->first();
        if($user){
            return view('admin.pages.resume', get_defined_vars());
        }else{
            return redirect()->back()->withErrors('User not found');
        }
    }

    public function services(){
        $user = User::with(['hasEducations','hasExperiences','hasServices','hasProjects'])->where('id', 1)->first();
        if($user){
            return view('admin.pages.services', get_defined_vars());
        }else{
            return redirect()->back()->withErrors('User not found');
        }
    }

    public function portfolio(){
        $user = User::with(['hasEducations','hasExperiences','hasServices','hasProjects'])->where('id', 1)->first();
        if($user){
            return view('admin.pages.portfolio', get_defined_vars());
        }else{
            return redirect()->back()->withErrors('User not found');
        }
    }

    public function contact(){
        return view('admin.pages.contact');
    }
}
