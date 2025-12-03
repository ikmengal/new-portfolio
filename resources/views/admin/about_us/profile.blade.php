<div class="d-flex justify-content-start align-items-center user-name">
    <div class="avatar-wrapper">
        <div class="avatar avatar-md me-3">
            @if(!empty($model->image))
                <img src="{{ asset('admin/assets/aboutus/'.$model->image) }}" alt="Avatar" class="rounded-circle img-avatar" style="object-fit: cover">
            @else
                <img src="{{ asset('admin/assets/placeholder.png') }}" alt="Avatar" class="rounded-circle img-avatar">
            @endif
        </div>
    </div>
    <div class="d-flex flex-column">
        <a href="{{ route('hero',$model->user_id) }}" target="_blank" class="text-body text-truncate text-primary">
            {{ $model->title ?? '-' }}
        </a>
    </div>
</div>
