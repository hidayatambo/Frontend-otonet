<div>
    {{-- :headers="$headers" :rows="$rows" :showUpdate="false", :showDelete="false" :perPage="10" --}}
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0 card-no-border">
                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="btn btn-primary btn-sm mb-2" onclick="create_form()">Create
                                Barang</button>
                            <button type="button" class="btn btn-primary btn-sm mb-2" id="btn_import">Import
                                Barang</button>
                            <button type="button" class="btn btn-primary btn-sm mb-2" id="btn_excel">Download dokumen
                                stock opname barang</button>
                        </div>
                        <div class="col-6">
                            <div class="row float-end">
                                <select class="form-select form-select-sm" style="width:auto;" name="divisi"
                                    id="search_divisi" onchange="search_table()">
                                    <option value="">-- DIVISI --</option>
                                    {{-- @foreach($divisi_sparepart as $item)
                                    <option value="{{$item->divisi}}">{{$item->divisi}}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
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
</div>
@section('script')
<script>
    $(document).ready(function () {
        var apiUrl = "{{ $apiEndpoint }}";

        var isFirstRequest = true; // Flag to indicate the first request
        var thisTable;
        var currentMerkId = null;
        thisTable = $('#barangDatatable').DataTable({
            processing: true,
            serverSide: true,
            order: [
                [0, 'desc']
            ],
            ajax: function (data, callback, settings) {
                $.ajax({
                    url: "{{ route('master/merk/datatable') }}",
                    type: 'GET',
                    data: {
                        ...data,
                    },
                    success: function (response) {
                        console.log(response);
                        callback({
                            draw: response.draw,
                            recordsTotal: response.recordsTotal,
                            recordsFiltered: response.recordsFiltered,
                            data: response.data
                        });
                    },
                    error: function (xhr, textStatus, error) {
                        // console.log("AJAX error:", error);
                        alert("review your answer");
                        window.location.href = "{{ url('auth/login') }}";
                    }
                });
            },
            columns: [{
                    data: "nama_merk",
                },
                {
                    data: "created_by",
                },
                {
                    data: null,
                    title: 'Actions',
                    orderable: false,
                    render: function (data, type, row) {
                        return `<a id="edit_merk" data-id="${row.id}" class="cursor-pointer edit-btn" title="Edit"><i class="fa fa-edit text-primary fa-lg mx-2"></i></a>`;
                    }
                }
            ]
        });

        $('#btn_cancel').click(function () {
            $('#merkModal').modal('hide');
        });

        // form create
        $('#tambah_merk').click(function () {
            $('#modalFormLabel').html('Buat Merk');
            $("#modalForm input").val('');
            $("#btn_create").show();
            $("#btn_edit").hide();
            $('#form_modal').trigger("reset"); // Reset the form
            $("#merkModal").modal('show');
        });

        // insert data
        $('#btn_create').click(function () {
            $("#btn_create").prop('disabled', true);
            $.ajax({
                url: apiUrl + "merk",
                type: "POST",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content') // For CSRF protection in Laravel
                },
                data: $('#form_modal').serialize(),
                dataType: "json",
                success: function (response) {
                    if (response.status == "success") {
                        $("#merkModal").modal('hide');
                        toastr["success"](response.message);
                        thisTable.ajax.reload(null, false);
                    } else {
                        alert('something wrong!!!');
                    }
                    $('[id^="error_"]').text('');
                    $("#btn_create").prop('disabled', false);
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
                    }
                    $("#btn_create").prop('disabled', false);
                }
            });
        });

        // form edit
        $('#barangDatatable').on('click', '.edit-btn', function (e) {
            e.preventDefault();
            currentMerkId = $(this).data('id'); // Get the ID of the record
            console.log(apiUrl)
            $.ajax({
                url: apiUrl + "merk/" + currentMerkId,
                type: "GET",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: "json",
                success: function (response) {
                    console.log(response)
                    $("#btn_edit").prop('disabled', false);
                    $("#btn_edit").show();
                    $("#btn_create").hide();
                    var dt = [];
                    $.each(response.data, function (key, value) {
                        dt[key] = value;
                    });
                    $('#input_nama_merk').val(dt['nama_merk']);
                    $('#modalFormLabel').html('Edit Merk');
                    $("#merkModal").modal('show');
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
                    }
                    $("#btn_edit").prop('disabled', false);
                }
            });
        });

        // update data
        $('#btn_edit').click(function () {
            if (currentMerkId === null) {
                alert('No supplier selected.');
                return;
            }
            $("#btn_edit").prop('disabled', true);
            $.ajax({
                url: apiUrl + "merk/" + currentMerkId,
                type: "PUT",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content') // For CSRF protection in Laravel
                },
                data: $('#form_modal').serialize(),
                dataType: "json",
                success: function (response) {
                    console.log(response)
                    if (response.status == "success") {
                        $("#merkModal").modal('hide');
                        toastr["success"](response.message);
                        thisTable.ajax.reload(null, false);
                    } else {
                        alert('something wrong!!!');
                    }
                    $('[id^="error_"]').text('');
                    $("#btn_edit").prop('disabled', false);
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
                        console.log(xhr.responseJSON)
                        // window.location.href = "{{ url('auth/login') }}";
                        alert('Forbidden')
                    } else { // Check for unauthorized status
                        // Redirect to the login page
                        // window.location.href = "{{ url('auth/login') }}";

                        alert('something wrong')
                    }
                    $("#btn_edit").prop('disabled', false);
                }
            });
        });
    });

</script>
@endsection
