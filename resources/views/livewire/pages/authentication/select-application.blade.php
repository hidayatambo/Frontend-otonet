<!-- login page start-->
<div class="container-fluid">
    <div class="row">
        <livewire:components.auth.login-left />
        <div class="col-xl-5 p-0">
            <livewire:components.auth.header />
            <div class="login-card login-dark">
                <div class="row">
                    <div class="col-6"><button class="btn bg-transparent"><img src="{{ asset('internal/icon/1.png') }}" class="img-thumbnail bg-transparent border-0"></button></div>
                    <div class="col-6"><button class="btn bg-transparent"><img src="{{ asset('internal/icon/2.png') }}" class="img-thumbnail bg-transparent border-0"></button></div>
                    <div class="col-6"><button class="btn bg-transparent"><img src="{{ asset('internal/icon/3.png') }}" class="img-thumbnail bg-transparent border-0"></button></div>
                    <div class="col-6"><button class="btn bg-transparent"><img src="{{ asset('internal/icon/4.png') }}" class="img-thumbnail bg-transparent border-0"></button></div>
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
                    window.location.href = "{{ url('/dashboard')}}"
                }
            });
        });

        Livewire.on('swal:error', function (options) {
            Swal.fire(options.title, options.text, options.icon);
        });

    </script>
</div>
