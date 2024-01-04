<!-- login page start-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-7"><img class="bg-img-cover bg-center" src="{{ url('images/login/2.jpg') }}" alt="looginpage"></div>
        <div class="col-xl-5 p-0">
            <div class="login-card login-dark">
                <div>
                    <div><a class="logo text-start" href="index.html">
                            <div class="d-flex justify-content-center">

                                <img style="width:80%" class="img-fluid for-light"
                                    src="{{ url('images/logo/logo-techthink-hub-indonesia.png') }}" alt="looginpage">
                            </div>
                            <div class="login-main">
                                <form class="theme-form">
                                    <h4>Sign in to account</h4>
                                    <p>Enter your email & password to login</p>
                                    <div class="form-group">
                                        <label class="col-form-label">Email Address</label>
                                        <input class="form-control" type="email" required=""
                                            placeholder="Test@gmail.com">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Password</label>
                                        <div class="form-input position-relative">
                                            <input class="form-control" type="password" name="login[password]"
                                                required="" placeholder="*********">
                                            <div class="show-hide"><span class="show"> </span></div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="checkbox p-0">
                                            <input id="checkbox1" type="checkbox">
                                            <label class="text-muted" for="checkbox1">Remember password</label>
                                        </div>
                                        <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                                    </div>
                                    <h6 class="text-muted mt-4 or">Or Sign in with</h6>
                                    <div class="social mt-6">
                                        <div class="btn-showcase d-flex justify-content-center">
                                            <a class="btn btn-light" href="https://twitter.com/login?lang=en"
                                                target="_blank"><i class="icon-google"></i> Google</a>
                                            <a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i
                                                    class="txt-fb" data-feather="facebook"></i>facebook</a>
                                        </div>
                                    </div>
                                    <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="{{url('auth/register')}}" wire:navigate>Create Account</a></p>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
