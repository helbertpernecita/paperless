@extends('layouts.app')
@section('content')

@push('css')
   
@endpush
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-12">
            <h1 class="m-0 text-dark">Admin Page
             
              <small class="float-right text-md">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active">Users</li>
                </ol>
              </small><!-- /.col -->
            </h1>
            
        </div><!-- /.col -->
        
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">USERS LIST</h3> 
          @if (session()->has('message'))
          <span class="font-medium text-sm text-danger float-right"><em>
              {{ __('Error!, check your details and submit again.') }}
          </em></span>
         @endif
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="myTable" class="table table-xs table-hover text-xs table-striped">
            <thead>
            <tr>
              <th>Count</th>
              <th>Name</th>
              <th>Email</th>
              <th>Status</th>
              <th>Role</th>
              <th>Access Level</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($users as $key=>$row)
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $row->name }}</td>
                  <td>{{ $row->email }}</td>
                  <th>
                    @if($row->active == 1)
                      <span class="badge badge-pill px-3 badge-success">Active</span>
                    @endif
                    @if($row->active == 2)
                      <span class="badge badge-pill px-3 badge-warning">Inactive</span>
                    @endif
                    @if($row->active == 3)
                      <span class="badge badge-pill px-3 badge-danger">Deactivated</span>
                    @endif
                  </th>

                  <th>{{ $row->role }}</th>
                  <th>Level {{ $row->access_level }}</th>
                  <td>
                    <a href="{{ route('user.edit', $row->id) }}" class="btn btn-sm py-0 btn-primary" data-bs-toggle="modal" data-bs-target="#modal-update-user ">Edit Access</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>Count</th>
              <th>Name</th>
              <th>Email</th>
              <th>Status</th>
              <th>Role</th>
              <th>Access Level</th>
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
<div class="modal fade" id="modal-update-user">
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

@endsection

@push('js')

{{-- datatables --}}
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script>
  let table = new DataTable('#myTable');
</script>
    
<script>
    $('#modal-update-user').bind("show.bs.modal", function(e){
        var link = $(e.relatedTarget);
        $(this).find(".modal-body").load(link.attr("href"));
    })
</script>

@endpush

