<!-- login page start-->
<div class="container-fluid p-0">
    <div class="row m-0">
        <livewire:components.auth.login-left />
        <div class="col-xl-5 p-0">
            <livewire:components.auth.header />
            <div class="login-card login-dark card" style="align-items: stretch; min-height: auto;">
                <div class="login-main">
                    <form class="theme-form" wire:submit="register">
                        <h4>Create your account</h4>
                        <p>Enter your personal details to create account</p>
                        <div class="form-group">
                            <label class="col-form-label pt-0">Jenis Usaha</label>
                            <input class="form-control @error('jenis_usaha') is-invalid @enderror" type="text"
                                 wire:model="jenis_usaha" disabled value="{{ $jenis_usaha }}">
                            @error('jenis_usaha') <span class="txt-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-form-label pt-0">Detail Jenis Usaha</label>
                            <input class="form-control @error('detail_jenis_usaha') is-invalid @enderror" type="text"
                                 wire:model="detail_jenis_usaha" disabled value="">
                            @error('detail_jenis_usaha') <span class="txt-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-form-label pt-0">Your Company Name</label>
                            <input class="form-control @error('company_name') is-invalid @enderror" type="text"
                                placeholder="Jhon Doe" wire:model="company_name">
                            @error('company_name') <span class="txt-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-form-label pt-0">Your Name</label>
                            <input class="form-control @error('nama') is-invalid @enderror" type="text"
                                placeholder="Jhon Doe" wire:model="nama">
                            @error('nama') <span class="txt-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Email Address</label>
                            <input class="form-control @error('email') is-invalid @enderror" type="email"
                                placeholder="Test@gmail.com" wire:model="email">
                            @error('email') <span class="txt-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Number Phone</label>
                            <input class="form-control @error('phone') is-invalid @enderror" type="text"
                                placeholder="0812XXXXXXX" wire:model="phone">
                            @error('phone') <span class="txt-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Address</label>
                            <input class="form-control @error('address') is-invalid @enderror" type="text"
                                placeholder="Jl ABC" wire:model="address">
                            @error('address') <span class="txt-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>
                        <div class="form-group mb-0">
                            <div class="checkbox p-0">
                                <input id="checkbox1" type="checkbox" wire:model='confirm' required>
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
