<div class="d-flex justify-content-start align-items-center user-name">
    <div class="avatar-wrapper">
        <div class="avatar avatar-md me-3">
            @if(!empty($model->hasUser->image))
                <img src="{{ asset('admin/assets/users/'.$model->hasUser->image) }}" alt="Avatar" class="rounded-circle img-avatar" style="object-fit: cover">
            @else
                <img src="{{ asset('admin/assets/placeholder.png') }}" alt="Avatar" class="rounded-circle img-avatar">
            @endif
        </div>
    </div>
    <div class="d-flex flex-column">
        <a href="{{ route('hero',$model->hasUser->id) }}" target="_blank" class="text-body text-truncate text-primary">
            {{ $model->title ?? '-' }}
        </a>
    </div>
</div>
