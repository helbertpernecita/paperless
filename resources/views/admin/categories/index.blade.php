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
            <li class="breadcrumb-item active">Categories</li>
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
          <a href="{{ route('categories.create') }}" class="btn ml-2 btn-primary btn-sm py-0" data-bs-toggle="modal" data-bs-target="#modal-add-category"> Add Category </a>
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
          <table id="categoryTable" class="table table-bordered table-hover text-sm">
            <thead>
            <tr>
              <th>Count</th>
              <th>Name</th>
              <th>Description</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($categories as $key=>$row)
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $row->name }}</td>
                  <td class="font-thin">{{ $row->remarks }}</td>
                  <td class="text-md">
                      @if($row->active == 1)
                        <span class="badge badge-pill px-3 text-success">Active</span>
                      @endif
                      @if($row->active == 2)
                        <span class="badge badge-pill px-3 text-danger">Deactivated</span>
                      @endif
                  </td>
                  <td>
                    <div class="btn-group">
                      <a href="{{ route('categories.edit', $row->id) }}" class="btn  btn-primary btn-sm py-0" data-bs-toggle="modal" data-bs-target="#modal-update-category">Edit </a>
                      @if ($row->active == 1)
                        <form action="{{ route('categories.status', $row->id) }}" method="post">
                          @csrf
                          @method('PATCH')
                            <input type="hidden" name="active" value="2">
                            <input type="submit" class="ml-1 btn btn-sm py-0 btn-warning" value="Deactivate">
                        </form>
                      @else
                        <form action="{{ route('categories.status', $row->id) }}" method="post">
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
              <th>Description</th>
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
<div class="modal fade" id="modal-update-category">
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
<div class="modal fade" id="modal-add-category">
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
  let table = new DataTable('#categoryTable');
</script>
    
<script>
    $('#modal-update-category').bind("show.bs.modal", function(e){
        var link = $(e.relatedTarget);
        $(this).find(".modal-body").load(link.attr("href"));
    })

    $('#modal-add-category').bind("show.bs.modal", function(e){
        var link = $(e.relatedTarget);
        $(this).find(".modal-body").load(link.attr("href"));
    })
</script>

@endpush

