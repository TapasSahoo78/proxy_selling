@extends('admin.layouts.app', ['showHeader' => false, 'showBody' => false, 'showSidebar' => false, 'showFooter' => false])

@section('main')
    <section class="login-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5  col-sm-12 login-sec-left">
                    <div class="container">
                        <div class="lgo">
                            <img src="../assets/images/logo.png" alt="">
                        </div>

                        <div class="login-box">
                            <h2>Admin Login</h2>
                            <p class="top-p">Please enter your login details</p>

                            <form role="form" method="post" data-action="{{ route('admin.login.post') }}"
                                id="adminFrm">
                                @csrf
                                <div class="input-bx">
                                    <label for="exampleInputEmail1" class="form-label">Email </label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <i class="fa-regular fa-circle-user"></i>
                                </div>

                                <div class="input-bx">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control p-2"
                                        id="exampleInputPassword1">
                                    <span style="padding:0 2px;">
                                        <i id="eyeChangeId" class="fa fa-eye" onclick="eyeEnableOrDisable()"
                                            style="left: 265px;"></i>
                                    </span>
                                </div>

                                <div class="remebrMe">
                                    <p><input type="checkbox" name="remember_me"> Remember Me</p>
                                </div>

                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>

                            <div class="remebr">
                                <p></p>
                                <a href="{{ route('admin.forgot.password') }}">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-12 login-sec-right"
                    style="background-image: url('../assets/images/admn-bgg.png');">
                    <div class="txt-bx">
                        <h4>Welcome Back! ServScore is the # 1 Partner in managing Staff Performance and Customer
                            Experiences in the service industry</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script type="text/javascript">
        function eyeEnableOrDisable() {
            var x = document.getElementById('exampleInputPassword1');
            var y = document.getElementById('eyeChangeId');

            if (x.type === "password") {
                x.type = "text";
                y.classList.remove('fa-eye');
                y.classList.add('fa-eye-slash');
            } else {
                x.type = "password";
                y.classList.remove('fa-eye-slash');
                y.classList.add('fa-eye');
            }
        }
    </script>
@endpush
