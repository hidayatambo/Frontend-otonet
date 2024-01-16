<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0 card-no-border">
                    <button  type="button" class="btn btn-primary btn-sm mb-2" id="tambah_supplier">Tambah Data</button>
                    
                    <div class="modal fade" tabindex="-1" role="dialog"  id="supplierModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalFormLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalFormLabel"></h5>
                                    {{-- <button wire:click="closeModal" type="button" class="btn-close"
                                        data-bs-dismiss="modal" aria-label="Close"></button> --}}
                                </div>
                                <div class="modal-body">
                                    <form action="" id="form_modal">
                                        @csrf
                                        {{-- <input type="hidden" name="crypt_id" id="input_crypt_id" maxlength="200" value=""> --}}
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Nama <h6><span
                                                            class="text-danger">Wajib</span></h6></div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" id="input_nama" name="nama" type="text" value="{{ old('nama') }}">
                                                        <span id="error_nama" class="txt-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Alamat <h6><span
                                                            class="text-danger">Wajib</span></h6></div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" id="input_alamat" name="alamat" type="text" value="{{ old('alamat') }}">
                                                        <span id="error_alamat" class="txt-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Telp <h6><span
                                                            class="text-danger">Wajib</span></h6></div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" id="input_telp" name="telp" type="text" value="{{ old('telp') }}">
                                                        <span id="error_telp" class="txt-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Kontak <h6><span
                                                            class="text-danger">Wajib</span></h6></div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" id="input_kontak" name="kontak" type="text" value="{{ old('kontak') }}">
                                                        <span id="error_kontak" class="txt-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">NPWP</div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" id="input_npwp" name="npwp" type="text" value="{{ old('npwp') }}">
                                                        <span id="error_npwp" class="txt-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">No Rekening</div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" id="input_no_rekening" name="no_rekening" type="text" value="{{ old('no_rekening') }}">
                                                        <span id="error_no_rekening" class="txt-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Nama Bank</div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" id="input_nama_bank" name="nama_bank" type="text" value="{{ old('nama_bank') }}">
                                                        <span id="error_nama_bank" class="txt-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" aria-label="Close" id="btn_cancel">Cancel</button>
                                    <button type="button" class="btn btn-success" id="btn_create">Simpan</button>
                                    <button type="button" class="btn btn-success" id="btn_edit" >Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="dt-ext table-responsive">
                        <div id="" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div style="position: absolute; height: 1px; width: 0px; overflow: hidden;"><input
                                            type="text" tabindex="0"></div>
                                    <table  class="table table-striped table-sm" style="width: 100%" id="supplierDatatable" >
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
            var datatable_api = "{{ route('master/supplier/datatable') }}";
            var thisTable;
            var apiUrl = '{{ $apiEndpoint }}';
            var currentSupplierId = null;

            // list data
            thisTable = $('#supplierDatatable').DataTable({
                processing: true,
                serverSide: true,
                order: [
                [0, 'desc']
                ],
                ajax: function (data, callback, settings) {
                    $.ajax({
                        url: datatable_api ,
                        type: 'GET',
                        data: {
                            ...data, 
                        },
                        success: function (response) {
                            callback({
                                draw: response.draw,
                                recordsTotal: response.recordsTotal,
                                recordsFiltered: response.recordsFiltered,
                                data: response.data
                            });
                        },
                        error: function (xhr, textStatus, error) {
                            alert("review your answer");
                            window.location.href = "{{ url('auth/login') }}";
                        }
                    });
                },
                columns: [{
                        data: 'nama',
                        title: 'Nama'
                    },
                    {
                        data: 'alamat',
                        title: 'Alamat'
                    },
                    {
                        data: 'telp',
                        title: 'Telp'
                    },
                    {
                        data: 'kontak',
                        title: 'Kontak'
                    },
                    {
                        data: 'created_by',
                        title: 'Created By'
                    },
                    {
                        data: null,
                        title: 'Actions',
                        orderable: false,
                        render: function (data, type, row) {
                            return `<a id="edit_supplier" data-id="${row.id}" class="cursor-pointer edit-btn" title="Edit"><i class="fa fa-edit text-primary fa-lg mx-2"></i></a>`;
                        }
                    }
                ]
            });
            
            // form edit
            $('#supplierDatatable').on('click', '.edit-btn', function(e) {
                e.preventDefault();
                currentSupplierId = $(this).data('id'); // Get the ID of the record
                $.ajax({
                    url: apiUrl + "supplier/" + currentSupplierId,
                    type: "GET",
                    headers: {
                        'Authorization': 'Bearer ' + '{{ $token }}',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // For CSRF protection in Laravel
                    },
                    dataType: "json",
                    success: function(response) {
                            $("#btn_edit").prop('disabled', false);
                            $("#btn_edit").show();
                            $("#btn_create").hide();
                            var dt = [];
                            $.each(response.data, function(key, value) {
                                dt[key] = value;
                            });
                            // $('#input_crypt_id').val(crypt_id);
                            $('#input_nama').val(dt['nama']);
                            $('#input_alamat').val(dt['alamat']);
                            $('#input_telp').val(dt['telp']);
                            $('#input_kontak').val(dt['kontak']);
                            $('#input_npwp').val(dt['npwp']);
                            $('#input_no_rekening').val(dt['no_rekening']);
                            $('#input_nama_bank').val(dt['nama_bank']);
                            $('#modalFormLabel').html('Edit Supplier');
                            $("#supplierModal").modal('show');
                       
                    }
                });
            });

            // update supplier
            $('#btn_edit').click(function() {
                if (currentSupplierId === null) {
                    alert('No supplier selected.');
                    return;
                }
                $("#btn_edit").prop('disabled', true);
                $.ajax({
                    url: apiUrl + "supplier/" + currentSupplierId,
                    type: "PUT",
                    headers: {
                        'Authorization': 'Bearer ' + '{{ $token }}',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // For CSRF protection in Laravel
                    },
                    data: $('#form_modal').serialize(),
                    dataType: "json",
                    success: function(response) {
                        if (response.status == "success") {
                            $("#supplierModal").modal('hide');
                            toastr["success"](response.message);
                            thisTable.ajax.reload(null, false);
                        } else {
                            alert('something wrong!!!');
                        }
                        $("#btn_edit").prop('disabled', false);
                    },
                    error: function(xhr) {
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

            // form create
            $('#tambah_supplier').click(function() {
                $('#modalFormLabel').html('Buat Supplier');
                $("#modalForm input").val('');
                $("#btn_create").show();
                $("#btn_edit").hide();
                $('#form_modal').trigger("reset"); // Reset the form
                $("#supplierModal").modal('show');
            });
            
            // cancel trigger
            $('#btn_cancel').click(function() {
                $('#supplierModal').modal('hide');
            });

            // insert data
            $('#btn_create').click(function() {
                $("#btn_create").prop('disabled', true);
                $.ajax({
                    url: apiUrl + "supplier",
                    type: "POST",
                    headers: {
                        'Authorization': 'Bearer ' + '{{ $token }}',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // For CSRF protection in Laravel
                    },
                    data: $('#form_modal').serialize(),
                    dataType: "json",
                    success: function(response) {
                        if (response.status == "success") {
                            $("#supplierModal").modal('hide');
                            toastr["success"](response.message);
                            thisTable.ajax.reload(null, false);
                        } else {
                            alert('something wrong!!!');
                        }
                        $('[id^="error_"]').text('');
                        $("#btn_create").prop('disabled', false);
                    },
                    error: function(xhr) {
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
        });
    </script>
@endsection
