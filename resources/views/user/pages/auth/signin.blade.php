@extends('admin.layouts.app', ['showHeader' => false, 'showAuth' => true, 'showBody' => false, 'showSidebar' => false, 'showFooter' => false])
@section('title', 'User Sign In')
@section('auth')
    <body class="bg-gradient-primary">

        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9 mt-5">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                        </div>
                                        <form role="form" method="post" data-action="{{ route('user.login.post') }}"
                                            id="adminFrm">
                                            @csrf
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user"
                                                    id="exampleInputEmail" name="email" aria-describedby="emailHelp"
                                                    placeholder="Enter Email Address...">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user"
                                                    id="exampleInputPassword" name="password" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" name="remember_me" class="custom-control-input"
                                                        id="customCheck">
                                                    <label class="custom-control-label" for="customCheck">Remember
                                                        Me</label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                        </form>
                                        <p class="m-3">
                                            <a href="#">Register Now</a>
                                            <a href="#" class="text-danger m-4">Forget Password</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </body>
@endsection
