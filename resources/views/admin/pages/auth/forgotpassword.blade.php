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
                            <h2>Forgot Password</h2>
                            <p class="top-p">Enter your email</p>

                            <form role="form" method="post" data-action="{{ route('admin.login.post') }}"
                                id="adminFrm">
                                @csrf
                                <div class="input-bx">
                                    <label for="exampleInputEmail1" class="form-label">Email </label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <i class="fa-regular fa-circle-user"></i>
                                </div>

                                <button type="submit" class="btn btn-primary">Send to Email</button>
                            </form>

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
