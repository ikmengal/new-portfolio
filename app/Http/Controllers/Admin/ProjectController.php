<?php

namespace App\Http\Controllers\Admin;

use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ProjectImage;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $this->authorize('projects-list');
        $model = [];
        $title = "Projects";

        Project::latest()
            ->chunk(100, function($projects) use (&$model){
                foreach ($projects as $project) {
                    $model[] = $project;
                }
            });
        if($request->ajax() && $request->loaddata == "yes"){
            return DataTables::of($model)
            ->addIndexColumn()
            ->editColumn('title', function($model){
                return view('admin.projects.profile', get_defined_vars())->render();
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
                return view('admin.projects.action', ['model' => $model])->render();
            })
            ->rawColumns(['title', 'description', 'status', 'created_at', 'action'])
            ->make(true);
        }
        return view('admin.projects.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $this->authorize('projects-create');
        return (string) view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'client_name' => 'required',
            'start_date' => 'required',
            'project_url' => 'required',
            'main_image' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $folder = 'admin/assets/projects';
            $mainImage = $request->hasFile('main_image')
                ? uploadSingleFile($request->file('main_image'), $folder, 'projects', null)
                : null;

            $project = Project::create([
                'user_id' => Auth::id(),
                'title' => $request->title,
                'description' => $request->description ?? null,
                'category' => $request->category,
                'client_name' => $request->client_name,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date ?? null,
                'project_url' => $request->project_url,
                'main_image' => $mainImage ?? null,
                'status' => $request->status,
            ]);

            if($project){
                if($request->hasFile('images')){
                    $files = $request->images;
                    foreach ($files as $file) {
                        $image = uploadSingleFile($file, $folder, 'projects', null);
                        ProjectImage::create([
                            'project_id' => $project->id,
                            'image' => $image,
                        ]);
                    }
                }

                DB::commit();
                return response()->json(['success' => true, 'message' => "Project added successfully"]);
            }else{
                return response()->json(['success' => false, 'message' => "Project not added"]);
            }
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['success' => false, 'message' => $th->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $this->authorize('projects-view');
        $model = Project::with('hasImages')->where('id', $id)->first();
        return (string) view('admin.projects.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $this->authorize('projects-edit');
        $model = Project::with('hasImages')->where('id', $id)->first();
        return (string) view('admin.projects.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'client_name' => 'required',
            'start_date' => 'required',
            'project_url' => 'required',
            'main_image' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $folder = 'admin/assets/projects';
            $project = Project::where('id', $id)->first();
            if($project){
                $mainImage = $request->hasFile('main_image')
                ? uploadSingleFile($request->file('main_image'), $folder, 'projects', $project->main_image)
                : $project->main_image;

                $project->title = $request->title;
                $project->description = $request->description ?? null;
                $project->category = $request->category;
                $project->client_name = $request->client_name;
                $project->start_date = $request->start_date;
                $project->end_date = $request->end_date ?? null;
                $project->project_url = $request->project_url;
                $project->main_image = $mainImage ?? null;
                $project->status = $request->status;
                $project->save();

                if($request->hasFile('images')){
                    $files = $request->images;
                    foreach ($files as $file) {
                        $image = uploadSingleFile($file, $folder, 'projects', null);
                        ProjectImage::create([
                            'project_id' => $project->id,
                            'image' => $image,
                        ]);
                    }
                }

                DB::commit();
                return response()->json(['success' => true, 'message' => "Project update successfully"]);
            }else{
                return response()->json(['success' => false, 'message' => "Project not update"]);
            }
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['success' => false, 'message' => $th->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $this->authorize('projects-delete');
        $find = Project::where('id', $id)->first();
        if (isset($find) && !empty($find)) {
            $find->hasImages()->delete();
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
        // $this->authorize('projects-trashed');
        $title = 'All Trashed Record';
        $trashed = true;
        $model = Project::onlyTrashed()->latest()->get();
        if($request->ajax() && $request->loaddata == "yes"){
            return DataTables::of($model)
            ->addIndexColumn()
            ->editColumn('title', function($model){
                return view('admin.projects.profile', get_defined_vars())->render();
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
                // if (auth()->user()->can('projects-restore')) {
                    $buttons = '<a href="javascript:;"
                        class="btn btn-icon btn-label-info waves-effect restore me-2"
                        title="Restore Record"
                        data-res-url="' . route('projects.restore', $model->id) . '">
                        <i class="ti ti-refresh ti-sm"></i>
                    </a>';
                // }
                return $buttons ?: '-';
            })
            ->rawColumns(['title', 'description', 'status', 'created_at', 'action'])
            ->make(true);
        }
        return view('admin.projects.index', get_defined_vars());
    }

    public function restore($id){
        // $this->authorize('projects-restore');
        $find = Project::onlyTrashed()->where('id', $id)->first();
        if (isset($find) && !empty($find)) {
            ProjectImage::onlyTrashed()->where('project_id', $id)->restore();
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
