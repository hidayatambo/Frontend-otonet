<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <!-- <div class="card-header pb-0 card-no-border"></div> -->
                <div class="card-body">
                    <div class="dt-ext table-responsive">
                        <div id="keytable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div style="position: absolute; height: 1px; width: 0px; overflow: hidden;"><input
                                            type="text" tabindex="0"></div>
                                    <table class="display dataTable" id="satuanDatatable" role="grid"
                                        aria-describedby="keytable_info" style="position: relative;">
                                        <thead>
                                            <tr role="row">
                                                @foreach($headers as $header)
                                                <th tabindex="0" aria-controls="keytable" rowspan="1" colspan="1"
                                                    aria-sort="ascending" style="width: 138.719px;">{{ $header }}</th>
                                                @endforeach
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('script')
<script>
    var thisTable;
    var apiUrl = "{{ $apiEndpoint }}";
    var currentSatuanId = null;
    $(document).ready(function () {
        thisTable = $('#satuanDatatable').DataTable({
            processing: true,
            serverSide: true,
            order: [
                [0, 'desc']
            ],
            ajax: function (data, callback, settings) {
                $.ajax({
                    url: apiUrl + "booking-fo/datatable",
                    headers: {
                        'Authorization': 'Bearer ' + '{{ $token }}',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // For CSRF protection in Laravel
                    },
                    dataType: "json",
                    type: "GET",
                    data: {
                        ...data,
                    },
                    success: function (response) {
                        let originalData = response.original ? response.original : response[0].original;
                        // console.log(response);
                        callback({
                            draw: originalData.draw,
                            recordsTotal: originalData.recordsTotal,
                            recordsFiltered: originalData.recordsFiltered,
                            data: originalData.data
                        });
                    },
                    error: function (xhr, textStatus, error) {
                        // console.log("AJAX error:", error);
                        window.location.href = "{{ url('auth/login') }}";
                    }
                });
            },
            columns: [
                { data: 'customer.nama', title: 'Nama', 
                    render: function(data, type, row) {
                        return `<a wire:navigate href="{{ url('front_office/booking_service/detail/${row.id}') }}" class="cursor-pointer">${row.customer.nama}</a>`
                    }   
                },
                { data: 'kendaraan.no_polisi', title: 'No Polisi', 
                    render: function(data, type, row) {
                        return data ? data : 'No Data'; // Assuming status true is 'Active' and false is 'Inactive'
                    }  
                },
                { data: 'kendaraan.tipes.nama_tipe', title: 'Tipe', 
                    render: function(data, type, row) {
                        return data ? data : 'No Data'; // Assuming status true is 'Active' and false is 'Inactive'
                    }  
                },
                { data: 'kendaraan.merks.nama_merk', title: 'Merk', 
                    render: function(data, type, row) {
                        return data ? data : 'No Data'; // Assuming status true is 'Active' and false is 'Inactive'
                    }  
                },
                { data: 'jenis_service.nama_jenissvc', title: 'Jenis Service', 
                    render: function(data, type, row) {
                        return data ? data : 'No Data'; // Assuming status true is 'Active' and false is 'Inactive'
                    }  
                },
                { data: 'rest_area.nama_rest_area', title: 'Rest Area', 
                    render: function(data, type, row) {
                        return data ? data : 'No Data'; // Assuming status true is 'Active' and false is 'Inactive'
                    }  
                },
                { data: 'status', title: 'Status', 
                    render: function(data, type, row) {
                        return data ? 'Active' : 'Inactive'; // Assuming status true is 'Active' and false is 'Inactive'
                    } 
                },
                {
                    data: null,
                    title: 'Actions',
                    orderable: false,
                    render: function (data, type, row) {
                        return `
                        <a id="edit-satuan" data-id="${row.id}" class="cursor-pointer edit-satuan" title="Edit"><i class="fa fa-edit text-primary fa-lg mx-2"></i></a>`;
                    }
                },
            ]
        });
    });
</script>
@endsection
