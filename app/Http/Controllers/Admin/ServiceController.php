<?php

namespace App\Http\Controllers\Admin;

use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $this->authorize('services-list');
        $title = 'Services';
        $model = [];
        Service::latest()
            ->chunk(100, function ($services) use (&$model) {
                foreach ($services as $service) {
                    $model[] = $service;
                }
        });
        if($request->ajax() && $request->loaddata == "yes"){
            return DataTables::of($model)
            ->addIndexColumn()
            ->editColumn('title', function($model){
                return view('admin.services.profile', get_defined_vars())->render() ?? '';
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
                return view('admin.services.action', ['model' => $model])->render();
            })
            ->rawColumns(['title', 'description', 'status', 'created_at', 'action'])
            ->make(true);
        }
        return view('admin.services.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $this->authorize('services-create');
        return (string) view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $folder = 'admin/assets/services';
            $image = $request->hasFile('image')
                ? uploadSingleFile($request->file('image'), $folder, 'services', null)
                : null;

            $service = Service::create([
                'user_id' => Auth::id(),
                'title' => $request->title,
                'description' => $request->description ?? null,
                'image' => $image ?? null,
                'status' => $request->status,
            ]);

            DB::commit();
            return response()->json(['success' => true, 'message' => "Service added successfully"]);
        } catch (\Throwable $th) {
            DB::rollback();
            Log::info("Error: ".$th->getMessage());
            return response()->json(['success' => false, 'message' => $th->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $this->authorize('services-view');
        $model = Service::where('id', $id)->first();
        return (string) view('admin.services.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $this->authorize('services-edit');
        $model = Service::where('id', $id)->first();
        return (string) view('admin.services.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $service = Service::where('id', $id)->first();
            if($service){
                $folder = 'admin/assets/services';
                $image = $request->hasFile('image')
                    ? uploadSingleFile($request->file('image'), $folder, 'services', $service->image)
                    : $service->image;

                $service->title = $request->title;
                $service->description = $request->description ?? null;
                $service->image = $image ?? null;
                $service->status = $request->status;
                $service->save();

                DB::commit();
                return response()->json(['success' => true, 'message' => "Service uppdate successfully"]);
            }else{
                return response()->json(['success' => false, 'message' => "Service not found"]);
            }
        } catch (\Throwable $th) {
            DB::rollback();
            Log::info("Error: ".$th->getMessage());
            return response()->json(['success' => false, 'message' => $th->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $this->authorize('services-delete');
        $find = Service::where('id', $id)->first();
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
        // $this->authorize('services-trashed');
        $title = 'All Trashed Record';
        $trashed = true;
        $model = Service::onlyTrashed()->latest()->get();
        if($request->ajax() && $request->loaddata == "yes"){
            return DataTables::of($model)
            ->addIndexColumn()
            ->editColumn('title', function($model){
                return view('admin.services.profile', get_defined_vars())->render();
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
                        data-res-url="' . route('service.restore', $model->id) . '">
                        <i class="ti ti-refresh ti-sm"></i>
                    </a>';
                // }
                return $buttons ?: '-';
            })
            ->rawColumns(['title', 'description', 'status', 'created_at', 'action'])
            ->make(true);
        }
        return view('admin.services.index', get_defined_vars());
    }

    public function restore($id){
        // $this->authorize('services-restore');
        $find = Service::onlyTrashed()->where('id', $id)->first();
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
