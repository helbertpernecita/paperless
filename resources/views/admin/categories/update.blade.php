<div class="card p-3">
    <div class="card-header">
        <div class="card-title">
            <h3 class="text-primary px-1">UPDATE CATEGORY
            </h3>
        </div>
    </div>
    <div class="body mt-3">
        <form action="{{ route('categories.update', $category->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="role">Category name</label>
                <input type="text" name="name" class="form-control" value="{{ $category->name }}">
            </div>
            <div class="form-group">
                <label for="department_id">Status
                    <em class="text-muted text-xs ml-2">( 1 = Active, 2 = Deactivated  )</em>
                </label>
                <input type="text" name="active" class="form-control" value="{{ $category->active }}">
            </div>
            <div class="form-group">
                <label for="position_id">Remarks</label>
                <textarea name="remarks" id="remarks" class="form-control" cols="30" rows="5">{{ $category->remarks }}</textarea>
            </div>
            <div class="form-group">
                <label for="">&nbsp;</label>
                <input type="submit" class="btn btn-sm btn-primary" value="UPDATE">
            </div>
        </form>
    </div>
</div>