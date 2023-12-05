<header class="header-s1 has-topbar">
    <div id="topbar" class="text-white">
        <div class="container">
            <div class="topbar-left">
                <span class="topbar-widget">
                    <a href="#"><strong>NEW: You can insert any text here...</strong></a>
                </span>
            </div>

            <div class="topbar-right">
                <div class="topbar-widget sm-hide"><a href="#"><i class="fa fa-phone"></i>+208 333
                        9296</a></div>
                <div class="topbar-widget sm-hide"><a href="#"><i class="fa fa-envelope-o"></i>Support</a>
                </div>
                <div class="topbar-widget"><a href="#"><i class="fa fa-shopping-cart"></i><span
                            class="sm-hide">Cart</span></a></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="header-row">
                    <div class="header-col left">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="{{ route('homepage') }}"><img alt="" class="logo"
                                    src="{{ asset('user/images/logo-light.png') }}">
                                <img alt="" class="logo-2" src="{{ asset('user/images/logo-dark.png') }}"></a>
                        </div>
                        <!-- logo close -->
                    </div>
                    <div class="header-col mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            <li><a href="{{ route('homepage') }}">Home</a>
                            </li>
                            <li><a href="{{ route('proxies') }}">Proxies</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{route('user.ip.information')}}">Proxy Checker</a></li>
                            <li><a href="{{ route('faq') }}">FAQ</a></li>
                            <li><a href="{{ route('contact_us') }}">Contact</a></li>
                        </ul>
                        <div class="col-right">
                            <a class="btn-custom" href="#"><i class="fa fa-lock"></i> Login</a>
                        </div>

                        {{-- <ul id="mainmenu">
                            <li><a href="{{route('homepage')}}">My Account</a>
                                <ul>
                                    <li><a href="hosting-all.html">Profile</a></li>
                                    <li><a href="hosting-vps.html">Forget Password</a></li>
                                    <li><a href="hosting-cloud.html">Logout</a></li>
                                </ul>
                            </li>
                        </ul> --}}

                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- small button begin -->
                <span id="menu-btn"></span>
                <!-- small button close -->

            </div>
        </div>
    </div>
</header>
