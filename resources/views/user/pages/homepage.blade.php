@extends('user.layouts.app')

@section('content')
    <div id="top"></div>
    <!-- revolution slider begin -->
    <section aria-label="section-slider" class="fullwidthbanner-container" id="section-slider">
        <div id="revolution-slider">
            <ul>
                <li data-masterspeed="1500" data-slotamount="10" data-transition="fade">
                    <!--  BACKGROUND IMAGE -->
                    <img alt="" class="rev-slidebg" data-bgparallax="15" data-bgposition="center center"
                        data-duration="20000" data-ease="Power1.easeOut" data-kenburns="off"
                        data-lazyload="images/slider/1.jpg')}}" data-no-retina="" data-offsetend="0 0"
                        data-offsetstart="0 0" data-rotateend="0" data-rotatestart="0" data-scaleend="100"
                        data-scalestart="110" src="{{ asset('user/images/slider/1.jpg') }}">

                    <div class="tp-caption custom-font-1" data-height="none" data-responsive_offset="on" data-splitin="none"
                        data-splitout="none" data-start="1000"
                        data-transform_in="y:-100px;opacity:0;s:800;e:Power2.easeOut;"
                        data-transform_out="opacity:0;y:-20;s:500;e:Power2.easeInOut;" data-whitespace="nowrap"
                        data-width="none" data-x="20" data-y="230">
                        Guaranteed
                    </div>
                    <div class="tp-caption custom-font-2" data-height="none" data-responsive_offset="on" data-splitin="none"
                        data-splitout="none" data-start="700" data-transform_in="y:-100px;opacity:0;s:800;e:Power2.easeOut;"
                        data-transform_out="opacity:0;y:-20;s:700;e:Power2.easeInOut;" data-whitespace="nowrap"
                        data-width="none" data-x="20" data-y="center">
                        99.99% Uptime
                    </div>
                    <div class="tp-caption tp-text text-left" data-height="none" data-responsive_offset="on"
                        data-splitin="none" data-splitout="none" data-start="1300"
                        data-transform_in="y:100px;opacity:0;s:800;e:Power2.easeOut;"
                        data-transform_out="opacity:0;y:30;s:700;e:Power2.easeInOut;" data-whitespace="nowrap"
                        data-width="none" data-x="20" data-y="350">
                        <a class="btn-slider" href="#">Read More</a>
                    </div>
                    <div class="tp-caption tp-text text-left" data-height="none" data-responsive_offset="on"
                        data-splitin="none" data-splitout="none" data-start="1500"
                        data-transform_in="y:0;s:0;opacity:0;s:800;e:Power2.easeOut;"
                        data-transform_out="opacity:0;y:30;s:700;e:Power2.easeInOut;" data-whitespace="nowrap"
                        data-width="none" data-x="600" data-y="center">
                        <img src="{{ asset('user/images/slider/half-circle.png') }}" alt="">
                    </div>
                    <div class="tp-caption tp-text text-left" data-height="none" data-responsive_offset="on"
                        data-splitin="none" data-splitout="none" data-start="1600"
                        data-transform_in="y:0;rZ:-180;opacity:0;0:100;s:3200;e:Power2.easeOut;"
                        data-transform_out="opacity:0;y:30;s:700;e:Power2.easeInOut;" data-whitespace="nowrap"
                        data-width="none" data-x="580" data-y="373">
                        <img src="{{ asset('user/images/slider/line.png') }}" alt="">
                    </div>
                </li>

                <li data-masterspeed="1500" data-slotamount="10" data-transition="fade">
                    <!--  BACKGROUND IMAGE -->
                    <img alt="" class="rev-slidebg" data-bgparallax="15" data-bgposition="center center"
                        data-duration="20000" data-ease="Power1.easeOut" data-kenburns="off"
                        data-lazyload="images/slider/2.jpg')}}" data-no-retina="" data-offsetend="0 0"
                        data-offsetstart="0 0" data-rotateend="0" data-rotatestart="0" data-scaleend="100"
                        data-scalestart="110" src="{{ asset('user/images/slider/1.jpg') }}">

                    <div class="tp-caption custom-font-1" data-height="none" data-responsive_offset="on"
                        data-splitin="none" data-splitout="none" data-start="1000"
                        data-transform_in="y:-100px;opacity:0;s:800;e:Power2.easeOut;"
                        data-transform_out="opacity:0;y:-20;s:500;e:Power2.easeInOut;" data-whitespace="nowrap"
                        data-width="none" data-x="20" data-y="230">
                        Multiple
                    </div>
                    <div class="tp-caption custom-font-2" data-height="none" data-responsive_offset="on"
                        data-splitin="none" data-splitout="none" data-start="700"
                        data-transform_in="y:-100px;opacity:0;s:800;e:Power2.easeOut;"
                        data-transform_out="opacity:0;y:-20;s:700;e:Power2.easeInOut;" data-whitespace="nowrap"
                        data-width="none" data-x="20" data-y="center">
                        Data Centers
                    </div>
                    <div class="tp-caption tp-text text-left" data-height="none" data-responsive_offset="on"
                        data-splitin="none" data-splitout="none" data-start="1300"
                        data-transform_in="y:100px;opacity:0;s:800;e:Power2.easeOut;"
                        data-transform_out="opacity:0;y:30;s:700;e:Power2.easeInOut;" data-whitespace="nowrap"
                        data-width="none" data-x="20" data-y="350">
                        <a class="btn-slider" href="#">Read More</a>
                    </div>
                    <div class="tp-caption tp-text text-left" data-height="none" data-responsive_offset="on"
                        data-splitin="none" data-splitout="none" data-start="1500"
                        data-transform_in="y:0;s:0;opacity:0;s:800;e:Power2.easeOut;"
                        data-transform_out="opacity:0;y:30;s:700;e:Power2.easeInOut;" data-whitespace="nowrap"
                        data-width="none" data-x="550" data-y="center">
                        <img src="{{ asset('user/images/slider/map.png') }}" alt="">
                    </div>
                    <div class="tp-caption tp-text text-left" data-height="none" data-responsive_offset="on"
                        data-splitin="none" data-splitout="none" data-start="1600"
                        data-transform_in="y:100;opacity:0;0:100;s:800;e:Power2.easeOut;"
                        data-transform_out="opacity:0;y:30;s:700;e:Power2.easeInOut;" data-whitespace="nowrap"
                        data-width="none" data-x="690" data-y="360">
                        <img src="{{ asset('user/images/slider/marker.png') }}" alt="">
                    </div>

                    <div class="tp-caption tp-text text-left" data-height="none" data-responsive_offset="on"
                        data-splitin="none" data-splitout="none" data-start="1700"
                        data-transform_in="y:100;opacity:0;0:100;s:800;e:Power2.easeOut;"
                        data-transform_out="opacity:0;y:30;s:700;e:Power2.easeInOut;" data-whitespace="nowrap"
                        data-width="none" data-x="585" data-y="190">
                        <img src="{{ asset('user/images/slider/marker.png') }}" alt="">
                    </div>

                    <div class="tp-caption tp-text text-left" data-height="none" data-responsive_offset="on"
                        data-splitin="none" data-splitout="none" data-start="1800"
                        data-transform_in="y:100;opacity:0;0:100;s:800;e:Power2.easeOut;"
                        data-transform_out="opacity:0;y:30;s:700;e:Power2.easeInOut;" data-whitespace="nowrap"
                        data-width="none" data-x="785" data-y="215">
                        <img src="{{ asset('user/images/slider/marker.png') }}" alt="">
                    </div>

                    <div class="tp-caption tp-text text-left" data-height="none" data-responsive_offset="on"
                        data-splitin="none" data-splitout="none" data-start="1900"
                        data-transform_in="y:100;opacity:0;0:100;s:800;e:Power2.easeOut;"
                        data-transform_out="opacity:0;y:30;s:700;e:Power2.easeInOut;" data-whitespace="nowrap"
                        data-width="none" data-x="920" data-y="250">
                        <img src="{{ asset('user/images/slider/marker.png') }}" alt="">
                    </div>

                    <div class="tp-caption tp-text text-left" data-height="none" data-responsive_offset="on"
                        data-splitin="none" data-splitout="none" data-start="2000"
                        data-transform_in="y:100;opacity:0;0:100;s:800;e:Power2.easeOut;"
                        data-transform_out="opacity:0;y:30;s:700;e:Power2.easeInOut;" data-whitespace="nowrap"
                        data-width="none" data-x="980" data-y="345">
                        <img src="{{ asset('user/images/slider/marker.png') }}" alt="">
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section id="section-highlight" class="relative pos-top no-top mt-60 no-bg">

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-sm-30 wow fadeInRight" data-wow-delay=".2s">
                    <div class="feature-box-type-1">
                        <i class="icon-ribbon"></i>
                        <div class="text">
                            <h3>Full Featured</h3>Uhost is the most complete web hosting and WHMCS template.
                            Everythings you need to start your hosting business is here.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-30 wow fadeInRight" data-wow-delay=".4s">
                    <div class="feature-box-type-1 hover">
                        <i class="icon-speedometer"></i>
                        <div class="text">
                            <h3 class="">Fast &amp; Reliable</h3>Uhost come with 7 color schemes you can
                            choose. Both front pages and clientarea pages will looks outstanding!
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-30 wow fadeInRight" data-wow-delay=".6s">
                    <div class="feature-box-type-1">
                        <i class="icon-alarmclock"></i>
                        <div class="text">
                            <h3>24/7 Expert Support</h3>Stop thinking, start doing. Purchase Uhost now and let
                            your journey begin. Uhost provide all in one hosting solutions.

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="no-top no-bottom text-light" id="section-subscribe-no-bg"
        data-bgimage="url(images/background/2.jpg) center" data-stellar-background-ratio=".2">
        <div class="overlay-gradient">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 wow fadeInUp" data-wow-delay=".2s">
                        <form action='check.php' class="row" id='form_sb' method="post" name="form_sb">
                            <div class="col text-center">
                                <div class="spacer-10"></div>
                                <input class="form-control" id='domain_name' name='domain_name'
                                    placeholder="enter domain name" type='text'> <a id="btn-submit"
                                    href="javascript:;" onclick="document.getElementById('form_sb').submit();"><i
                                        class="arrow_right"></i></a>
                                <div class="clearfix"></div>
                                <div class="spacer-10"></div>
                                <div class="domain-ext">
                                    <div class="ext">
                                        <h4>.com</h4>
                                        $4.99/year
                                    </div>

                                    <div class="ext">
                                        <h4>.net</h4>
                                        $3.99/year
                                    </div>

                                    <div class="ext">
                                        <h4>.co</h4>
                                        $2.99/year
                                    </div>

                                    <div class="ext">
                                        <h4>.info</h4>
                                        $3.90/year
                                    </div>

                                    <div class="ext">
                                        <h4>.biz</h4>
                                        $5.99/year
                                    </div>
                                </div>

                                <div class="spacer-20"></div>

                                <a href="#domains" class="scroll-to">See all domain extensions and
                                    pricings.</a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing-table" class="pb40">
        @include('user.pages.include.list_proxy')
    </section>

    <section id="section-banner" class="no-bottom no-top img-fluid bg-gradient-to-right text-light relative pos-top">
        <div class="container">
            <div class="row align-items-center wow fadeIn" data-wow-delay=".2s">
                <div class="col-lg-4 d-none d-lg-block d-xl-block text-center">
                    <img class="relative img-fluid mt-60" src="{{ asset('user/images/misc/1.png') }}" alt="">
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay=".4s">
                    <div class="p-sm-30 pb-sm-0 mb-sm-0">
                        <h2>30 days money back satisfication guarantee</h2>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay=".6s">
                    <div class="p-sm-30">
                        <p class="lead">If you not satisfy with Uhost, we will refund your payment. No
                            hassle, no risk. You can cancel plan at any time.</p>
                        <div class="spacer-half"></div>
                        <a class="btn-custom" href="#">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-features">
        <div class="container">
            <div class="row">
                <div class="col-md text-center wow fadeInUp">
                    <h2><span class="uptitle id-color">Build For Speed</span>Hosting Features</h2>
                    <div class="spacer-20"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md col-sm-6 mb-sm-30 wow fadeInRight" data-wow-delay=".2s">
                    <div class="feature-box-type-2">
                        <i class="icon-alarmclock"></i>
                        <h4>Instant Activation</h4>
                    </div>
                </div>

                <div class="col-md col-sm-6 mb-sm-30 wow fadeInRight" data-wow-delay=".4s">
                    <div class="feature-box-type-2">
                        <i class="icon-profile-male"></i>
                        <h4>24 / 7 Support</h4>
                    </div>
                </div>

                <div class="col-md col-sm-6 mb-sm-30 wow fadeInRight" data-wow-delay=".6s">
                    <div class="feature-box-type-2">
                        <i class="icon-refresh"></i>
                        <h4>99.9% Uptime</h4>
                    </div>
                </div>

                <div class="col-md col-sm-6 mb-sm-30 wow fadeInRight" data-wow-delay=".8s">
                    <div class="feature-box-type-2">
                        <i class="icon-upload"></i>
                        <h4>Cloud Powered</h4>
                    </div>
                </div>
                <div class="col-md col-sm-6 mb-sm-30 wow fadeInRight" data-wow-delay="1s">
                    <div class="feature-box-type-2">
                        <i class="icon-layers"></i>
                        <h4>Multi Datacenter</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-testimonial" class="no-top no-bottom text-light"
        data-bgimage="url(images/background/1.jpg) center" data-stellar-background-ratio=".2">
        <div class="overlay-gradient">
            <div class="text-center wow fadeInUp">
                <h2><span class="uptitle">Testimonial</span>What They Says</h2>
                <div class="spacer-20"></div>
            </div>
            <div class="owl-carousel owl-theme wow fadeInUp" id="testimonial-carousel">
                <div class="item">
                    <div class="de_testi opt-2">
                        <blockquote>
                            <p>Great support, like i have never seen before. Thanks to the support team, they
                                are very helpfull. This company provide customers great solution, that makes
                                them best.
                            </p>
                            <div class="de_testi_by">
                                <img alt="" class="rounded-circle"
                                    src="{{ asset('user/images/people/1.jpg') }}">
                                <span>John, Pixar Studio</span>
                            </div>
                        </blockquote>
                    </div>
                </div>
                <div class="item">
                    <div class="de_testi opt-2">
                        <blockquote>
                            <p>Great support, like i have never seen before. Thanks to the support team, they
                                are very helpfull. This company provide customers great solution, that makes
                                them best.</p>
                            <div class="de_testi_by">
                                <img alt="" class="rounded-circle"
                                    src="{{ asset('user/images/people/2.jpg') }}">
                                <span>Sarah, Microsoft</span>
                            </div>
                        </blockquote>
                    </div>
                </div>
                <div class="item">
                    <div class="de_testi opt-2">
                        <blockquote>
                            <p>Great support, like i have never seen before. Thanks to the support team, they
                                are very helpfull. This company provide customers great solution, that makes
                                them best.</p>
                            <div class="de_testi_by">
                                <img alt="" class="rounded-circle"
                                    src="{{ asset('user/images/people/3.jpg') }}">
                                <span>Michael, Apple</span>
                            </div>
                        </blockquote>
                    </div>
                </div>
                <div class="item">
                    <div class="de_testi opt-2">
                        <blockquote>
                            <p>Great support, like i have never seen before. Thanks to the support team, they
                                are very helpfull. This company provide customers great solution, that makes
                                them best.</p>
                            <div class="de_testi_by">
                                <img alt="" class="rounded-circle"
                                    src="{{ asset('user/images/people/4.jpg') }}">
                                <span>Thomas, Samsung</span>
                            </div>
                        </blockquote>
                    </div>
                </div>
                <div class="item">
                    <div class="de_testi opt-2">
                        <blockquote>
                            <p>Great support, like i have never seen before. Thanks to the support team, they
                                are very helpfull. This company provide customers great solution, that makes
                                them best.</p>
                            <div class="de_testi_by">
                                <img alt="" class="rounded-circle"
                                    src="{{ asset('user/images/people/1.jpg') }}">
                                <span>John, Pixar Studio</span>
                            </div>
                        </blockquote>
                    </div>
                </div>
                <div class="item">
                    <div class="de_testi opt-2">
                        <blockquote>
                            <p>Great support, like i have never seen before. Thanks to the support team, they
                                are very helpfull. This company provide customers great solution, that makes
                                them best.</p>
                            <div class="de_testi_by">
                                <img alt="" class="rounded-circle"
                                    src="{{ asset('user/images/people/2.jpg') }}">
                                <span>Sarah, Microsoft</span>
                            </div>
                        </blockquote>
                    </div>
                </div>
                <div class="item">
                    <div class="de_testi opt-2">
                        <blockquote>
                            <p>Great support, like i have never seen before. Thanks to the support team, they
                                are very helpfull. This company provide customers great solution, that makes
                                them best.</p>
                            <div class="de_testi_by">
                                <img alt="" class="rounded-circle"
                                    src="{{ asset('user/images/people/3.jpg') }}">
                                <span>Michael, Apple</span>
                            </div>
                        </blockquote>
                    </div>
                </div>
                <div class="item">
                    <div class="de_testi opt-2">
                        <blockquote>
                            <p>Great support, like i have never seen before. Thanks to the support team, they
                                are very helpfull. This company provide customers great solution, that makes
                                them best.</p>
                            <div class="de_testi_by">
                                <img alt="" class="rounded-circle"
                                    src="{{ asset('user/images/people/4.jpg') }}">
                                <span>Thomas, Samsung</span>
                            </div>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-faq">
        <div class="container">
            <div class="row">
                <div class="col text-center wow fadeInUp">
                    <h2><span class="uptitle id-color">Do You Have</span>Any Questions?</h2>
                    <div class="spacer-20"></div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-md-10 offset-md-1">
                    <div class="accordion">
                        <div class="accordion-section">
                            <div class="accordion-section-title" data-tab="#accordion-1">
                                How do I get started with web hosting?
                            </div>
                            <div class="accordion-section-content" id="accordion-1">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                    molestias excepturi sint occaecati cupiditate non provident, similique sunt
                                    in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
                                    fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                            </div>
                            <div class="accordion-section-title" data-tab="#accordion-2">
                                What is difference for each plan?
                            </div>
                            <div class="accordion-section-content" id="accordion-2">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                    molestias excepturi sint occaecati cupiditate non provident, similique sunt
                                    in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
                                    fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                            </div>
                            <div class="accordion-section-title" data-tab="#accordion-3">
                                What kind of web hosting do I need?
                            </div>
                            <div class="accordion-section-content" id="accordion-3">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                    molestias excepturi sint occaecati cupiditate non provident, similique sunt
                                    in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
                                    fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                            </div>
                            <div class="accordion-section-title" data-tab="#accordion-4">
                                Why do I need domain name?
                            </div>
                            <div class="accordion-section-content" id="accordion-4">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                    molestias excepturi sint occaecati cupiditate non provident, similique sunt
                                    in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
                                    fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                            </div>
                            <div class="accordion-section-title" data-tab="#accordion-5">
                                What my website protected from hackers?
                            </div>
                            <div class="accordion-section-content" id="accordion-5">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                    molestias excepturi sint occaecati cupiditate non provident, similique sunt
                                    in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
                                    fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                            </div>
                            <div class="accordion-section-title" data-tab="#accordion-6">
                                How do I backup my website?
                            </div>
                            <div class="accordion-section-content" id="accordion-6">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                    molestias excepturi sint occaecati cupiditate non provident, similique sunt
                                    in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
                                    fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-fun-facts" class="pt60 pb60 text-light bg-gradient-to-right">
        <div class="container">

            <div class="row">
                <div class="col-md-3 col-sm-6 wow fadeInRight" data-wow-delay=".2s">
                    <div class="de_count">
                        <h3 class="timer" data-to="15425" data-speed="3000">0</h3>
                        <span>Website Powered</span>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 wow fadeInRight" data-wow-delay=".4s">
                    <div class="de_count">
                        <h3 class="timer" data-to="8745" data-speed="3000">0</h3>
                        <span>Clients Supported</span>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 wow fadeInRight" data-wow-delay=".6s">
                    <div class="de_count">
                        <h3 class="timer" data-to="235" data-speed="3000">0</h3>
                        <span>Awards Winning</span>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 wow fadeInRight" data-wow-delay=".8s">
                    <div class="de_count">
                        <h3 class="timer" data-to="15" data-speed="3000">0</h3>
                        <span>Years Experience</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="section-news">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col text-center">
                    <h2><span class="uptitle id-color">From Redaction</span>Latest News</h2>
                    <div class="spacer-20"></div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme" id="blog-carousel">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="post-image">
                                    <img alt="" src="{{ asset('user/images/news/1.jpg') }}">
                                    <div class="post-info">
                                        <div class="inner">
                                            <span class="post-date">10 hours ago</span> <span class="post-author">Oscar
                                                Helman</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-text">
                                    <h3><a href="news-single.html">How to Choose Good Hosting</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="post-image">
                                    <img alt="" src="{{ asset('user/images/news/2.jpg') }}">
                                    <div class="post-info">
                                        <div class="inner">
                                            <span class="post-date">1 day ago</span> <span class="post-author">Oscar
                                                Helman</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-text">
                                    <h3><a href="news-single.html">Cloud Computing Trends of 2020</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="post-image">
                                    <img alt="" src="{{ asset('user/images/news/3.jpg') }}">
                                    <div class="post-info">
                                        <div class="inner">
                                            <span class="post-date">2 days ago</span> <span class="post-author">Oscar
                                                Helman</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-text">
                                    <h3><a href="news-single.html">How to Speed Up Your Website</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="post-image">
                                    <img alt="" src="{{ asset('user/images/news/4.jpg') }}">
                                    <div class="post-info">
                                        <div class="inner">
                                            <span class="post-date">3 days ago</span> <span class="post-author">Oscar
                                                Helman</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-text">
                                    <h3><a href="news-single.html">How to Create Instant Website</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="post-image">
                                    <img alt="" src="{{ asset('user/images/news/5.jpg') }}">
                                    <div class="post-info">
                                        <div class="inner">
                                            <span class="post-date">4 days ago</span> <span class="post-author">Oscar
                                                Helman</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-text">
                                    <h3><a href="news-single.html">How to Get More Traffics</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="post-image">
                                    <img alt="" src="{{ asset('user/images/news/6.jpg') }}">
                                    <div class="post-info">
                                        <div class="inner">
                                            <span class="post-date">5 days ago</span> <span class="post-author">Oscar
                                                Helman</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-text">
                                    <h3><a href="news-single.html">How Sell Digital Product</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
