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
                                @foreach($headers as $header)
                                <th wire:click="sortBy('{{ $header }}')" tabindex="0" aria-controls="keytable" rowspan="1" colspan="1"
                                    aria-sort="ascending" style="width: 138.719px;">{{ $header }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($rows) > 0)
                                @foreach($rows as $row)
                                    <tr role="row" class="odd">
                                        @foreach($cell as $cel)
                                        <td>{{ $row[$cel] }}</td>
                                        @endforeach
                                        <td><button wire:click="editSupplier({{ $row['id'] }})" class="btn btn-primary">Edit</button></td>
                                    </tr>
                                @endforeach
                            @else
                                <tr><td colspan="{{ count($headers) }}">No data available</td></tr>
                            @endif
                        </tbody>
                        <tfoot>
                            <tr>
                                @foreach($headers as $header)
                                <th rowspan="1" colspan="1">{{ $header }}</th>
                                @endforeach
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset("admin/js/jquery.min.js") }}"></script>
    <script src="{{ asset("admin/js/datatable/datatables/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("admin/js/datatable/datatable-extension/dataTables.buttons.min.js") }}"></script>
    <script src="{{ asset("admin/js/datatable/datatable-extension/custom.js") }} "></script>


    <script src="{{ asset("admin/js/datatable/datatable-extension/jszip.min.js") }}"></script>
    <script src="{{ asset("admin/js/datatable/datatable-extension/buttons.colVis.min.js") }}"></script>
    <script src="{{ asset("admin/js/datatable/datatable-extension/pdfmake.min.js") }}"></script>
    <script src="{{ asset("admin/js/datatable/datatable-extension/vfs_fonts.js") }}"></script>
    <script src="{{ asset("admin/js/datatable/datatable-extension/dataTables.autoFill.min.js") }}"></script>
    <script src="{{ asset("admin/js/datatable/datatable-extension/dataTables.select.min.js") }}"></script>
    <script src="{{ asset("admin/js/datatable/datatable-extension/buttons.bootstrap4.min.js") }}"></script>
    <script src="{{ asset("admin/js/datatable/datatable-extension/buttons.html5.min.js") }}"></script>
    <script src="{{ asset("admin/js/datatable/datatable-extension/buttons.print.min.js") }}"></script>
    <script src="{{ asset("admin/js/datatable/datatable-extension/dataTables.bootstrap4.min.js") }}"></script>
    <script src="{{ asset("admin/js/datatable/datatable-extension/dataTables.responsive.min.js") }}"></script>
    <script src="{{ asset("admin/js/datatable/datatable-extension/responsive.bootstrap4.min.js") }}"></script>
    <script src="{{ asset("admin/js/datatable/datatable-extension/dataTables.keyTable.min.js") }}"></script>
    <script src="{{ asset("admin/js/datatable/datatable-extension/dataTables.colReorder.min.js") }}"></script>
    <script src="{{ asset("admin/js/datatable/datatable-extension/dataTables.fixedHeader.min.js") }}"></script>
    <script src="{{ asset("admin/js/datatable/datatable-extension/dataTables.rowReorder.min.js") }}"></script>
    <script src="{{ asset("admin/js/datatable/datatable-extension/dataTables.scroller.min.js") }}"></script>
</div>
