<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card px-5 py-5">
                <div class="row justify-content-between ">
                    <div class="align-items-center col">
                        <h5>Invoices</h5>
                    </div>
                    <div class="align-items-center col">
                        <a href="{{ url('/salePage') }}" class="float-end btn m-0 bg-gradient-primary">Create Sale</a>
                    </div>
                </div>
                <hr class="bg-dark " />
                <table class="table" id="tableData">
                    <thead>
                        <tr class="bg-light">
                            <th>No</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Total</th>
                            <th>Vat</th>
                            <th>Discount</th>
                            <th>payment</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="tableList">
                        <tr>
                            <th>01</th>
                            <th>ratul</th>
                            <th>01776242413</th>
                            <th>07</th>
                            <th>5%</th>
                            <th>50%</th>
                            <th>$299</th>
                            <th><button data-bs-toggle="modal" data-bs-target="#details-modal" class="float-end btn m-0 bg-gradient-success">Details</button></th>
                            <th><button data-bs-toggle="modal" data-bs-target="#delete-modal" class="float-end btn m-0 bg-gradient-danger">Delete</button></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
