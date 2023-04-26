<div class="card p-3">
    <div class="card-header">
        <div class="card-title">
            <h3 class="text-primary">UPDATE MACHINE INFO
            </h3>
        </div>
    </div>
    <div class="body mt-3">
        <form action="{{ route('machines.update', $machine->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="code">Machine Code <span class="text-danger"> *</span> </label>
                        <input type="text" name="code" class="form-control" value="{{ $machine->code }}">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label for="name">Machine name <span class="text-danger"> *</span> </label>
                        <input type="text" name="name" class="form-control" value="{{ $machine->name }}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="remarks">Description <span class="text-danger"> *</span></label>
                <textarea name="remarks" id="remarks" class="form-control" cols="30" rows="5">{{ $machine->remarks }}</textarea>
            </div>
            <div class="form-group">
                <label for="">&nbsp;</label>
                <input type="submit" class="btn btn-sm btn-primary" value="UPDATE">
            </div>
        </form>
    </div>
</div>