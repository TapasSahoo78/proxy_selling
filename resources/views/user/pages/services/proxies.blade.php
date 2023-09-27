@extends('user.layouts.app')

@section('content')
    <div id="top"></div>
    <!-- revolution slider begin -->
    <!-- section begin -->
    <section class="relative no-top no-bottom text-light" data-bgimage="url(images/background/6.jpg)"
        data-stellar-background-ratio=".2">

        <div class="overlay-gradient t80">
            <div class="center-y relative text-center" data-scroll-speed="4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="col text-center">
                                <div class="spacer-single"></div>
                                <h1>Proxy List</h1>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- section close -->

    <section id="plans">
        <div class="container">
            {{-- <div class="row">
                <div class="col text-center">
                    <div id="switch-set-v2">
                        <div class="ch-1 active">Monthly</div>
                        <div class="ch-2">Yearly</div>
                    </div>
                </div>
            </div> --}}
            <div class="spacer-single"></div>
            <div class="item pricing">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="pricing-s1 text-light mb30">
                                <div class="top">
                                    <h2>Shared Business</h2>
                                    <p class="price">
                                        <span class="txt">Start from</span>
                                        <span class="currency">$</span>
                                        <span class="m opt-1">5.59</span>
                                        <span class="y opt-2">3.46</span>
                                        <span class="month">p/mo</span>
                                    </p>
                                </div>

                                <div class="bottom">

                                    <ul>
                                        <li><i class="fa fa-check-square"></i>1x Processing Power</li>
                                        <li><i class="fa fa-check-square"></i>1 Website</li>
                                        <li><i class="fa fa-check-square"></i>1GB Disk Space</li>
                                        <li><i class="fa fa-check-square"></i>Easy Website Builder</li>
                                        <li><i class="fa fa-check-square"></i>99.9% Uptime Guarantee</li>
                                    </ul>
                                </div>

                                <div class="action">
                                    <a href="" class="btn-custom">Sign Up Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="pricing-s1 text-light mb30">
                                <div class="top">
                                    <h2>Shared Professional</h2>
                                    <p class="price">
                                        <span class="txt">Start from</span>
                                        <span class="currency">$</span>
                                        <span class="m opt-1">9.59</span>
                                        <span class="y opt-2">7.46</span>
                                        <span class="month">p/mo</span>
                                    </p>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><i class="fa fa-check-square"></i>6x Processing Power</li>
                                        <li><i class="fa fa-check-square"></i>Unlimited Website</li>
                                        <li><i class="fa fa-check-square"></i>100GB Disk Space</li>
                                        <li><i class="fa fa-check-square"></i>Easy Website Builder</li>
                                        <li><i class="fa fa-check-square"></i>99.9% Uptime Guarantee</li>
                                    </ul>
                                </div>

                                <div class="action">
                                    <a href="" class="btn-custom">Sign Up Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="pricing-s1 text-light mb30">
                                <div class="top">
                                    <h2>Shared Enterprise</h2>
                                    <p class="price">
                                        <span class="txt">Start from</span>
                                        <span class="currency">$</span>
                                        <span class="m opt-1">24.99</span>
                                        <span class="y opt-2">16.49</span>
                                        <span class="month">p/mo</span>
                                    </p>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><i class="fa fa-check-square"></i>6x Processing Power</li>
                                        <li><i class="fa fa-check-square"></i>Unlimited Website</li>
                                        <li><i class="fa fa-check-square"></i>100GB Disk Space</li>
                                        <li><i class="fa fa-check-square"></i>Easy Website Builder</li>
                                        <li><i class="fa fa-check-square"></i>99.9% Uptime Guarantee</li>
                                    </ul>
                                </div>

                                <div class="action">
                                    <a href="" class="btn-custom">Sign Up Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
