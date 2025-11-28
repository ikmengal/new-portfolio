<table class="table table-bordered table-striped">
    @if (isset($model) && !empty($model))
        <tr>
            <th>Title</th>
            <td>
                <div class="d-flex justify-content-start align-items-center user-name">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-md me-3">
                            @if(!empty($model->hasUser->image))
                                <img src="{{ asset('admin/assets/models/'.$model->hasUser->image) }}" alt="Avatar" class="rounded-circle img-avatar" style="object-fit: cover">
                            @else
                                <img src="{{ asset('admin/assets/placeholder.png') }}" alt="Avatar" class="rounded-circle img-avatar">
                            @endif
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <a href="javascrip:;" class="text-body text-truncate text-primary">
                            {{ $model->hasUser->name ?? '-' }}
                        </a>
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <th>Title</th>
            <td>
                {{ $model->title ?? '' }}
            </td>
        </tr>

        <tr>
            <th>Company</th>
            <td>
                {{ $model->company ?? '' }}
            </td>
        </tr>

        <tr>
            <th>Description</th>
            <td>
                {!! $model->description ?? '' !!}
            </td>
        </tr>

        <tr>
            <th>Start Date</th>
            <td>
                {{ $model->start_date ?? '' }}
            </td>
        </tr>

        <tr>
            <th>End Date</th>
            <td>
                {{ $model->end_date ?? '' }}
            </td>
        </tr>


        <tr>
            <th>City</th>
            <td>
                {{ $model->City ?? '' }}
            </td>
        </tr>

        <tr>
            <th>Status</th>
            <td>
                @if($model->status=='Active')
                    <span class="badge bg-label-success">Active</span>
                @elseif($model->status=='De-Active')
                    <span class="badge bg-label-danger">De-Active</span>
                @endif
            </td>
        </tr>
        <tr>
            <th>Created At</th>
            <td>{{ dateFormat($model->created_at) ?? '' }}</td>
        </tr>

    @else
        <h5 class="text-danger text-center">Record not found</h5>
    @endif
</table>
