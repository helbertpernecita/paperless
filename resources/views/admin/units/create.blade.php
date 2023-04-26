<div class="card p-3">
    <div class="card-header">
        <div class="card-title">
            <h3 class="text-primary px-1">ADD NEW UNIT
            </h3>
        </div>
    </div>
    <div class="body mt-3">
        <form action="{{ route('units.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="role">Unit name <span class="text-danger"> *</span> </label>
                <input type="text" name="name" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="position_id">Symbol <span class="text-danger"> *</span></label>
                <input name="symbol" id="symbol" class="form-control" placeholder="( unit symbol )">
            </div>
            <div class="form-group">
                <label for="">&nbsp;</label>
                <input type="submit" class="btn btn-sm btn-primary" value="SAVE">
            </div>
        </form>
    </div>
</div>