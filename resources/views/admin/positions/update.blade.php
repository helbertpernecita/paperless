<div class="card p-3">
    <div class="card-header">
        <div class="card-title">
            <h3 class="text-primary px-1">UPDATE POSTION
            </h3>
        </div>
    </div>
    <div class="body mt-3">
        <form action="{{ route('positions.update', $position->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="role">Position name</label>
                <input type="text" name="name" class="form-control" value="{{ $position->name }}">
            </div>
            <div class="form-group">
                <label for="position_id">Status
                    <em class="text-muted text-xs ml-2">( 1 = Active, 2 = Deactivated  )</em>
                </label>
                <input type="text" name="active" class="form-control" value="{{ $position->active }}">
            </div>
            <div class="form-group">
                <label for="position_id">Remarks</label>
                <textarea name="remarks" id="remarks" class="form-control" cols="30" rows="5">{{ $position->remarks }}</textarea>
            </div>
            <div class="form-group">
                <label for="">&nbsp;</label>
                <input type="submit" class="btn btn-sm btn-primary" value="UPDATE">
            </div>
        </form>
    </div>
</div>