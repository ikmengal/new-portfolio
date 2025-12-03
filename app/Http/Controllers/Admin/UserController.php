<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Profile";
        $user = User::where('id', $id)->first();
        if($user){
            return view('admin.users.edit', get_defined_vars());
        }else{
            return abbort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'image' => 'required',
        ]);

        DB::beginTransaction();

        try {
            $user = User::where('id', $id)->first();
            if($user){
                $folder = 'admin/assets/users';

                $image = $request->hasFile('image')
                    ? uploadSingleFile($request->file('image'), $folder, 'users', $user->image)
                    : $user->image;

                $user->name = $request->name;
                $user->email = $request->email;
                $user->image = $image ?? null;
                $user->save();

                DB::commit();
                return redirect()->back()->with('success', 'User detail updated successfully.');
            }else{
                DB::rollback();
                return redirect()->back()->with('error', 'User details not updated.');
            }
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
