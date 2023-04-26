<div class="card p-3">
    <div class="card-header">
        <div class="card-title">
            <h3 class="text-primary px-1">ADD NEW SUPPLIER
            </h3>
        </div>
    </div>
    <div class="body mt-3">
        <form action="{{ route('suppliers.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Company Name <span class="text-danger"> *</span> </label>
                <input type="text" name="name" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="email">Company Email <span class="text-danger"> *</span> </label>
                <input type="text" name="email" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="address">Company Address <span class="text-danger"> *</span> </label>
                <input type="text" name="address" class="form-control" value="">
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="contact_person">Contact Person <span class="text-danger"> *</span> </label>
                        <input type="text" name="contact_person" class="form-control" value="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label for="contact_number">Contact Number<span class="text-danger"> *</span> </label>
                        <input type="text" name="contact_number" class="form-control" value="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="remarks">Description <span class="text-danger"> *</span></label>
                <textarea name="remarks" id="remarks" class="form-control" cols="30" rows="5" placeholder="( machine description or informations here... )"></textarea>
            </div>
            <div class="form-group">
                <label for="">&nbsp;</label>
                <input type="submit" class="btn btn-sm btn-primary" value="SAVE">
            </div>
        </form>
    </div>
</div>