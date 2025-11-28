@extends('admin.admin-layouts.master')
@push('title', $title.' | '. setting() ?? AppName())
@section('content')
    @if(request()->is('educations/trashed'))
        <input type="hidden" id="page_url" value="{{ route('educations.trashed') }}">
    @else
        <input type="hidden" id="page_url" value="{{ route('educations.index') }}">
    @endif
    <div class="card mb-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card-header">
                    <h4 class="fw-bold mb-0"><span class="text-muted fw-light">Home /</span> {{ $title }}</h4>
                </div>
            </div>
            {{-- @canany(['educations-create','educations-trashed', 'educations-list']) --}}
                <div class="col-md-6">
                    @if(request()->is('educations/trashed'))
                        {{-- @can('educations-list') --}}
                            <div class="dt-buttons btn-group flex-wrap float-end mt-4">
                                <a data-toggle="tooltip" data-placement="top" title="View ALl Records" href="{{ route('educations.index') }}" class="btn btn-success btn-primary mx-3">
                                    <span>
                                        <i class="ti ti-eye me-0 me-sm-1 ti-xs"></i>
                                        <span class="d-none d-sm-inline-block">View All Records</span>
                                    </span>
                                </a>
                            </div>
                        {{-- @endcan --}}
                    @else
                        <div class="dt-buttons btn-group flex-wrap float-end mt-4">
                            {{-- @can('educations-create') --}}
                                <button
                                    id="add-btn"
                                    data-toggle="tooltip" data-placement="top"
                                    data-url="{{ route('educations.store') }}"
                                    data-create-url="{{ route('educations.create') }}"
                                    class="btn add-new btn-primary mb-3 mb-md-0 mx-3"
                                    tabindex="0" aria-controls="DataTables_Table_0"
                                    type="button" data-bs-toggle="modal"
                                    title="Add Education"
                                    data-bs-target="#addUserModal">
                                    <span>
                                        <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i>
                                        <span class="d-none d-sm-inline-block"> Add Education </span>
                                    </span>
                                </button>
                            {{-- @endcan --}}
                        </div>
                        {{-- @can('educations-trashed') --}}
                            <div class="dt-buttons btn-group flex-wrap float-end mt-4">
                                <a data-toggle="tooltip" data-placement="top" title="View ALl Trashed Records" href="{{ route('educations.trashed') }}" class="btn btn-label-danger mx-1">
                                    <span>
                                        <i class="ti ti-trash me-0 me-sm-1 ti-xs"></i>
                                        <span class="d-none d-sm-inline-block">View All Trashed Records</span>
                                    </span>
                                </a>
                            </div>
                        {{-- @endcan --}}
                    @endif
                </div>
            {{-- @endcanany --}}
        </div>
    </div>

    <!-- Education List Table -->
    <div class="card">
        <div class="card-datatable table-responsive">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                <div class="container-fluid">
                    <table class="datatables-users table border-top dataTable no-footer dtr-column data_table table-responsive" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1227px;">
                        <thead>
                            <tr>
                                <th>S.No#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="body"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Education Modal -->
        <div class="modal fade" id="addUserModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content p-3 p-md-5">
                    <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <div class="text-center mb-4">
                            <h3 class="mb-2" id="modal-label">Add Education</h3>
                        </div>
                        <form id="create-form" data-modal-id="addUserModal" class="row submitBtnWithFileUpload" data-method="" action="" enctype="multipart/form-data">
                            @csrf
                            <div id="edit-content">

                            </div>

                            <div class="col-12 mt-2 action-btn">
                                <div class="demo-inline-spacing sub-btn">
                                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                    <button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">
                                        Cancel
                                    </button>
                                </div>
                                <div class="demo-inline-spacing loading-btn" style="display: none;">
                                    <button class="btn btn-primary waves-effect waves-light" type="button" disabled="">
                                    <span class="spinner-border me-1" role="status" aria-hidden="true"></span>
                                        Loading...
                                    </button>
                                    <button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!--/ Add Education Modal -->

    <div class="modal fade" id="details-modal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-lg modal-dialog-centered1 modal-simple modal-add-new-cc">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                        <h3 class="mb-2" id="modal-label"></h3>
                    </div>

                    <div class="col-12">
                        <span id="show-content"></span>
                    </div>

                    <div class="col-12 mt-3 text-end">
                        <button type="reset" class="btn btn-label-primary btn-reset" data-bs-dismiss="modal" aria-label="Close">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('js')
    <script>
        $(document).ready(function() {
            loadTable();
            selectInit();
        });

        function loadTable(){
            var table = $('.data_table').DataTable();
            if ($.fn.DataTable.isDataTable('.data_table')) {
                table.destroy();
            }
            var page_url = $('#page_url').val();
            var table = $('.data_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: page_url+"?loaddata=yes",
                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    },
                ]
            });
        }

        function selectInit() {
            setTimeout(() => {
                $('select').each(function() {
                    $(this).select2({
                        dropdownParent: $(this).parent(),
                    });
                });
            }, 1000);
        }
    </script>
@endpush
