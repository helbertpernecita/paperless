<div class="card p-3">
    <div class="card-header">
        <div class="card-title">
            <h4 class="text-primary px-1">UPDATE EMPLOYEE PROFILE
            </h4>
            <em class="text-info text-xs ml-2">STATUS:  1 = Active, 2 = Deactivated </em>
        </div>
    </div>
    <div class="body mt-3">
        <form action="{{ route('employees.update', $employee->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-sm-9">
                    <div class="form-group">
                        <label for="name">Employee Complete Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $employee->name }}">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="active">Status
                        </label>
                        <input type="text" name="active" class="form-control" value="{{ $employee->active }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="department_id">Department</label>
                        <select name="department_id" id="department_id" class="form-control">
                            <option value="{{ $employee->department_id }}">{{ $employee->department->name }}</option>
                            @foreach ($departments as $key => $row)
                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="position_id">Position</label>
                        <select name="position_id" id="position_id" class="form-control">
                            <option value="{{ $employee->position_id }}">{{ $employee->position->name }}</option>
                            @foreach ($positions as $key => $row)
                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="remarks">Remarks</label>
                <textarea name="remarks" id="remarks" class="form-control" cols="30" rows="5">{{ $employee->remarks }}</textarea>
            </div>
            <div class="form-group">
                <label for="">&nbsp;</label>
                <input type="submit" class="btn btn-sm btn-primary" value="UPDATE">
            </div>
        </form>
    </div>
</div>