<div wire:ignore>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0 card-no-border">
                    <a wire:navigate href="{{ route('master/paket/add_paket') }}" class="btn btn-primary btn-sm mb-2" id="show_create">Create Paket</a>
                </div>
                <div class="card-body">
                    <div id="flash-message" style="">
                    </div>
                    <div class="dt-ext table-responsive">
                        <div id="keytable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div style="position: absolute; height: 1px; width: 0px; overflow: hidden;"><input
                                            type="text" tabindex="0"></div>
                                    <table class="dataTables_wrapper container-fluid dt-bootstrap4" id="paketDatatable"
                                        role="grid" aria-describedby="keytable_info" style="position: relative;">
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
@push('scripts')
    
<script >
        console.log('navigated')
        var thisTable;
        var apiUrl = "{{ $apiEndpoint }}";
        var currentPaketId = null;
        $(document).ready(function () {
            thisTable = $('#paketDatatable').DataTable({
                processing: true,
                serverSide: true,
                order: [
                    [0, 'desc']
                ],
                ajax: function (data, callback, settings) {
                    $.ajax({
                        url: apiUrl + "paket/datatable",
                        type: 'GET',
                        data: {
                            ...data,
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
                            window.location.href = "{{ url('auth/login') }}";
                        }
                    });
                },
                columns: [{
                        data: "kode_paket",
                    },
                    {
                        data: "nama_paket",
                    },
                    {
                        data: "total",
                    },
                    {
                        data: "tipe_svc",
                    },
                    {
                        data: null,
                        title: 'Actions',
                        orderable: false,
                        render: function (data, type, row) {
                            return `<a wire:navigate href="{{ url('master/paket/detail_paket/${row.id}') }}" class="cursor-pointer view-karyawan" id="view_karyawan" data-id="${row.id}" title="Buat Akun"><i class="fa fa-file-o text-success fa-lg mx-2"></i></a>
                            <a class="cursor-pointer hapus-paket" data-id="${row.id}" title="Delete"><i class="fa fa-trash-o text-danger fa-lg mx-2"></i></a>`;
                        }
                    }
                ]
            });
            // hapus data
            $("#paketDatatable").on("click", ".hapus-paket", function () {
                currentPaketId = $(this).data('id'); // Get the ID of the record
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
                        // console.log();
                        $.ajax({
                            url: apiUrl + "paket/" + currentPaketId,
                            type: "DELETE",
                            dataType: "json",
                            headers: {
                                'Authorization': 'Bearer ' + '{{ $token }}',
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                    'content') // For CSRF protection in Laravel
                            },
                            success: function (response) {
                                // console.log();
                                Swal.fire("Terhapus!", response.msg, "success");
                                $("#paketDatatable").DataTable().ajax.reload();
                            },
                        });
                    }
                });
            });
        });
    

</script>
@endpush

