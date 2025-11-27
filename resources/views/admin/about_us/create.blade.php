<div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="title">Title <span class="text-danger">*</span></label>
        <input type="text" id="title" name="title" class="form-control" placeholder="Title" autofocus />
        <span id="title_error" class="text-danger error"></span>
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-12 mb-3">
        <label class="form-label" for="short_description">Description</label>
        <textarea class="form-control" rows="5" name="short_description" id="short_description" placeholder="Enter short description">{{ old('short_description') }}</textarea>
        <span id="short_description_error" class="text-danger error"></span>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="birthday">Birthday <span class="text-danger">*</span></label>
        <input type="date" id="birthday" name="birthday" class="form-control" placeholder="Birth day" />
        <span id="birthday_error" class="text-danger error"></span>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="website">Website <span class="text-danger">*</span></label>
        <input type="text" id="website" name="website" class="form-control" placeholder="Website" />
        <span id="website_error" class="text-danger error"></span>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="phone">Phone <span class="text-danger">*</span></label>
        <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone" />
        <span id="phone_error" class="text-danger error"></span>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="city">City <span class="text-danger">*</span></label>
        <input type="text" id="city" name="city" class="form-control" placeholder="City" />
        <span id="city_error" class="text-danger error"></span>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="age">Age <span class="text-danger">*</span></label>
        <input type="number" id="age" name="age" class="form-control" placeholder="Age" />
        <span id="age_error" class="text-danger error"></span>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="degree">Degree <span class="text-danger">*</span></label>
        <input type="text" id="degree" name="degree" class="form-control" placeholder="Degree" />
        <span id="degree_error" class="text-danger error"></span>
    </div>
</div>

{{-- <div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="email">Email <span class="text-danger">*</span></label>
        <input type="email" id="email" name="email" class="form-control" placeholder="email" />
        <span id="email_error" class="text-danger error"></span>
    </div>
</div> --}}

<div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="freelance">Freelance <span class="text-danger">*</span></label>
        <input type="text" id="freelance" name="freelance" class="form-control" placeholder="Freelance" />
        <span id="freelance_error" class="text-danger error"></span>
    </div>
</div>

{{-- <div class="row">
    <div class="col-12 col-md-12 mb-3">
        <label class="form-label" for="description">Description</label>
        <textarea class="form-control" rows="5" name="description" id="description" placeholder="Enter description">{{ old('description') }}</textarea>
        <span id="description_error" class="text-danger error"></span>
    </div>
</div> --}}

<div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="image">Image</label>
        <input type="file" id="image" name="image" class="form-control" placeholder="Image" />
        <span id="image_error" class="text-danger error"></span>
    </div>
</div>

{{-- <div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="featured_image">Featured Image</label>
        <input type="file" id="featured_image" name="featured_image" class="form-control" placeholder="Featured Image" />
        <span id="featured_image_error" class="text-danger error"></span>
    </div>
</div> --}}

<div class="row">
    <div class="col-md-12 mt-2">
        <label class="form-label" for="status">Status <small class="text-danger">*</small></label>
        <select class="form-control form-select select2" name="status" id="status">
            <option value=""> Select Status </option>
            <option value="Active"> Active </option>
            <option value="De-Active"> De-Active </option>
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
