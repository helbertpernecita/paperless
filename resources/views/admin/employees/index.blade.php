@extends('layouts.app')
@section('content')

@push('css')
  
@endpush
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Admin Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Tables</a></li>
            <li class="breadcrumb-item active">Employees</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="card text-sm">
        <div class="card-header">
          <a href="" class="btn ml-2 btn-primary btn-sm py-0" data-bs-toggle="modal" data-bs-target="#modal-add-employee"> Add employee </a>
          @if ($errors->any())
            <span class="alert alert-danger float-right">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </span>
          @endif
        </div>
        <!-- /.card-header -->
        <div class="card-body table">
          <table id="employeeTable" class="table table-bordered table-hover text-sm">
            <thead>
            <tr>
              <th>Count</th>
              <th>Name</th>
              <th>Department</th>
              <th>Position</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($employees as $key=>$row)
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $row->name }}</td>
                  <td class="font-thin">{{ $row->department->name }}</td>
                  <td class="font-thin">{{ $row->position->name }}</td>
                  <td class="text-md">
                      @if($row->active == 1)
                        <span class="badge badge-pill px-3 text-success">Active</span>
                      @endif
                      @if($row->active == 2)
                        <span class="badge badge-pill px-3 text-warning">Deactivated</span>
                      @endif
                      @if($row->active > 2 || $row->active < 1 )
                        <span class="badge badge-pill px-3 text-danger">Deleted</span>
                      @endif
                  </td>
                  <td>
                    <div class="btn-group">
                      <a href="{{ route('employees.edit', $row->id) }}" class="btn  btn-primary btn-sm py-0" data-bs-toggle="modal" data-bs-target="#modal-update-employee">Edit </a>
                      @if ($row->active == 1)
                        <form action="{{ route('employees.status', $row->id) }}" method="post">
                          @csrf
                          @method('PATCH')
                            <input type="hidden" name="active" value="2">
                            <input type="submit" class="ml-1 btn btn-sm py-0 btn-warning" value="Deactivate">
                        </form>
                      @else
                        <form action="{{ route('employees.status', $row->id) }}" method="post">
                          @csrf
                          @method('PATCH')
                            <input type="hidden" name="active" value="1">
                            <input type="submit" class="ml-1 btn btn-sm py-0 btn-secondary" value="Activate">
                        </form>
                      @endif
                      </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>Count</th>
                <th>Name</th>
                <th>Department</th>
                <th>Position</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
    </div>
</section>
<!-- /.content -->

<!-- MODAL -->
<div class="modal fade" id="modal-update-employee">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
      <div class="modal-content">
      <div class="modal-body">
          <!-- CREATE FORM HERE -->
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

<!-- MODAL -->
<div class="modal fade" id="modal-add-employee">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
    <div class="modal-content">
      <div class="modal-body">
        <!-- CREATE FORM HERE -->
        <div class="card p-3">
            <div class="card-header">
                <div class="card-title">
                    <h4 class="text-primary px-1">UPDATE EMPLOYEE PROFILE
                    </h4>
                    <em class="text-info text-xs ml-2">STATUS:  1 = Active, 2 = Deactivated </em>
                </div>
            </div>
            <div class="body mt-3">
                <form action="{{ route('employees.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="form-group">
                                <label for="name">Employee Complete Name</label>
                                <input type="text" name="name" class="form-control" placeholder="ex. Pernecita, Helbert H.">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="active">Status
                                </label>
                                <input type="text" name="active" class="form-control" value="1">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="department_id">Department</label>
                                <select name="department_id" id="department_id" class="form-control">
                                    <option value=""></option>
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
                                    <option value=""></option>
                                    @foreach ($positions as $key => $row)
                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="remarks">Remarks</label>
                        <textarea name="remarks" id="remarks" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">&nbsp;</label>
                        <input type="submit" class="btn btn-sm btn-primary" value="SAVE NEW EMPLOYEE">
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@endsection

@push('js')
 {{-- datatables --}}
 <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    
<script>
  let table = new DataTable('#employeeTable');
</script>
    
<script>
    $('#modal-update-employee').bind("show.bs.modal", function(e){
        var link = $(e.relatedTarget);
        $(this).find(".modal-body").load(link.attr("href"));
    })

    $('#modal-add-employees').bind("show.bs.modal", function(e){
        var link = $(e.relatedTarget);
        $(this).find(".modal-body").load(link.attr("href"));
    })
</script>

@endpush

