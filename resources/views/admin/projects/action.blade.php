
<div class="d-flex align-items-center">
    <a href="javascript:;" class="text-body dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
        <i class="ti ti-dots-vertical ti-xs mx-1"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-end m-0">
        {{-- @can('projects-view') --}}
            <a href="#"
                class="dropdown-item show"
                tabindex="0" aria-controls="DataTables_Table_0"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#details-modal"
                data-toggle="tooltip"
                data-placement="top"
                title="Project Detail"
                data-show-url="{{ route('projects.show', $model->id) }}"
                >
                View Details
            </a>
        {{-- @endcan --}}
        {{-- @can('projects-edit') --}}
            <a href="#"
                class="dropdown-item edit-btn"
                data-toggle="tooltip"
                data-placement="top"
                title="Edit Project"
                data-edit-url="{{ route('projects.edit', $model->id) }}"
                data-url="{{ route('projects.update', $model->id) }}"
                type="button"
                tabindex="0" aria-controls="DataTables_Table_0"
                type="button" data-bs-toggle="modal"
                data-bs-target="#addUserModal"
                >
                Edit
            </a>
        {{-- @endcan --}}
        {{-- @can('projects-delete') --}}
            <a href="javascript:;"
                class="dropdown-item delete"
                data-del-url="{{ route('projects.destroy', $model->id) }}">
                Delete
            </a>
        {{-- @endcan --}}
    </div>
</div>
