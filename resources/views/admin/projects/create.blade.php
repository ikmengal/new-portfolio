<div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="title">Title <span class="text-danger">*</span></label>
        <input type="text" id="title" name="title" class="form-control" placeholder="Title" autofocus/>
        <span id="title_error" class="text-danger error"></span>
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-12 mb-3">
        <label class="form-label" for="description">Description</label>
        <textarea class="form-control" rows="5" name="description" id="description" placeholder="Enter description">{{ old('description') }}</textarea>
        <span id="description_error" class="text-danger error"></span>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="category">Category <span class="text-danger">*</span></label>
        <input type="text" id="category" name="category" class="form-control" placeholder="Category: Web, App" />
        <span id="category_error" class="text-danger error"></span>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="client_name">Client Name <span class="text-danger">*</span></label>
        <input type="text" id="client_name" name="client_name" class="form-control" placeholder="Client Name" />
        <span id="client_name_error" class="text-danger error"></span>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="project_url">Project Url <span class="text-danger">*</span></label>
        <input type="text" id="project_url" name="project_url" class="form-control" placeholder="Project Url" />
        <span id="project_url_error" class="text-danger error"></span>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="start_date">Start Date <span class="text-danger">*</span></label>
        <input type="date" id="start_date" name="start_date" class="form-control" placeholder="Start Date" />
        <span id="start_date_error" class="text-danger error"></span>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="end_date">End Date <span class="text-danger">*</span></label>
        <input type="date" id="end_date" name="end_date" class="form-control" placeholder="End Date" />
        <span id="end_date_error" class="text-danger error"></span>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="main_image">Main Image <span class="text-danger">*</span></label>
        <input type="file" id="main_image" name="main_image" class="form-control" placeholder="Main Image" />
        <span id="main_image_error" class="text-danger error"></span>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="images">Images <span class="text-danger">*</span></label>
        <input type="file" id="images" name="images[]" class="form-control" placeholder="Images" multiple/>
        <span id="images_error" class="text-danger error"></span>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mt-2">
        <label class="form-label" for="status">Status <small class="text-danger">*</small></label>
        <select class="form-control form-select select2" name="status" id="status">
            <option value=""> Select Status </option>
            <option value="Pending"> Pending </option>
            <option value="Working"> Working </option>
            <option value="Completed"> Completed </option>
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
