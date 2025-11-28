
<div class="d-flex align-items-center">
    <a href="javascript:;" class="text-body dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
        <i class="ti ti-dots-vertical ti-xs mx-1"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-end m-0">
        {{-- @can('educations-view') --}}
            <a href="#"
                class="dropdown-item show"
                tabindex="0" aria-controls="DataTables_Table_0"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#details-modal"
                data-toggle="tooltip"
                data-placement="top"
                title="Blog Detail"
                data-show-url="{{ route('educations.show', $model->id) }}"
                >
                View Details
            </a>
        {{-- @endcan --}}
        {{-- @can('educations-edit') --}}
            <a href="#"
                class="dropdown-item edit-btn"
                data-toggle="tooltip"
                data-placement="top"
                title="Edit About Us"
                data-edit-url="{{ route('educations.edit', $model->id) }}"
                data-url="{{ route('educations.update', $model->id) }}"
                type="button"
                tabindex="0" aria-controls="DataTables_Table_0"
                type="button" data-bs-toggle="modal"
                data-bs-target="#addUserModal"
                >
                Edit
            </a>
        {{-- @endcan --}}
        {{-- @can('educations-delete') --}}
            <a href="javascript:;"
                class="dropdown-item delete"
                data-del-url="{{ route('educations.destroy', $model->id) }}">
                Delete
            </a>
        {{-- @endcan --}}
    </div>
</div>
