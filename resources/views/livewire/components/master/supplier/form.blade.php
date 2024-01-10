<div class="card-header pb-0 card-no-border">
    <button class="btn btn-success" type="button" data-bs-toggle="modal"
        data-bs-target="#exampleModalCenter1">Tambah Data</button>
    @if ($isOpen === true)
    <div class="modal show" tabindex="-1" role="dialog" style="display: block;" >
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalFormLabel">{{ $supplierId ? 'Ubah' : 'Buat' }} Supplier</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="store">
                        <input type="hidden" name="crypt_id" id="input_crypt_id" maxlength="200" value="">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Nama <span class="text-danger">*</span></div>
                                    <div class="col-9">
                                        <input class="form-control form-control-sm" type="text" name="nama" value="" id="input_nama" maxlength="100" required="" >
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Alamat <span class="text-danger">*</span></div>
                                    <div class="col-9">
                                        <input class="form-control form-control-sm" type="text" name="alamat" value="" id="input_alamat" maxlength="200" required="" >
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Telp <span class="text-danger">*</span></div>
                                    <div class="col-9">
                                        <input class="form-control form-control-sm" type="text" name="telp" value="" id="input_telp" maxlength="50" required="" >
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Kontak <span class="text-danger">*</span></div>
                                    <div class="col-9">
                                        <input class="form-control form-control-sm" type="text" name="kontak" value="" id="input_kontak" maxlength="100" required="" >
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">NPWP</div>
                                    <div class="col-9">
                                        <input class="form-control form-control-sm" type="text" name="npwp" value="" id="input_npwp" maxlength="100" >
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">No Rekening</div>
                                    <div class="col-9">
                                        <input class="form-control form-control-sm" type="text" name="no_rekening" value="" id="input_no_rekening" maxlength="100" >
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Nama Bank</div>
                                    <div class="col-9">
                                        <input class="form-control form-control-sm" type="text" name="nama_bank" value="" id="input_nama_bank" maxlength="100" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" aria-label="Close" onclick="cancel_modal()" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">{{ $supplierId ? 'Update' : 'Save' }}</button>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
