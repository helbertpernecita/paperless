<div class="card p-3">
    <div class="card-header">
        <div class="card-title">
            <h3 class="text-primary px-1">{{ $user->name }}
                <br><small><em>{{ $user->email }}</em></small>
            </h3>
        </div>
    </div>
    <div class="body mt-3">
        <form action="{{ route('user.update', $user->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="role">Role</label>
                <select name="role" id="role" class="form-control">
                    <option value="{{ $user->role }}">{{ $user->role }}</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
            <div class="form-group">
                <label for="access">Access Level</label>
                <select name="access_level" id="access_level" class="form-control">
                    <option value="{{ $user->access_level }}">Level {{ $user->access_level }}</option>
                    <option value="1">Level 1</option>
                    <option value="2">Level 2</option>
                    <option value="3">Level 3</option>
                    <option value="4">Level 4</option>
                    <option value="5">Level 5</option>
                    <option value="6">Level 6</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">&nbsp;</label>
                <input type="submit" class="btn btn-sm btn-primary float-right" value="UPDATE">
            </div>
        </form>
    </div>
</div>