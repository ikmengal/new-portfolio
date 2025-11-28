<?php

namespace App\Http\Controllers\Admin;

use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Experience;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = 'Experiences';
        $model = [];
        Experience::latest()
            ->chunk(100, function ($experiences) use (&$model) {
                foreach ($experiences as $experience) {
                    $model[] = $experience;
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
                return view('admin.experiences.action', ['model' => $model])->render();
            })
            ->rawColumns(['title', 'description', 'status', 'created_at', 'action'])
            ->make(true);
        }
        return view('admin.experiences.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $this->authorize('experiences-create');
        return (string) view('admin.experiences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'company' => 'required',
            'start_date' => 'required|date',
            'city' => 'required',
            'status' => 'required',
        ]);

        DB::beginTransaction();
        try {
            // $folder_name = 'admin/assets/experiences';

            // $image = $request->hasFile('image')
            //     ? uploadSingleFile($request->file('image'), $folder_name, 'experience', null)
            //     : null;

            $experience = Experience::create([
                'user_id' => Auth::id(),
                'company' => $request->company ?? null,
                'title' => $request->title,
                'description' => $request->description ?? null,
                'start_date' => $request->start_date ?? null,
                'end_date' => $request->end_date ?? null,
                'City' => $request->city ?? null,
                'status' => $request->status,
            ]);

            DB::commit();
            return response()->json(['success' => true, 'message' => "Experience added successfully"], 200);
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
        // $this->authorize('experiences-view');
        $model = Experience::where('id', $id)->first();
        return (string) view('admin.experiences.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $this->authorize('experiences-eidt');
        $model = Experience::where('id', $id)->first();
        return (string) view('admin.experiences.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'company' => 'required|string',
            'start_date' => 'required|date',
            'city' => 'required',
            'status' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $experience = Experience::where('id', $id)->first();

            if($experience){
                // $folder_name = 'admin/assets/experience';
                // $image = $request->hasFile('image')
                //     ? uploadSingleFile($request->file('image'), $folder_name, 'experience', $experience->main_image)
                //     : $experience->main_image;

                $experience->title = $request->title;
                $experience->company = $request->company ?? null;
                $experience->description = $request->description ?? null;
                $experience->start_date = $request->start_date ?? null;
                $experience->end_date = $request->end_date ?? null;
                $experience->City = $request->city ?? null;
                $experience->status = $request->status;
                $experience->save();

                DB::commit();
                return response()->json(['success' => true, 'message' => "Experience Updated successfully"], 200);
            }else{
                return response()->json(['success' => false, 'message' => 'Experience not found'], 500);
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
        // $this->authorize('experiences-delete');
        $find = Experience::where('id', $id)->first();
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
        // $this->authorize('experiences-trashed');
        $title = 'All Trashed Record';
        $trashed = true;
        $model = Experience::onlyTrashed()->latest()->get();
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
                // if (auth()->user()->can('experience-restore')) {
                    $buttons = '<a href="javascript:;"
                        class="btn btn-icon btn-label-info waves-effect restore me-2"
                        title="Restore Record"
                        data-res-url="' . route('experiences.restore', $model->id) . '">
                        <i class="ti ti-refresh ti-sm"></i>
                    </a>';
                // }
                return $buttons ?: '-';
            })
            ->rawColumns(['title', 'description', 'status', 'created_at', 'action'])
            ->make(true);
        }
        return view('admin.experiences.index', get_defined_vars());
    }

    public function restore($id){
        // $this->authorize('experiences-restore');
        $find = Experience::onlyTrashed()->where('id', $id)->first();
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
