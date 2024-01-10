<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header pb-0 card-no-border">
                {{-- <h4></h4> --}}
            </div>
            <div class="card-body">
                <div class="dt-ext table-responsive">
                    <div id="keytable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <div style="position: absolute; height: 1px; width: 0px; overflow: hidden;"><input
                                        type="text" tabindex="0"></div>
                                <table class="display dataTable" id="keytable" role="grid"
                                    aria-describedby="keytable_info" style="position: relative;">
                                    <thead>
                                        <tr role="row">

                                            <th  tabindex="0" aria-controls="keytable" rowspan="1"
                                                colspan="1"
                                                aria-label="Employee Name: activate to sort column descending"
                                                aria-sort="ascending" style="width: 138.719px;">Employee Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="keytable" rowspan="1"
                                                colspan="1"
                                                aria-label="Job Designation: activate to sort column ascending"
                                                style="width: 220.047px;">Job Designation</th>
                                            <th class="sorting" tabindex="0" aria-controls="keytable" rowspan="1"
                                                colspan="1" aria-label="Company Name: activate to sort column ascending"
                                                style="width: 135.344px;">Company Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="keytable" rowspan="1"
                                                colspan="1" aria-label="Invoice No.: activate to sort column ascending"
                                                style="width: 98.875px;">Invoice No.</th>
                                            <th class="sorting" tabindex="0" aria-controls="keytable" rowspan="1"
                                                colspan="1" aria-label="Credit/Debit: activate to sort column ascending"
                                                style="width: 104.812px;">Credit/Debit</th>
                                            <th class="sorting" tabindex="0" aria-controls="keytable" rowspan="1"
                                                colspan="1" aria-label="Date: activate to sort column ascending"
                                                style="width: 72.2344px;">Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="keytable" rowspan="1"
                                                colspan="1" aria-label="Priority: activate to sort column ascending"
                                                style="width: 71.0156px;">Priority</th>
                                            <th class="sorting" tabindex="0" aria-controls="keytable" rowspan="1"
                                                colspan="1" aria-label="Budget: activate to sort column ascending"
                                                style="width: 96.3906px;">Budget</th>
                                            <th class="sorting" tabindex="0" aria-controls="keytable" rowspan="1"
                                                colspan="1" aria-label="Action: activate to sort column ascending"
                                                style="width: 81.7812px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Google Inc.</td>
                                            <td>#TY33</td>
                                            <td> <i class="icofont icofont-arrow-down me-1">2.5%</i></td>
                                            <td>2008/11/28</td>
                                            <td><span class="badge badge-light-danger">Urgent</span></td>
                                            <td>$162.700,00</td>
                                            <td>
                                                <ul class="action">
                                                    <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                                    </li>
                                                    <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">Employee Name</th>
                                            <th rowspan="1" colspan="1">Job Designation</th>
                                            <th rowspan="1" colspan="1">Company Name</th>
                                            <th rowspan="1" colspan="1">Invoice No.</th>
                                            <th rowspan="1" colspan="1">Credit/Debit</th>
                                            <th rowspan="1" colspan="1">Date</th>
                                            <th rowspan="1" colspan="1">Priority</th>
                                            <th rowspan="1" colspan="1">Budget</th>
                                            <th rowspan="1" colspan="1">Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="keytable_info" role="status" aria-live="polite">Showing
                                    1 to 10 of 57 entries</div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="keytable_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="keytable_previous">
                                            <a href="#" aria-controls="keytable" data-dt-idx="0" tabindex="0"
                                                class="page-link">Previous</a></li>
                                        <li class="paginate_button page-item active"><a href="#"
                                                aria-controls="keytable" data-dt-idx="1" tabindex="0"
                                                class="page-link">1</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="keytable"
                                                data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="keytable"
                                                data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="keytable"
                                                data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="keytable"
                                                data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="keytable"
                                                data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                        <li class="paginate_button page-item next" id="keytable_next"><a href="#"
                                                aria-controls="keytable" data-dt-idx="7" tabindex="0"
                                                class="page-link">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" type="text/css" href="{{ asset("admin/css/vendors/datatables.css") }}">
    <script src="{{ asset("admin/js/jquery.min.js") }}"></script>
    <script src="{{ asset("admin/js/datatable/datatables/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("admin/js/datatable/datatable-extension/dataTables.buttons.min.js") }}"></script>
    <script src="{{ asset("admin/js/datatable/datatable-extension/custom.js") }} "></script>
</div>
