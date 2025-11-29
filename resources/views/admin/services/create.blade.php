<div class="row">
    <div class="col-md-12 mb-3">
        <label class="form-label" for="title">Title <span class="text-danger">*</span></label>
        <input type="text" id="title" name="title" class="form-control" placeholder="Title: BS Computer Science" />
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
        <label class="form-label" for="image">Image</label>
        <input type="file" id="image" name="image" class="form-control" placeholder="Image" />
        <span id="image_error" class="text-danger error"></span>
    </div>
</div>

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
