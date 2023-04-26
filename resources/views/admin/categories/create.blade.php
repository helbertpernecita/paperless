<div class="card p-3">
    <div class="card-header">
        <div class="card-title">
            <h3 class="text-primary px-1">ADD NEW CATEGORY
            </h3>
        </div>
    </div>
    <div class="body mt-3">
        <form action="{{ route('categories.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="role">Category name <span class="text-danger"> *</span> </label>
                <input type="text" name="name" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="position_id">Description <span class="text-danger"> *</span></label>
                <textarea name="remarks" id="remarks" class="form-control" cols="30" rows="5" placeholder="( category description )"></textarea>
            </div>
            <div class="form-group">
                <label for="">&nbsp;</label>
                <input type="submit" class="btn btn-sm btn-primary" value="SAVE">
            </div>
        </form>
    </div>
</div>