<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0 card-no-border">
                    <div class="row">
                        <div class="col-6">
                            <a wire:navigate type="button" class="btn btn-primary btn-sm mb-2"
                                href="{{ route('master/barang/form') }}">Create Barang</a>
                            <button type="button" class="btn btn-primary btn-sm mb-2" id="btn_import">Import
                                Barang</button>
                            <button type="button" class="btn btn-primary btn-sm mb-2" id="btn_excel">Download dokumen
                                stock opname barang</button>
                        </div>
                        <div class="col-6">
                            <div class="row float-end">
                                <select class="form-select form-select-sm" style="width:auto;" name="divisi"
                                    id="search_divisi">
                                    <option value="">-- DIVISI --</option>
                                    @foreach($divisi_sparepart['data'] as $item)
                                    <option value="{{$item['divisi']}}">{{$item['divisi']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="flash-message" style="">
                    </div>
                    <div class="dt-ext table-responsive">
                        <div id="keytable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="display dataTable" id="barangDatatable" role="grid"
                                        aria-describedby="keytable_info" style="position: relative;">
                                        <thead>
                                            <tr role="row">
                                                @foreach($headers as $header)
                                                <th wire:click="sortBy('{{ $header }}')" tabindex="0"
                                                    aria-controls="keytable" rowspan="1" colspan="1"
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
    <div class="modal fade" id="importModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="importLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="importModalTitle">Import</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method='post' enctype="multipart/form-data" id="importExcel">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">File</label>
                            <input type="file" class="form-control" name="file">
                        </div>
                        <div class="mb-3">
                            <a href="{{ url('admin/xlsx/import_barang_baru.xlsx') }}"
                                class="btn btn-info btn-sm">Download
                                Format Excel</a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal"
                            aria-label="Close">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-sm" id="import">Import</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@section('script')
<script>
    $(document).ready(function () {
        var apiUrl = "{{ $apiEndpoint }}";

        var isFirstRequest = true; // Flag to indicate the first request
        var thisTable;
        var currentBarangId = null;
        thisTable = $('#barangDatatable').DataTable({
            processing: true,
            serverSide: true,
            order: [
                [0, 'desc']
            ],
            ajax: function (data, callback, settings) {
                $.ajax({
                    url: apiUrl + "barangdatatable",
                    type: 'GET',
                    data: {
                        ...data,
                        divisi_sparepart: function () {
                            return $('#search_divisi').val()
                        }
                    },
                    headers: {
                        'Authorization': 'Bearer ' + '{{ $token }}',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                            'content') // For CSRF protection in Laravel
                    },
                    success: function (response) {
                        let originalData = response.original ? response.original :
                            response[0].original;
                        callback({
                            draw: originalData.draw,
                            recordsTotal: originalData.recordsTotal,
                            recordsFiltered: originalData.recordsFiltered,
                            data: originalData.data
                        });
                    },
                    error: function (xhr, textStatus, error) {
                        // console.log("AJAX error:", error);
                        alert("review your answer");
                        window.location.href = "{{ url('auth/login') }}";
                    }
                });
            },
            columnDefs: [{
                'targets': 8,
                'searchable': false,
                'render': function (data, type, full, meta) {
                    // If data is null or 0, return 'Active', otherwise return 'Non Active'
                    return (!data || data == 0) ? 'Active' : 'Non Active';
                }
            }, {
                targets: [6, 7],
                render: $.fn.dataTable.render.number(',', '.', 0, '')
            }],
            columns: [{
                    data: "kode",
                },
                {
                    data: "nama",
                },
                {
                    data: "divisi",
                },
                {
                    data: "brand",
                },
                {
                    data: "kode_2",
                },
                {
                    data: "qty",
                },
                {
                    data: "harga_beli",
                },
                {
                    data: "harga_jual",
                },
                {
                    data: "deleted",
                },
                {
                    data: null,
                    title: 'Actions',
                    orderable: false,
                    render: function (data, type, row) {
                        return `<a href="{{ url('master/barang/edit') }}/${row.id}" id="edit_barang" data-id="${row.id}" class="cursor-pointer edit-btn" title="Edit"><i class="fa fa-edit text-primary fa-lg mx-2"></i></a>
                        <a id="delete_barang" data-id="${row.id}"  class="delete-barang edit delete cursor-pointer"><i class="fa fa-trash-o text-danger fa-lg mx-2"></i></a>`;
                    }
                }
            ],
            dom: 'lfrtip',
            buttons: [{
                extend: 'excelHtml5',
                title: '',
                messageTop: null,
                orientation: 'landscape',
                pageSize: 'LEGAL',
                exportOptions: {
                    columns: ':not(.notSto)'
                },
                filename: 'Format Import Stock Opname'
            }],
            lengthMenu: [
                [10, 50, 100, 500],
                [10, 50, 100, 500]
            ],
        });

        $('#barangDatatable').on('click', '.delete-barang', function (e) {
            currentBarangId = $(this).data('id'); // Get the ID of the record

            Swal.fire({
                title: "Apa kamu yakin?",
                text: "Kamu tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, hapus!",
                cancelButtonText: "Batal",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: apiUrl + "barang/" + currentBarangId,
                        type: "DELETE",
                        headers: {
                            'Authorization': 'Bearer ' + '{{ $token }}',
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                'content') // For CSRF protection in Laravel
                        },
                        success: function (response) {
                            Swal.fire("Terhapus!", response.msg, "success");
                            $("#barangDatatable").DataTable().ajax.reload();
                        },
                    });

                }
            });
        });

        $('#btn_excel').on('click', function () {
            toastr["info"]("Excel stock opname sedang didownload");
            $("#barangDatatable").DataTable().button('0').trigger();
        });

        $("#btn_import").click(function () {
            $("#importModal").modal('show');
        })
        $("#import").click(function (event) {
            event.preventDefault();
            var formData = new FormData($('#importExcel')[0]);
            $("#import").prop('disabled', true);
            $.ajax({
                url: apiUrl + "barang/import",
                type: "POST",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content') // For CSRF protection in Laravel
                },
                processData: false,
                contentType: false, 
                data: formData,
                dataType: "json",
                success: function (response) {
                    if (response.status == 200) {
                        toastr["success"](response.message);
                        thisTable.ajax.reload(null, false);
                        $("#importModal").modal('hide');
                    } else {
                       flashMessage(response.data, 'error');
                    }
                    $('[id^="error_"]').text('');
                    $("#import").prop('disabled', false);
                },
                error: function (xhr) {
                    if (xhr.status === 400) {
                        $('.txt-danger').text('');
                        // Extract and display validation errors
                        var errors = xhr.responseJSON.error;
                        for (var key in errors) {
                            if (errors.hasOwnProperty(key)) {
                                var errorMessage = errors[key][0];
                                $('#error_' + key).text(errorMessage);
                            }
                        }
                    } else if (xhr.status === 401) { // Check for unauthorized status
                        // Redirect to the login page
                        window.location.href = "{{ url('auth/login') }}";
                    }else if (xhr.status === 500)
                    {
                        var messages = xhr.responseJSON.data || ["An error occurred on the server."]; // Fallback message
                        console.log(messages);
                        flashMessage(messages, 'danger');
                    }
                    $("#import").prop('disabled', false);
                }
            });
            $("#importModal").modal('hide');
        });
   
        $('#search_divisi').on('change', function() {
            $("#barangDatatable").DataTable().ajax.reload();
        });
   
    });

</script>
@endsection
