<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="#">
                <!-- Logo icon -->

                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text ms-2">
                    <!-- dark Logo text -->
                    <img src="../assets/images/logo.png" alt="homepage" class="light-logo" />
                </span>

            </a>

            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                    class="ti-menu ti-close"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-start me-auto">
                <li class="nav-item d-sm-block d-lg-block">
                    <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                        data-sidebartype="mini-sidebar"><i class="fa-solid fa-bars"></i></a>
                </li>
                <!-- ============================================================== -->

                <!-- Search -->
                <!-- ============================================================== -->

            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-end">

                <div class="input-group">
                    <li class="serch-sec">
                        <input type="search" id="form1" class="form-control"
                            placeholder="Search something here...." />
                        <i class="fas fa-search"></i>
                    </li>
                    <li class="nav-item dropdown user-top-sec">
                        <div class="d-img">
                            <a class="
            nav-link
            dropdown-toggle
            text-muted
            waves-effect waves-dark
            pro-pic
          "
                                href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="../assets/images/usr.png" alt="user" class="rounded-circle"
                                    width="31" />
                        </div>
                        <div class="d-cntnt">
                            <h6>
                                {{ auth()->guard('admin')->user()->name }}
                            </h6>
                            <p><i class="fa-solid fa-check"></i> Verified</p>
                        </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-account me-1 ms-1"></i>
                                My
                                Profile</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-wallet me-1 ms-1"></i>
                                My
                                Balance</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-email me-1 ms-1"></i>
                                Inbox</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i
                                    class="mdi mdi-settings me-1 ms-1"></i> Account
                                Setting</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('admin.logout') }}"><i
                                    class="fa fa-power-off me-1 ms-1"></i>
                                Logout</a>
                            <div class="dropdown-divider"></div>
                            <div class="ps-4 p-10">
                                <a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded text-white">View
                                    Profile</a>
                            </div>
                        </ul>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>
