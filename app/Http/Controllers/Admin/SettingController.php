<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{
    Auth,
    Log,
    DB
};
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function create(Request $request){
        // $this->authorize('settings-list');
        $title = "Setting";

        $setting = Setting::first();
        if(!empty($setting)){
            return view('admin.settings.edit', get_defined_vars());
        }else{
            return view('admin.settings.create', get_defined_vars());
        }
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'url' => 'required',
            'favicon' => 'required|image|mimes:png,jpg,jpeg,ico|max:2048',
            'white_logo' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'black_logo' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        DB::beginTransaction();

        try {

            $model = new Setting();

            if ($request->hasFile('white_logo')) {
                $white_logo = $request->file('white_logo');
                $folder_name = 'admin/assets/settings';
                $logoName = uploadSingleFile($white_logo, $folder_name, 'settings', null);
                $model->white_logo = $logoName;
            }

            if ($request->hasFile('black_logo')) {
                $black_logo = $request->file('black_logo');
                $folder_name = 'admin/assets/settings';
                $logoName = uploadSingleFile($black_logo, $folder_name, 'settings', null);
                $model->black_logo = $logoName;
            }

            if ($request->hasFile('favicon')) {
                $favicon = $request->file('favicon');
                $folder_name = 'admin/assets/settings';
                $logoName = uploadSingleFile($favicon, $folder_name, 'settings', null);
                $model->favicon = $logoName;
            }

            $model->name = $request->name;
            $model->email = $request->email;
            $model->website_url = $request->url;
            $model->link = $request->url;
            $model->description = $request->description;
            $model->phone_number = $request->phone_number;
            $model->address = $request->address ?? null;
            $model->save();

            DB::commit();
            return redirect()->back()->with('message', 'Setting details updated successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function update(Request $request, string $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        DB::beginTransaction();

        try {

            $model = Setting::where('id', $id)->first();

            if($model){
                if ($request->hasFile('white_logo')) {
                    $white_logo = $request->file('white_logo');
                    $old_Image = $model->white_logo;
                    $folder_name = 'admin/assets/settings';
                    $logoName = uploadSingleFile($white_logo, $folder_name, 'settings', $old_Image);
                    $model->white_logo = $logoName;
                    $model->save();
                }

                if ($request->hasFile('black_logo')) {
                    $black_logo = $request->file('black_logo');
                    $old_Image = $model->black_logo;
                    $folder_name = 'admin/assets/settings';
                    $logoName = uploadSingleFile($black_logo, $folder_name, 'settings', $old_Image);
                    $model->black_logo = $logoName;
                    $model->save();
                }

                if ($request->hasFile('favicon')) {
                    $favicon = $request->file('favicon');
                    $old_Image = $model->favicon;
                    $folder_name = 'admin/assets/settings';
                    $logoName = uploadSingleFile($favicon, $folder_name, 'settings', $old_Image);
                    $model->favicon = $logoName;
                    $model->save();
                }

                $model->name = $request->name;
                $model->email = $request->email;
                $model->website_url = $request->url;
                $model->link = $request->url;
                $model->description = $request->description;
                $model->phone_number = $request->phone_number;
                $model->address = $request->address;
                $model->save();

                DB::commit();
                return redirect()->back()->with('message', 'Setting details updated successfully.');
            }else{
                DB::rollback();
                return redirect()->back()->with('message', 'Setting details not updated.');
            }
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
