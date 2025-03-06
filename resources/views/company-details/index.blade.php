<x-layouts.app>

    <div class="card">
        <span class="card-header">Company Details</span>

        <div class="card-footer">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                Add Company
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
                    <th>Email</th>
                    <th>Email</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                <tr>

                </tr>
                </tbody>
            </table>
        </div>

    </div>


    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form >
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="logo" class="col-form-label">Logo:</label>
                            <input type="file" class="form-control" id="logo">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>
