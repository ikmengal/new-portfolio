<?php

namespace App\Http\Controllers\Admin;

use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $this->authorize('about_us-list');
        $title = 'Education';
        $model = [];
        Education::latest()
            ->chunk(100, function ($educations) use (&$model) {
                foreach ($educations as $education) {
                    $model[] = $education;
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
                return view('admin.educations.action', ['model' => $model])->render();
            })
            ->rawColumns(['title', 'description', 'status', 'created_at', 'action'])
            ->make(true);
        }
        return view('admin.educations.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $this->authorize('educations-create');
        return (string) view('admin.educations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'degree' => 'required|string',
            'title' => 'required',
            'university' => 'required',
            'start_date' => 'required|date',
            'city' => 'required',
            'status' => 'required',
        ]);

        DB::beginTransaction();
        try {
            // $folder_name = 'admin/assets/aboutus';

            // $image = $request->hasFile('image')
            //     ? uploadSingleFile($request->file('image'), $folder_name, 'aboutus', null)
            //     : null;

            $education = Education::create([
                'user_id' => Auth::id(),
                'degree' => $request->degree ?? null,
                'title' => $request->title,
                'university' => $request->university ?? null,
                'description' => $request->description ?? null,
                'start_date' => $request->start_date ?? null,
                'end_date' => $request->end_date ?? null,
                'City' => $request->city ?? null,
                'status' => $request->status,
            ]);

            DB::commit();
            return response()->json(['success' => true, 'message' => "Education added successfully"], 200);
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
        // $this->authorize('educations-view');
        $model = Education::where('id', $id)->first();
        return (string) view('admin.educations.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $this->authorize('educations-eidt');
        $model = Education::where('id', $id)->first();
        return (string) view('admin.educations.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'degree' => 'required|string',
            'title' => 'required',
            'university' => 'required',
            'start_date' => 'required|date',
            'city' => 'required',
            'status' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $education = Education::where('id', $id)->first();

            if($education){
                // $folder_name = 'admin/assets/education';
                // $image = $request->hasFile('image')
                //     ? uploadSingleFile($request->file('image'), $folder_name, 'education', $education->main_image)
                //     : $education->main_image;

                $education->title = $request->title;
                $education->degree = $request->degree ?? null;
                $education->university = $request->university ?? null;
                $education->description = $request->description ?? null;
                $education->start_date = $request->start_date ?? null;
                $education->end_date = $request->end_date ?? null;
                $education->City = $request->city ?? null;
                $education->status = $request->status;
                $education->save();

                DB::commit();
                return response()->json(['success' => true, 'message' => "Education Updated successfully"], 200);
            }else{
                return response()->json(['success' => false, 'message' => 'Education not found'], 500);
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
        $find = Education::where('id', $id)->first();
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

    public function trashed(Request $request){
        // $this->authorize('blogs-trashed');
        $title = 'All Trashed Record';
        $trashed = true;
        $model = Education::onlyTrashed()->latest()->get();
        if($request->ajax() && $request->loaddata == "yes"){
            return DataTables::of($model)
            ->addIndexColumn()
            ->editColumn('title', function($model){
                return $model->title ?? '-';
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
                $buttons = '';
                // if (auth()->user()->can('education-restore')) {
                    $buttons = '<a href="javascript:;"
                        class="btn btn-icon btn-label-info waves-effect restore me-2"
                        title="Restore Record"
                        data-res-url="' . route('educations.restore', $model->id) . '">
                        <i class="ti ti-refresh ti-sm"></i>
                    </a>';
                // }
                return $buttons ?: '-';
            })
            ->rawColumns(['title', 'description', 'status', 'created_at', 'action'])
            ->make(true);
        }
        return view('admin.educations.index', get_defined_vars());
    }

    public function restore($id){
        // $this->authorize('educations-restore');
        $find = Education::onlyTrashed()->where('id', $id)->first();
        if (isset($find) && !empty($find)) {
            $restore = $find->restore();
            if (!empty($restore)) {
                return response()->json([
                    'success' => true,
                    'message' => 'Record restored successfully.'
                ]);
            }
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Something record not found.'
            ]);
        }
    }
}
