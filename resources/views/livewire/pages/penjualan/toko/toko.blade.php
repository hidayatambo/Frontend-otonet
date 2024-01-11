<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0 card-no-border">
                    <button class="btn btn-success" type="button" data-bs-toggle="modal"
                        wire:click="openModal" style="display: block;">Tambah Data</button>
                    @if ($isOpen === true)
                    <div class="modal fade show" tabindex="-1" role="dialog" style="display: block;" id="tokoModal">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalFormLabel">{{ $supplierId ? 'Ubah' : 'Buat' }}
                                        Supplier</h5>
                                    <button wire:click="closeModal" type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form wire:submit.prevent="store">
                                        <input type="hidden" name="crypt_id" id="input_crypt_id" maxlength="200"
                                            value="">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Nama <span
                                                            class="text-danger">*</span></div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" type="text"
                                                        wire:model.lazy="nama"
                                                        value="{{ isset($detail['nama']) ? $detail['nama'] : '' }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Alamat <span
                                                            class="text-danger">*</span></div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm"  wire:model.lazy="alamat"
                                                        value="{{ isset($detail['alamat']) ? $detail['alamat'] : '' }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Telp <span
                                                            class="text-danger">*</span></div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" wire:model.lazy="telp"
                                                        value="{{ isset($detail['telp']) ? $detail['telp'] : '' }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Kontak <span
                                                            class="text-danger">*</span></div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" wire:model.lazy="kontak"
                                                        value="{{ isset($detail['kontak']) ? $detail['kontak'] : '' }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">NPWP</div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" wire:model.lazy="npwp"
                                                        value="{{ isset($detail['npwp']) ? $detail['npwp'] : '' }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">No Rekening</div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" wire:model.lazy="no_rekening"
                                                        value="{{ isset($detail['no_rekening']) ? $detail['no_rekening'] : '' }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Nama Bank</div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" wire:model.lazy="nama_bank"
                                                        value="{{ isset($detail['nama_bank']) ? $detail['nama_bank'] : '' }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button wire:click="closeModal" type="button" class="btn btn-secondary" aria-label="Close" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit"
                                        class="btn btn-success">{{ $supplierId ? 'Update' : 'Save' }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
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
                                                @foreach($headers as $header)
                                                <th wire:click="sortBy('{{ $header }}')" tabindex="0"
                                                    aria-controls="keytable" rowspan="1" colspan="1"
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
                                                <td><button wire:click="editSupplier({{ $row['id'] }})"
                                                        class="bg-transparent"><i class="fa fa-edit text-primary fa-lg mx-2"></i></button></td>
                                            </tr>
                                            @endforeach
                                            @else
                                            <tr>
                                                <td colspan="{{ count($headers) }}">No data available</td>
                                            </tr>
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
                </div>
            </div>
        </div>
    </div>
    <script>
        window.onclick = function(event) {
            let modal = document.getElementById('tokoModal');
            if (event.target == modal) {
                modal.style.display = "none";
                Livewire.emit('closeModal'); // Emitting an event to close the modal
            }
        }
    </script>
</div>
