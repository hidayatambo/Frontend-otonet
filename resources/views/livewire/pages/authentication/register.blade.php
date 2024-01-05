<!-- login page start-->
<div class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-xl-7 p-0"><img class="bg-img-cover bg-center" src="{{ asset('admin/images/login/1.jpg') }}" alt="looginpage"></div>
        <div class="col-xl-5 p-0">
            <div class="login-card login-dark">
                <div>
                    <div><a class="logo text-start" href="index.html"><img class="img-fluid for-light"
                                src="{{ asset('admin/images/logo/logo.png') }}" alt="looginpage"><img class="img-fluid for-dark"
                                src="{{ asset('admin/images/logo/logo_dark.png') }}" alt="looginpage"></a></div>
                    <div class="login-main">
                        <form class="theme-form" wire:submit="register">
                            <h4>Create your account</h4>
                            <p>Enter your personal details to create account</p>
                            <div class="form-group">
                                <label class="col-form-label pt-0">Your Name</label>
                                <input class="form-control @error('nama') is-invalid @enderror" type="text" placeholder="Jhon Doe" wire:model="nama">
                                @error('nama') <span class="txt-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Email Address</label>
                                <input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Test@gmail.com" wire:model="email">
                                @error('email') <span class="txt-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <div class="form-input position-relative">
                                    <input class="form-control @error('password') is-invalid @enderror" type="password"
                                        placeholder="*********" wire:model='password'>
                                    <div class="show-hide"><span class="show"></span></div>
                                </div>
                                @error('password') <span class="txt-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password Confirmation</label>
                                <div class="form-input position-relative">
                                    <input class="form-control @error('password') is-invalid @enderror" type="password"
                                        placeholder="*********" wire:model='password_confirmation'>
                                    <div class="show-hide"><span class="show"></span></div>
                                </div>
                                @error('password') <span class="txt-danger" role="alert">
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
