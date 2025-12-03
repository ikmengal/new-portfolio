@extends('admin.admin-layouts.master')
@push('title', $title .'|'. setting()->name ?? appName())
@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title mb-3">Edit Profile</h5>
        </div>
        <div class="col-xl-10 offset-1">
            <div class="card-body">
                <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf {{ method_field('PATCH') }}
                    <div class="mb-3 row">
                        <label for="name" class="col-md-2 col-form-label">Name</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $user->name ?? '' }}" name="name" id="name" placeholder="Name"/>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                            <span id="name_error" class="text-danger error">{{ $errors->first('name') }}</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                            <input class="form-control" type="email" name="email" id="email" value="{{ $user->email ?? '' }}" placeholder="Email" />
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                            <span id="email_error" class="text-danger error">{{ $errors->first('email') }}</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="image" class="col-md-2 col-form-label">Image</label>
                        <div class="col-md-10">
                            <input class="form-control" name="image" type="file" id="image" />
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                            <span id="image_error" class="text-danger error">{{ $errors->first('image') }}</span>
                        </div>
                    </div>
                    <div class="row">
                        <label for="image" class="col-md-2 col-form-label"></label>
                        <div class="col-md-10">
                            @if (!empty($user->image))
                                <div id="image" class="p-3 w-25 rounded bg-light">
                                    <img class="img-fluid img-thumbnail w-50 mx-auto" src="{{ asset('admin/assets/users') }}/{{ $user->image }}" alt="">
                                </div>
                            @else
                                <div id="image-preview"></div>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3 mt-3">
                        <label for="address" class="col-md-2 col-form-label"></label>
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit waves-effect waves-light">Submit</button>
                            <button type="reset" class="btn btn-label-secondary waves-effect" data-bs-dismiss="offcanvas">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            // When the file input changes
            $('#image').change(function() {
                var file = this.files[0];
                var reader = new FileReader();

                reader.onload = function(e) {
                // Create an image element
                var img = $('<img style="width:10%; height:5%">').attr('src', e.target.result);

                // Display the image preview
                $('#image-preview').html(img);
                }

                // Read the image file as a data URL
                reader.readAsDataURL(file);
            });
        });
    </script>
@endpush
