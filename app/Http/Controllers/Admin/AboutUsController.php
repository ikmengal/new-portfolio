<?php

namespace App\Http\Controllers\Admin;

use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\AboutUs;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $this->authorize('about_us-list');
        $title = 'About Us';
        $model = [];
        AboutUs::latest()
            ->chunk(100, function ($aboutUs) use (&$model) {
                foreach ($aboutUs as $about) {
                    $model[] = $about;
                }
        });
        if($request->ajax() && $request->loaddata == "yes"){
            return DataTables::of($model)
            ->addIndexColumn()
            ->editColumn('title', function($model){
                return $model->title ?? '';
            })
            ->editColumn('description', function($model){
                return remarkslimit($model->description) ?? '-';
            })
            ->editColumn('status', function($model){
                $label = '-';
                switch ($model->status) {
                    case 'Active':
                        $label = '<span class="badge bg-label-success">'. $model->status .'</span>';
                        break;
                    case 'De-Active':
                        $label = '<span class="badge bg-label-danger">'. $model->status .'</span>';
                        break;
                }
                return $label;
            })
            ->editColumn('created_at', function($model){
                if(!empty($model->created_at)){
                    return dateFormat($model->created_at) ?? '-';
                }else{
                    return '-';
                }
            })
            ->editColumn('action', function($model){
                return view('admin.about_us.action', ['model' => $model])->render();
            })
            ->rawColumns(['title', 'description', 'status', 'created_at', 'action'])
            ->make(true);
        }
        return view('admin.about_us.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $this->authorize('about_us-create');
        return (string) view('admin.about_us.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
        ]);

        DB::beginTransaction();
        try {
            $folder_name = 'admin/assets/aboutus';

            $image = $request->hasFile('image')
                ? uploadSingleFile($request->file('image'), $folder_name, 'aboutus', null)
                : null;

            $aboutUs = new AboutUs();
            $aboutUs->user_id = Auth::id();
            $aboutUs->title = $request->title;
            $aboutUs->description = $request->short_description ?? null;
            $aboutUs->birthday = $request->birthday ?? null;
            $aboutUs->website = $request->website ?? null;
            $aboutUs->Phone = $request->phone ?? null;
            $aboutUs->City = $request->city ?? null;
            $aboutUs->Age = $request->age ?? null;
            $aboutUs->Degree = $request->degree ?? null;
            $aboutUs->Email = Auth()->user()->email ?? $request->email ?? null;
            $aboutUs->Freelance = $request->freelance ?? null;
            // $aboutUs->image = $image;
            $aboutUs->status = $request->status;
            $aboutUs->save();

            DB::commit();
            return response()->json(['success' => true, 'message' => "About us added successfully"], 200);
        } catch (\Throwable $e) {
            DB::rollback();
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $this->authorize('blogs-view');
        $model = AboutUs::where('id', $id)->first();
        return (string) view('admin.about_us.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $this->authorize('blogs-edit');
        $model = AboutUs::where('id', $id)->first();
        return (string) view('admin.about_us.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
           'title' => 'required|string',
        ]);


        DB::beginTransaction();
        try {
            $aboutUs = AboutUs::where('id', $id)->first();

            if($aboutUs){
                $folder_name = 'admin/assets/aboutus';
                $image = $request->hasFile('image')
                    ? uploadSingleFile($request->file('image'), $folder_name, 'aboutus', $aboutUs->main_image)
                    : $aboutUs->main_image;

                $aboutUs->user_id = Auth::id();
                $aboutUs->title = $request->title;
                $aboutUs->description = $request->short_description ?? null;
                $aboutUs->birthday = $request->birthday ?? null;
                $aboutUs->website = $request->website ?? null;
                $aboutUs->Phone = $request->phone ?? null;
                $aboutUs->City = $request->city ?? null;
                $aboutUs->Age = $request->age ?? null;
                $aboutUs->Degree = $request->degree ?? null;
                $aboutUs->Email = Auth()->user()->email ?? $request->email ?? null;
                $aboutUs->Freelance = $request->freelance ?? null;
                $aboutUs->status = $request->status;
                $aboutUs->save();

                DB::commit();
                return response()->json(['success' => true, 'message' => "About Us Updated successfully"], 200);
            }else{
                return response()->json(['success' => false, 'message' => 'About Us not found'], 500);
            }
        } catch (\Throwable $e) {
            DB::rollback();
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $this->authorize('blogs-delete');
        $find = AboutUs::where('id', $id)->first();
        if (isset($find) && !empty($find)) {
            $model = $find->delete();
            if ($model) {
                return response()->json([
                    'status' => true,
                    'message' => 'Record deleted successfully!'
                ]);
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
