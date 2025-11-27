@extends('admin.admin-layouts.master')
@push('title', $title.' | '. setting() ?? AppName())
@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Welcome, </span>{{ Auth()->user()->name ?? '' }}</h4>
    <div class="row">
    </div>
@endsection
@push('js')
@endpush
