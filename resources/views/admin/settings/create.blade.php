@extends('admin.admin-layouts.master')
@push('title', $title .' | '. setting()->name ?? appName())
@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title mb-3">Company Settings</h5>
        </div>
        <div class="col-xl-10 offset-1">
            <div class="card-body">
                <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                        <label for="name" class="col-md-2 col-form-label">Name</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="" name="name" id="name" placeholder="Enter company name"/>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                            <span id="name_error" class="text-danger error">{{ $errors->first('name') }}</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="white_logo" class="col-md-2 col-form-label">White Logo</label>
                        <div class="col-md-10">
                            <input class="form-control" name="white_logo" type="file" id="white_logo" />
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                            <span id="white_logo_error" class="text-danger error">{{ $errors->first('white_logo') }}</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="white_logo" class="col-md-2 col-form-label"></label>
                        <div class="col-md-10">
                            <div id="white_logo-preview"></div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="favicon" class="col-md-2 col-form-label">Favicon</label>
                        <div class="col-md-10">
                            <input class="form-control" name="favicon" type="file" id="favicon" />
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                            <span id="favicon_error" class="text-danger error">{{ $errors->first('favicon') }}</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="favicon" class="col-md-2 col-form-label"></label>
                        <div class="col-md-10">
                            <div id="favicon-preview"></div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="black_logo" class="col-md-2 col-form-label">Black Logo</label>
                        <div class="col-md-10">
                            <input class="form-control" name="black_logo" type="file" id="black_logo" />
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                            <span id="black_logo_error" class="text-danger error">{{ $errors->first('black_logo') }}</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="black_logo" class="col-md-2 col-form-label"></label>
                        <div class="col-md-10">
                            <div id="black_logo-preview"></div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                            <input class="form-control" type="email" name="email" id="email" placeholder="Enter email" />
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                            <span id="email_error" class="text-danger error">{{ $errors->first('email') }}</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="url" class="col-md-2 col-form-label">Url</label>
                        <div class="col-md-10">
                            <input class="form-control" type="url" name="url" id="url" placeholder="Enter url" />
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                            <span id="url_error" class="text-danger error">{{ $errors->first('url') }}</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="description" class="col-md-2 col-form-label">Description</label>
                        <div class="col-md-10">
                            <textarea name="description" id="description" class="form-control" placeholder="Enter description">{{ old('description') }}</textarea>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                            <span id="description_error" class="text-danger error">{{ $errors->first('description') }}</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="phone_number" class="col-md-2 col-form-label">Phone Number</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="phone_number" id="phone_number" placeholder="Enter phone_number" />
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                            <span id="phone_number_error" class="text-danger error">{{ $errors->first('phone_number') }}</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="address" class="col-md-2 col-form-label">Address</label>
                        <div class="col-md-10">
                            <textarea name="address" id="address" class="form-control" placeholder="Enter address">{{ old('address') }}</textarea>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                            <span id="address_error" class="text-danger error">{{ $errors->first('address') }}</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
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
            $('#logo').change(function() {
                var file = this.files[0];
                var reader = new FileReader();

                reader.onload = function(e) {
                // Create an image element
                var img = $('<img style="width:10%; height:5%">').attr('src', e.target.result);

                // Display the image preview
                $('#logo-preview').html(img);
                }

                // Read the image file as a data URL
                reader.readAsDataURL(file);
            });

            $('#favicon').change(function() {
                var file = this.files[0];
                var reader = new FileReader();

                reader.onload = function(e) {
                // Create an image element
                var img = $('<img style="width:10%; height:5%">').attr('src', e.target.result);

                // Display the image preview
                $('#favicon-preview').html(img);
                }

                // Read the image file as a data URL
                reader.readAsDataURL(file);
            });

            $('#banner').change(function() {
                var file = this.files[0];
                var reader = new FileReader();

                reader.onload = function(e) {
                // Create an image element
                var img = $('<img style="width:10%; height:5%">').attr('src', e.target.result);

                // Display the image preview
                $('#banner-preview').html(img);
                }

                // Read the image file as a data URL
                reader.readAsDataURL(file);
            });
        });
    </script>
@endpush
