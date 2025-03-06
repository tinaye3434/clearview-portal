<div>
    <div class="card">
        <span class="card-header">Company Details</span>

        <div class="card-footer">
            <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#addModal">
                Add User
            </button>
        </div>
    </div>

    <div class="card">

        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($results as $item)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->role }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm m-1 form-control">Edit</button>
                            <button type="button" class="btn btn-warning btn-sm m-1 form-control">Reset</button>
                            <button type="button" class="btn btn-danger btn-sm m-1 form-control">Deactivate</button>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>


    <div wire:ignore.self class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit="store">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Name:</label>
                            <input wire:model="name" type="text" class="form-control" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="address" class="col-form-label">Address:</label>
                            <input wire:model="address" type="text" class="form-control" id="address" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="phone" class="col-form-label">Phone:</label>
                                <input wire:model="phone" type="number" class="form-control" id="phone" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="phone" class="col-form-label">Email:</label>
                                <input wire:model="email" type="email" class="form-control" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-form-label">Role:</label>
                            <select wire:model="role" class="form-control" name="role" required>
                                <option value="">--Select--</option>
                                <option value="ngo">NGO</option>
                                <option value="donor">Donor</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
