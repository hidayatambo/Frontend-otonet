<!-- login page start-->
<div class="container-fluid p-0">
    <div class="row m-0">
        <livewire:components.auth.login-left />
        <div class="col-xl-4 pt-5 mt-2" style="">
            <livewire:components.auth.header />

            {{-- <div class="d-flex justify-content-center"> --}}
            {{-- <div class="d-flex justify-content-center"> --}}
                <div class="login-card login-dark transparent-bg"
                    style="align-items: stretch; min-height: auto; background-color: rgba(255, 255, 255, 0.5);">
                    <div class="row">
                        <div class="col-6 pb-5 m-0"><a wire:navigate href="{{ url('/auth/register?jenis=Bengkel') }}"
                                class="btn bg-transparent p-0 m-0 small-thumbnail"><img src="{{ asset('internal/icon/1.png') }}"
                                    class="img-thumbnail bg-transparent border-0">
                                <h5 class="text-center">Perbengkelan</h5>
                            </a></div>
                        <div class="col-6 pb-5 m-0"><a wire:navigate href="{{ url('/auth/register?jenis=Manufaktur') }}"
                                class="btn bg-transparent p-0 m-0 small-thumbnail"><img src="{{ asset('internal/icon/2.png') }}"
                                    class="img-thumbnail bg-transparent border-0">
                                <h5 class="text-center">Logistik</h5>
                            </a></div>
                        <div class="col-6 pb-5 m-0"><a wire:navigate
                                href="{{ url('/auth/register?jenis=Manufaktur 2') }}"
                                class="btn bg-transparent p-0 m-0 small-thumbnail"><img src="{{ asset('internal/icon/3.png') }}"
                                    class="img-thumbnail bg-transparent border-0">
                                <h5 class="text-center">Manufaktur</h5>
                            </a></div>
                        <div class="col-6 pb-5 m-0"><a wire:navigate href="{{ url('/auth/register?jenis=Retail') }}"
                                class="btn bg-transparent p-0 m-0 small-thumbnail"><img src="{{ asset('internal/icon/4.png') }}"
                                    class="img-thumbnail bg-transparent border-0">
                                <h5 class="text-center">Retail</h5>
                            </a></div>
                    </div>


                </div>
            </div>
            {{-- </div> --}}

        {{-- </div> --}}
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
