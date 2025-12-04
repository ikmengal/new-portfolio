@extends('admin.admin-layouts.master')
@push('title', $title.' | '. setting()->name ?? AppName())
@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Welcome, </span>{{ Auth()->user()->name ?? '' }}</h4>
    <div class="row">
        <!-- Website Analytics -->
            <div class="col-lg-6 mb-4">
                <div class="swiper-container swiper-container-horizontal swiper swiper-card-advance-bg" id="swiper-with-pagination-cards">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                                    <small>Total 28.5% Conversion Rate</small>
                                </div>
                                <div class="row">
                                    <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                                        <h6 class="text-white mt-0 mt-md-3 mb-3">Traffic</h6>
                                        <div class="row">
                                            <div class="col-6">
                                                <ul class="list-unstyled mb-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                    <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">28%</p>
                                                    <p class="mb-0">Sessions</p>
                                                </li>
                                                <li class="d-flex align-items-center mb-2">
                                                    <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">1.2k</p>
                                                    <p class="mb-0">Leads</p>
                                                </li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <ul class="list-unstyled mb-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                    <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">3.1k</p>
                                                    <p class="mb-0">Page Views</p>
                                                </li>
                                                <li class="d-flex align-items-center mb-2">
                                                    <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">12%</p>
                                                    <p class="mb-0">Conversions</p>
                                                </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                                        <img src="{{ asset('admin/assets/img/illustrations/card-website-analytics-1.png') }}" alt="Website Analytics" width="170" class="card-website-analytics-img" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                                    <small>Total 28.5% Conversion Rate</small>
                                </div>
                                <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                                    <h6 class="text-white mt-0 mt-md-3 mb-3">Spending</h6>
                                    <div class="row">
                                        <div class="col-6">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                    <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">12h</p>
                                                    <p class="mb-0">Spend</p>
                                                </li>
                                                <li class="d-flex align-items-center mb-2">
                                                    <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">127</p>
                                                    <p class="mb-0">Order</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                    <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">18</p>
                                                    <p class="mb-0">Order Size</p>
                                                </li>
                                                <li class="d-flex align-items-center mb-2">
                                                    <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">2.3k</p>
                                                    <p class="mb-0">Items</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                                    <img src="{{ asset('admin/assets/img/illustrations/card-website-analytics-2.png') }}" alt="Website Analytics" width="170" class="card-website-analytics-img" />
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                                    <small>Total 28.5% Conversion Rate</small>
                                </div>
                                <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                                    <h6 class="text-white mt-0 mt-md-3 mb-3">Revenue Sources</h6>
                                    <div class="row">
                                        <div class="col-6">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                    <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">268</p>
                                                    <p class="mb-0">Direct</p>
                                                </li>
                                                <li class="d-flex align-items-center mb-2">
                                                    <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">62</p>
                                                    <p class="mb-0">Referral</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                    <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">890</p>
                                                    <p class="mb-0">Organic</p>
                                                </li>
                                                <li class="d-flex align-items-center mb-2">
                                                    <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">1.2k</p>
                                                    <p class="mb-0">Campaign</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                                    <img src="{{ asset('admin/assets/img/illustrations/card-website-analytics-3.png') }}" alt="Website Analytics" width="170" class="card-website-analytics-img" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        <!--/ Website Analytics -->

        <!-- Sales Overview -->
            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <small class="d-block mb-1 text-muted">Sales Overview</small>
                            <p class="card-text text-success">+18.2%</p>
                        </div>
                        <h4 class="card-title mb-1">$42.5k</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="d-flex gap-2 align-items-center mb-2">
                                    <span class="badge bg-label-info p-1 rounded">
                                        <i class="ti ti-shopping-cart ti-xs"></i>
                                    </span>
                                    <p class="mb-0">Order</p>
                                </div>
                                <h5 class="mb-0 pt-1 text-nowrap">62.2%</h5>
                                <small class="text-muted">6,440</small>
                            </div>
                            <div class="col-4">
                                <div class="divider divider-vertical">
                                    <div class="divider-text">
                                        <span class="badge-divider-bg bg-label-secondary">VS</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="d-flex gap-2 justify-content-end align-items-center mb-2">
                                    <p class="mb-0">Visits</p>
                                    <span class="badge bg-label-primary p-1 rounded">
                                        <i class="ti ti-link ti-xs"></i>
                                    </span>
                                </div>
                                <h5 class="mb-0 pt-1 text-nowrap ms-lg-n3 ms-xl-0">25.5%</h5>
                                <small class="text-muted">12,749</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-4">
                            <div class="progress w-100" style="height: 8px">
                                <div class="progress-bar bg-info" style="width: 70%" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" ></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--/ Sales Overview -->

        <!-- Revenue Generated -->
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="card-icon">
                            <span class="badge bg-label-success rounded-pill p-2">
                                <i class="ti ti-credit-card ti-sm"></i>
                            </span>
                        </div>
                        <h5 class="card-title mb-0 mt-2">97.5k</h5>
                        <small>Revenue Generated</small>
                    </div>
                    <div id="revenueGenerated"></div>
                </div>
            </div>
        <!--/ Revenue Generated -->

        <!-- Sales By Country -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title mb-0">
                            <h5 class="m-0 me-2">Services</h5>
                            <small class="text-muted">Monthly Sales Overview</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            @if (isset($user->hasServices) && !empty($user->hasServices) && count($user->hasServices) > 0)
                                @foreach ($user->hasServices as $userService)
                                    <li class="d-flex align-items-center mb-4">
                                        @if (isset($userService->image) && !empty($userService->image))
                                            <img src="{{ asset('admin/assets/services/'.$userService->image)}}" alt="User" class="rounded-circle me-3" width="34" />
                                        @else
                                            <img src="{{ asset('admin/assets/svg/flags/us.svg')}}" alt="User" class="rounded-circle me-3" width="34" />
                                        @endif
                                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="mb-0 me-1">{{ $userService->title ?? '' }}</h6>
                                                </div>
                                                <small class="text-muted">{{ $userService->status ?? '' }}</small>
                                            </div>
                                            <div class="user-progress">
                                                <p class="text-success fw-semibold mb-0">
                                                    {{ dateFormat($userService->created_at) ?? '' }}
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @else
                                <li class="d-flex align-items-center mb-4">
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="d-flex align-items-center">
                                            <h6 class="mb-0 me-1">Record not found</h6>
                                        </div>
                                    </div>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        <!--/ Sales By Country -->

        <!-- Monthly Campaign State -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title mb-0">
                            <h5 class="mb-0">Education</h5>
                            <small class="text-muted">8.52k Social Visiters</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            @if (isset($user->hasEducations) && !empty($user->hasEducations) && count($user->hasEducations) > 0)
                                @foreach ($user->hasEducations as $userEducation)
                                    <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
                                        <div class="badge bg-label-success rounded p-2">
                                            <i class="ti ti-mail ti-sm"></i>
                                        </div>
                                        <div class="d-flex justify-content-between w-100 flex-wrap">
                                            <h6 class="mb-0 ms-3">{{ $userEducation->degree ?? '' }}</h6>
                                            <div class="d-flex">
                                                <p class="mb-0 fw-semibold">{{ $userEducation->title ?? '' }}</p>
                                                <p class="ms-3 text-success mb-0">{{ $userEducation->end_date ? 'Completed' : 'Continue' }}</p>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @else
                                <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
                                    <div class="badge bg-label-success rounded p-2"><i class="ti ti-mail ti-sm"></i></div>
                                    <div class="d-flex justify-content-between w-100 flex-wrap">
                                        <h6 class="mb-0 ms-3">Emails</h6>
                                        <div class="d-flex">
                                            <p class="mb-0 fw-semibold">12,346</p>
                                            <p class="ms-3 text-success mb-0">0.3%</p>
                                        </div>
                                    </div>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        <!--/ Monthly Campaign State -->

        <!-- Source Visit -->
            <div class="col-xl-5 col-md-5 order-2 order-lg-1">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title mb-0">
                            <h5 class="mb-0">Work Experiences</h5>
                            <small class="text-muted">38.4k Visitors</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-0">
                            @if (isset($user->hasExperiences) && !empty($user->hasExperiences) && count($user->hasExperiences) > 0)
                                @foreach ($user->hasExperiences as $userExperience)
                                    <li class="mb-3 pb-1">
                                        <div class="d-flex align-items-start">
                                            <div class="badge bg-label-secondary p-2 me-3 rounded">
                                                <i class="ti ti-shadow ti-sm"></i>
                                            </div>
                                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">{{ $userExperience->title ?? '' }}</h6>
                                                    <small class="text-muted">{{ $userExperience->company ?? '' }}</small>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <p class="mb-0">{{ $userExperience->end_date ? 'Completed' : 'Current' }}</p>
                                                    <div class="ms-3 badge bg-label-success">{{ $userExperience->status ?? '' }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @else
                                <li class="mb-3 pb-1">
                                    <div class="d-flex align-items-start">
                                        <div class="badge bg-label-secondary p-2 me-3 rounded">
                                            <i class="ti ti-shadow ti-sm"></i>
                                        </div>
                                        <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">Direct Source</h6>
                                                <small class="text-muted">Direct link click</small>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <p class="mb-0">1.2k</p>
                                                <div class="ms-3 badge bg-label-success">+4.2%</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        <!--/ Source Visit -->

        <!-- Projects table -->
            <div class="col-12 col-xl-7 col-sm-7 order-1 order-lg-2 mb-4 mb-lg-0">
                <div class="card">
                    <div class="card-datatable table-responsive">
                        <table class="datatables-projects table border-top">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Leader</th>
                                    <th>Team</th>
                                    <th class="w-px-200">Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        <!--/ Projects table -->
    </div>
@endsection
@push('js')
@endpush
