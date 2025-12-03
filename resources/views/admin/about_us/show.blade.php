<table class="table table-bordered table-striped">
    @if (isset($model) && !empty($model))
        <tr>
            <th>Title</th>
            <td>
                <div class="d-flex justify-content-start align-items-center user-name">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-md me-3">
                            @if(!empty($model->main_image))
                                <img src="{{ asset('admin/assets/models/'.$model->main_image) }}" alt="Avatar" class="rounded-circle img-avatar" style="object-fit: cover">
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
            <th>Description</th>
            <td>
                {!! $model->description ?? '' !!}
            </td>
        </tr>

        <tr>
            <th>Birthday</th>
            <td>
                {!! $model->birthday ?? '' !!}
            </td>
        </tr>

        <tr>
            <th>website</th>
            <td>
                {!! $model->website ?? '' !!}
            </td>
        </tr>

        <tr>
            <th>Phone</th>
            <td>
                {!! $model->Phone ?? '' !!}
            </td>
        </tr>

        <tr>
            <th>City</th>
            <td>
                {!! $model->City ?? '' !!}
            </td>
        </tr>

        <tr>
            <th>Age</th>
            <td>
                {!! $model->Age ?? '' !!}
            </td>
        </tr>

        <tr>
            <th>Degree</th>
            <td>
                {!! $model->Degree ?? '' !!}
            </td>
        </tr>

        <tr>
            <th>Email</th>
            <td>
                {!! $model->Email ?? '' !!}
            </td>
        </tr>

        <tr>
            <th>Freelance</th>
            <td>
                {!! $model->Freelance ?? '' !!}
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
        @if (isset($model->image) && !empty($model->image))
            <tr>
                <th>Image</th>
                <td>
                    <img src="{{('admin/assets/aboutus/'.$model->image)}}" alt="No Image" width="100px" height="100px">
                </td>
            </tr>
        @endif
    @else
        <h5 class="text-danger text-center">Record not found</h5>
    @endif
</table>
