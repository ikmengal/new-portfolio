<table class="table table-bordered table-striped">
    @if (isset($model) && !empty($model))
        <tr>
            <th>Title</th>
            <td>
                <div class="d-flex justify-content-start align-items-center user-name">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-md me-3">
                            @if(!empty($model->main_image))
                                <img src="{{ asset('admin/assets/projects/'.$model->main_image) }}" alt="Avatar" class="rounded-circle img-avatar" style="object-fit: cover">
                            @else
                                <img src="{{ asset('admin/assets/placeholder.png') }}" alt="Avatar" class="rounded-circle img-avatar">
                            @endif
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <a href="javascrip:;" class="text-body text-truncate text-primary">
                            {{ $model->title ?? '-' }}
                        </a>
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <th>Category</th>
            <td>
                <span class="badge bg-label-success">{{ $model->category ?? '' }}</span>
            </td>
        </tr>

        <tr>
            <th>Description</th>
            <td>
                {!! $model->description ?? '' !!}
            </td>
        </tr>

        <tr>
            <th>Client Name</th>
            <td>
                {{ $model->client_name ?? '' }}
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
            <th>Project Url</th>
            <td>
                {{ $model->project_url ?? '' }}
            </td>
        </tr>

        <tr>
            <th>Status</th>
            <td>
                @if($model->status=='Pending')
                    <span class="badge bg-label-danger">{{ $model->status }}</span>
                @elseif($model->status=='Completed')
                    <span class="badge bg-label-success">{{ $model->status }}</span>
                @elseif($model->status=='Working')
                    <span class="badge bg-label-warnung">{{ $model->status }}</span>
                @endif
            </td>
        </tr>

        <tr>
            <th>Created At</th>
            <td>{{ dateFormat($model->created_at) ?? '' }}</td>
        </tr>

        @if (isset($model['hasImages']) && !empty($model['hasImages']) && count($model['hasImages'])>0)
            <tr>
                <th>Images</th>
                <td>
                    @foreach ($model['hasImages'] as $image)
                        <img src="{{ asset('admin/assets/projects/'.$image->image) }}" alt="No Image" style="width: 100px; height:100px">
                    @endforeach
                </td>
            </tr>
        @endif
    @else
        <h5 class="text-danger text-center">Record not found</h5>
    @endif
</table>
