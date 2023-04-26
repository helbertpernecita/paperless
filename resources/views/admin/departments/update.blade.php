<div class="card p-3">
    <div class="card-header">
        <div class="card-title">
            <h3 class="text-primary px-1">UPDATE DEPARTMENT
            </h3>
        </div>
    </div>
    <div class="body mt-3">
        <form action="{{ route('departments.update', $department->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="role">department name</label>
                <input type="text" name="name" class="form-control" value="{{ $department->name }}">
            </div>
            <div class="form-group">
                <label for="department_id">Status
                    <em class="text-muted text-xs ml-2">( 1 = Active, 2 = Deactivated  )</em>
                </label>
                <input type="text" name="active" class="form-control" value="{{ $department->active }}">
            </div>
            <div class="form-group">
                <label for="position_id">Remarks</label>
                <textarea name="remarks" id="remarks" class="form-control" cols="30" rows="5">{{ $department->remarks }}</textarea>
            </div>
            <div class="form-group">
                <label for="">&nbsp;</label>
                <input type="submit" class="btn btn-sm btn-primary" value="UPDATE">
            </div>
        </form>
    </div>
</div>