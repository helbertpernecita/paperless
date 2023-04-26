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
            <li class="breadcrumb-item active">items</li>
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
            <?php
                $total = 0;
                $a = count($items);
                for ($x = 1; $x <= $a; $x++) {
                $total += $items[$x-1]->purchase_price * $items[$x-1]->stock_available;
                }
            ?>
            <h4>Total Asset Amount: &#8369; {{ number_format($total,2) }}
            <span>
                <a href="" class="btn ml-2 btn-primary btn-sm py-0" data-bs-toggle="modal" data-bs-target="#modal-add-item"> Add item </a>
                
            </span></h4>
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
          <table id="itemTable" class="table  text-nowrap text-xs table-bordered table-hover">
            <thead>
            <tr>
              <th>Count</th>
              <th>Code</th>
              <th>Item Name</th>
              <th>Category</th>
              <th>Min Required</th>
              <th>Stock On hand</th>
              <th>Price</th>
              <th>Amount</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
                
              @foreach ($items as $key=>$row)
                <tr title="{{ $row->remarks }}">
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $row->code }}</td>
                  <td>{{ $row->name }}</td>
                  <td>{{ $row->category->name }}</td>
                  <td>{{ number_format($row->stock_minimum,0) }} {{ $row->unit->symbol }}</td>
                  <td>{{ number_format($row->stock_available,0) }} {{ $row->unit->symbol }}</td>
                  <td>&#8369; {{ number_format($row->purchase_price,2) }}</td>
                  <td>&#8369; {{ number_format($row->stock_available * $row->purchase_price, 2) }}</td>
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
                      <a href="{{ route('items.edit', $row->id) }}" class="btn  btn-primary btn-sm py-0" data-bs-toggle="modal" data-bs-target="#modal-update-item">Edit </a>
                      </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>Count</th>
                <th>Code</th>
                <th>Item Name</th>
                <th>category</th>
                <th>Min Required</th>
                <th>Stock</th>
                <th>Price</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        </div>
    </div>
</section>
<!-- /.content -->

<!-- MODAL -->
<div class="modal fade" id="modal-update-item">
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
<div class="modal fade" id="modal-add-item">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
    <div class="modal-content">
      <div class="modal-body">
        <!-- CREATE FORM HERE -->
        <div class="card p-3">
            <div class="card-header">
                <div class="card-title">
                    <h4 class="text-primary px-1">ADD ITEM
                    </h4>
                </div>
            </div>
            <div class="body mt-3">
                <form action="{{ route('items.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="name">Item Complete Name</label>
                                <input type="text" name="name" class="form-control" placeholder="ex. Pernecita, Helbert H.">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="code">Item Code</label>
                                <input type="text" name="code" class="form-control" placeholder="ex. 60123456">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="active">MIN STOCK
                                </label>
                                <input type="text" class="form-control" name="stock_minimum" value="1">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="unit_id">Unit</label>
                                <select name="unit_id" id="unit_id" class="form-control">
                                    <option value=""></option>
                                    @foreach ($units as $key => $row)
                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value=""></option>
                                    @foreach ($categories as $key => $row)
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
                        <input type="submit" class="btn btn-sm btn-primary" value="SAVE NEW item">
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
  let table = new DataTable('#itemTable');
</script>
    
<script>
    $('#modal-update-item').bind("show.bs.modal", function(e){
        var link = $(e.relatedTarget);
        $(this).find(".modal-body").load(link.attr("href"));
    })

    $('#modal-add-items').bind("show.bs.modal", function(e){
        var link = $(e.relatedTarget);
        $(this).find(".modal-body").load(link.attr("href"));
    })
</script>

@endpush

