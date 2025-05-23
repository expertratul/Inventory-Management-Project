<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card px-5 py-5">
                <div class="row justify-content-between ">
                    <div class="align-items-center col">
                        <h4>Category</h4>
                    </div>
                    <div class="align-items-center col">
                        <button data-bs-toggle="modal" data-bs-target="#create-modal"
                            class="float-end btn m-0 bg-gradient-primary">Create</button>
                    </div>
                </div>
                <hr class="bg-secondary" />
                <div class="table-responsive">
                    <table class="table" id="tableData">
                        <thead>
                            <tr class="bg-light">
                                <th>No</th>
                                <th>Category</th>
                                <th>Update Action</th>
                                <th>Delete Action</th>
                            </tr>
                        </thead>
                        <tbody id="tableList">
                            <tr>
                                <td>01</td>
                                <td>Category name</td>
                                <td><button data-bs-toggle="modal" data-bs-target="#update-modal" class="float-end btn m-0 bg-gradient-info">Update</button></td>
                                <td><button data-bs-toggle="modal" data-bs-target="#delete-modal" class="float-end btn m-0 bg-gradient-danger">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
