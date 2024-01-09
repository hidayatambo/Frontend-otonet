<!-- login page start-->
<div class="container-fluid p-0">
    <div class="row m-0">
        <livewire:components.auth.login-left />
        <div class="col-xl-4 pt-5 mt-2 py-1" style="align-items: stretch;">
            <livewire:components.auth.header />
            <div class="login-card login-dark card d-flex w-auto p-1" style="align-items: stretch; min-height:auto;">
                <div style="max-height: 65vh; overflow-y: auto;">
                    <div class="login-main" style="width:100%;">
                        <form class="theme-form" wire:submit="register">

                            <h4>Create your account</h4>
                            <p>Enter your personal details to create account</p>
                            <div class="form-group">
                                <label class="col-form-label pt-0">Jenis Usaha</label>
                                <input class="form-control @error('jenis_aplikasi') is-invalid @enderror" type="text"
                                    wire:model="jenis_aplikasi" disabled value="{{ $jenis_aplikasi }}">
                                @error('jenis_aplikasi') <span class="txt-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-form-label pt-0">Detail Jenis Usaha</label>
                                <select class="form-select" wire:model="detail_jenis_aplikasi">
                                    <option value="1">Bengkel Servis</option>
                                    <option value="2" disabled>Bengkel Body Repair (Coming Soon)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label pt-0">Nama Bengkel</label>
                                <input class="form-control @error('nama_perusahaan') is-invalid @enderror" type="text" wire:model="nama_perusahaan">
                                @error('nama_perusahaan') <span class="txt-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-form-label pt-0">Nama Pemilik</label>
                                <input class="form-control @error('nama') is-invalid @enderror" type="text" wire:model="nama">
                                @error('nama') <span class="txt-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Alamat Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" type="email"
                                    wire:model="email">
                                @error('email') <span class="txt-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Nomor Whatsapp</label>
                                <input class="form-control @error('phone') is-invalid @enderror" type="text"
                                    wire:model="phone">
                                @error('phone') <span class="txt-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                            </div>
                            {{-- <div class="form-group">
                                <label class="col-form-label">Address</label>
                                <input class="form-control @error('address') is-invalid @enderror" type="text"
                                    placeholder="Jl ABC" wire:model="address">
                                @error('address') <span class="txt-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                            </div> --}}
                            <div class="form-group mb-0">
                                <div class="checkbox p-0">
                                    <input id="checkbox1" type="checkbox" wire:model="confirm" required>
                                    <label class="text-muted" for="checkbox1">Agree with<a class="ms-2" href="#">Privacy
                                            Policy</a></label>
                                </div>
                                <button class="btn btn-primary btn-block w-100" type="submit">Create Account</button>
                            </div>
                            <p class="mt-4 mb-0 text-center">Already have an account?<a class="ms-2"
                                    href="{{ url('auth/login') }}" wire:navigate>Sign in</a></p>
                        </form>
                    </div>
                </div>
                <br />
                <br />
                <br />
            </div>
        </div>
    </div>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('swal:success', function (options) {
            Swal.fire({
                title: options.title,
                text: options.text,
                icon: options.icon,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ url('/auth/email_confirmation')}}"
                }
            });
        });

        Livewire.on('swal:error', function (options) {
            Swal.fire(options.title, options.text, options.icon);
        });

    </script>
</div>
