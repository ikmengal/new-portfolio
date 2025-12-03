<?php

namespace App\Http\Controllers\Admin;

use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Testimonial;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $this->authorize('testimonials-list');
        $title = 'Testimonials';
        $model = [];
        Testimonial::latest()
            ->chunk(100, function ($testimonials) use (&$model) {
                foreach ($testimonials as $testimonial) {
                    $model[] = $testimonial;
                }
        });
        if($request->ajax() && $request->loaddata == "yes"){
            return DataTables::of($model)
            ->addIndexColumn()
            ->editColumn('title', function($model){
                return view('admin.testimonials.profile', get_defined_vars())->render();
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
                return view('admin.testimonials.action', ['model' => $model])->render();
            })
            ->rawColumns(['title', 'description', 'status', 'created_at', 'action'])
            ->make(true);
        }
        return view('admin.testimonials.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $this->authorize('testimonials-create');
        return (string) view('admin.testimonials.create');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
