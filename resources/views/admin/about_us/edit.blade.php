@method('PUT')
<div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="title">Title <span class="text-danger">*</span></label>
        <input type="text" id="title" name="title" class="form-control" placeholder="Title" value="{{ $model->title ?? '' }}" autofocus />
        <span id="title_error" class="text-danger error"></span>
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-12 mb-3">
        <label class="form-label" for="short_description">Short Description</label>
        <textarea class="form-control" rows="5" name="short_description" id="short_description" placeholder="Enter short description">{{ $model->description ?? old('short_description') }}</textarea>
        <span id="short_description_error" class="text-danger error"></span>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="birthday">Birthday <span class="text-danger">*</span></label>
        <input type="date" id="birthday" name="birthday" class="form-control" placeholder="Birth day" value="{{ $model->birthday ?? '' }}" />
        <span id="birthday_error" class="text-danger error"></span>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="website">Website <span class="text-danger">*</span></label>
        <input type="text" id="website" name="website" class="form-control" placeholder="Website" value="{{ $model->website ?? '' }}" />
        <span id="website_error" class="text-danger error"></span>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="phone">Phone <span class="text-danger">*</span></label>
        <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone" value="{{ $model->Phone ?? '' }}" />
        <span id="phone_error" class="text-danger error"></span>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="city">City <span class="text-danger">*</span></label>
        <input type="text" id="city" name="city" class="form-control" placeholder="City" value="{{ $model->City ?? '' }}" />
        <span id="city_error" class="text-danger error"></span>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="age">Age <span class="text-danger">*</span></label>
        <input type="number" id="age" name="age" class="form-control" placeholder="Age" value="{{ $model->Age ?? '' }}" />
        <span id="age_error" class="text-danger error"></span>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="degree">Degree <span class="text-danger">*</span></label>
        <input type="text" id="degree" name="degree" class="form-control" placeholder="Degree" value="{{ $model->Degree ?? '' }}" />
        <span id="degree_error" class="text-danger error"></span>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="freelance">Freelance <span class="text-danger">*</span></label>
        <input type="text" id="freelance" name="freelance" class="form-control" placeholder="Freelance" value="{{ $model->Freelance ?? '' }}" />
        <span id="freelance_error" class="text-danger error"></span>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-3 mt-3">
        <label class="form-label" for="image">Image </label>
        <input type="file" id="image" name="image" class="form-control" placeholder="Profile" />
        <span id="image_error" class="text-danger error"></span>
    </div>
    @if (isset($model->image) && !empty($model->image))
        <div>
            <img src="{{ asset('admin/assets/aboutus/'.$model->image) }}" alt="No Image" style="width: 100px; height:100px">
        </div>
    @endif
</div>

<div class="row">
    <div class="col-md-12 mt-3">
        <label class="form-label" for="status">Status <small class="text-danger">*</small></label>
        <select class="form-control form-select select2" name="status" id="status">
            <option value=""> Select Status </option>
            <option value="Active" {{ isset($model->status) && $model->status == 'Active' ? 'selected' : '' }} > Active </option>
            <option value="De-Active" {{ isset($model->status) && $model->status == 'De-Active' ? 'selected' : '' }} > De-Active </option>
        </select>
        <span id="status_error" class="text-danger error"></span>
    </div>
</div>

<script>
    $('select').each(function() {
        $(this).select2({
            dropdownParent: $(this).parent(),
        });
    });

    if (typeof description !== 'undefined') {
        CKEDITOR.replace('description');
    }
</script>
