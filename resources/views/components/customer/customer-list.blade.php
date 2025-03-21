<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card px-5 py-5">
                <div class="row justify-content-between ">
                    <div class="align-items-center col">
                        <h4>Customer</h4>
                    </div>
                    <div class="align-items-center col">
                        <button data-bs-toggle="modal" data-bs-target="#create-modal"
                            class="float-end btn m-0 bg-gradient-primary">Create</button>
                    </div>
                </div>
                <hr class="bg-dark " />
                <table class="table" id="tableData">
                    <thead>
                        <tr class="bg-light">
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Customer Update</th>
                            <th>Customer Delete</th>
                        </tr>
                    </thead>
                    <tbody id="tableList">
                        <tr>
                            <th>01</th>
                            <th>Ratul</th>
                            <th>info@ratul.com</th>
                            <th>01776242413</th>
                            <th><button data-bs-toggle="modal" data-bs-target="#update-modal" class="float-end btn m-0 bg-gradient-info">update</button></th>
                            <th><button data-bs-toggle="modal" data-bs-target="#delete-modal" class="float-end btn m-0 bg-gradient-danger">Delete</button></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
