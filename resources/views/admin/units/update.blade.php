<div class="card p-3">
    <div class="card-header">
        <div class="card-title">
            <h3 class="text-primary px-1">UPDATE UNIT
            </h3>
        </div>
    </div>
    <div class="body mt-3">
        <form action="{{ route('units.update', $unit->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="role">Unit name</label>
                <input type="text" name="name" class="form-control" value="{{ $unit->name }}">
            </div>
            <div class="form-group">
                <label for="department_id">Status
                    <em class="text-muted text-xs ml-2">( 1 = Active, 2 = Deactivated  )</em>
                </label>
                <input type="text" name="active" class="form-control" value="{{ $unit->active }}">
            </div>
            <div class="form-group">
                <label for="position_id">Symbol</label>
                <input name="symbol" id="symbol" class="form-control" value="{{ $unit->symbol }}">
            </div>
            <div class="form-group">
                <label for="">&nbsp;</label>
                <input type="submit" class="btn btn-sm btn-primary" value="UPDATE">
            </div>
        </form>
    </div>
</div>