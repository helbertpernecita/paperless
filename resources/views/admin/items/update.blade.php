<div class="card p-3">
    <div class="card-header">
        <div class="card-title">
            <h4 class="text-primary px-1">UPDATE ITEM INFO
            </h4>
        </div>
    </div>
    <div class="body mt-3">
        <form action="{{ route('items.update', $item->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="name">Item Complete Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $item->name }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group">
                        <label for="code">Item Code</label>
                        <input type="text" name="code" class="form-control" value="{{ $item->code }}">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="active">MIN STOCK
                        </label>
                        <input type="text" class="form-control" name="stock_minimum" value="{{ $item->stock_minimum }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="unit_id">Unit</label>
                        <select name="unit_id" id="unit_id" class="form-control">
                            <option value="{{ $item->unit_id }}">{{ $item->unit->name }}</option>
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
                            <option value="{{ $item->category_id }}">{{ $item->category->name }}</option>
                            @foreach ($categories as $key => $row)
                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="remarks">Remarks</label>
                <textarea name="remarks" id="remarks" class="form-control" cols="30" rows="5">{{ $item->remarks }}</textarea>
            </div>
            <div class="form-group">
                <label for="">&nbsp;</label>
                <input type="submit" class="btn btn-sm btn-primary" value="SAVE NEW item">
            </div>
        </form>
    </div>
</div>