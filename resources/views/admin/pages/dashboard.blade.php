@extends('admin.layouts.app', ['showHeader' => true, 'showBody' => true, 'showSidebar' => true, 'showFooter' => true])

@section('content')
    <section class="employer-details">
        <div class="row">
            <h2 class="top-hdng mt-2">Welcome Admin</h2>

            <div class="employers-count-box">
                <div class="row">

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="emp-box-count">
                            <h2>Employers</h2>
                            <h1>200</h1>
                            <a href="#" class="side-ad-plus"> <i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="emp-box-count">
                            <h2>Paid Employers</h2>
                            <h1>155</h1>
                            <a href="#" class="side-ad-plus"> <i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="emp-box-count">
                            <h2>Managers</h2>
                            <h1>1345</h1>
                            <a href="#" class="side-ad-plus"> <i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="emp-box-count">
                            <h2>Employees</h2>
                            <h1>5371</h1>
                            <a href="#" class="side-ad-plus"> <i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="admin-bottom-dashboard">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="admn-dash-left">

                            <div class="hding-admn">
                                <h3>Employers</h3>
                                <a href="#">VIEW ALL</a>
                            </div>

                            <div class="mcdonal-admin-bx">
                                <div class="mcdonal-ad-img">
                                    <img src="../assets/images/mcc.png" alt="">
                                    <h3>McDonalds</h3>
                                </div>
                                <h4>Australia</h4>
                            </div>

                            <div class="mcdonal-admin-bx">
                                <div class="mcdonal-ad-img">
                                    <img src="../assets/images/mcc.png" alt="">
                                    <h3>McDonalds</h3>
                                </div>
                                <h4>Australia</h4>
                            </div>

                            <div class="mcdonal-admin-bx">
                                <div class="mcdonal-ad-img">
                                    <img src="../assets/images/mcc.png" alt="">
                                    <h3>McDonalds</h3>
                                </div>
                                <h4>Australia</h4>
                            </div>

                            <div class="mcdonal-admin-bx">
                                <div class="mcdonal-ad-img">
                                    <img src="../assets/images/mcc.png" alt="">
                                    <h3>McDonalds</h3>
                                </div>
                                <h4>Australia</h4>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="admin-revw">
                            <h3>Reviews</h3>
                            <div class="employees-box">

                                <!-- Bordered Tabs Justified -->
                                <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified2" role="tablist">
                                    <li class="nav-item flex-fill" role="presentation">
                                        <button class="nav-link active" id="alltime-tab" data-bs-toggle="tab"
                                            data-bs-target="#bordered-justified-alltime" type="button" role="tab"
                                            aria-controls="alltime" aria-selected="false" tabindex="-1">ALL TIME </button>
                                    </li>
                                    <li class="nav-item flex-fill" role="presentation">
                                        <button class="nav-link" id="last-tab" data-bs-toggle="tab"
                                            data-bs-target="#bordered-justified-last" type="button" role="tab"
                                            aria-controls="last" aria-selected="true">LAST
                                            24 HOURS </button>
                                    </li>
                                    <li class="nav-item flex-fill" role="presentation">
                                        <button class="nav-link" id="lastwk-tab" data-bs-toggle="tab"
                                            data-bs-target="#bordered-justified-lastwk" type="button" role="tab"
                                            aria-controls="lastwk" aria-selected="false" tabindex="-1">LAST WEEK</button>
                                    </li>

                                </ul>
                                <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                                    <div class="tab-pane fade show active" id="bordered-justified-alltime" role="tabpanel"
                                        aria-labelledby="alltime-tab">
                                        <div class="admin-all-rvw" id="style-2">
                                            <div class="rvw-usr">
                                                <div class="rvw-bx">
                                                    <div class="rvw-img">
                                                        <img src="../assets/images/rvw1.png" alt="">
                                                    </div>

                                                    <div class="rvw-cntnt">
                                                        <h6>Vanille</h6>
                                                        <div class="rvw-cntnt-btm">
                                                            <p>5.0 </p>
                                                            <div class="str-5">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>

                                                            </div>
                                                            <span>1 Month Ago</span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed do eiusmod tempor
                                                    incididunt ut labore et dolore magna aliqua.</p>
                                            </div>

                                            <div class="rvw-usr">
                                                <div class="rvw-bx">
                                                    <div class="rvw-img">
                                                        <img src="../assets/images/rvw2.png" alt="">
                                                    </div>

                                                    <div class="rvw-cntnt">
                                                        <h6>Maduin</h6>
                                                        <div class="rvw-cntnt-btm">
                                                            <p>5.0 </p>
                                                            <div class="str-5">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>

                                                            </div>
                                                            <span>1 Month Ago</span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed do eiusmod tempor
                                                    incididunt ut labore et dolore magna aliqua.</p>
                                            </div>

                                            <div class="rvw-usr">
                                                <div class="rvw-bx">
                                                    <div class="rvw-img">
                                                        <img src="../assets/images/rvw2.png" alt="">
                                                    </div>

                                                    <div class="rvw-cntnt">
                                                        <h6>Maduin</h6>
                                                        <div class="rvw-cntnt-btm">
                                                            <p>5.0 </p>
                                                            <div class="str-5">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>

                                                            </div>
                                                            <span>1 Month Ago</span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed do eiusmod tempor
                                                    incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="bordered-justified-last" role="tabpanel"
                                        aria-labelledby="last-tab">
                                        <div class="admin-all-rvw">
                                            <div class="rvw-usr">
                                                <div class="rvw-bx">
                                                    <div class="rvw-img">
                                                        <img src="../assets/images/rvw1.png" alt="">
                                                    </div>

                                                    <div class="rvw-cntnt">
                                                        <h6>Vanille</h6>
                                                        <div class="rvw-cntnt-btm">
                                                            <p>5.0 </p>
                                                            <div class="str-5">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>

                                                            </div>
                                                            <span>1 Month Ago</span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed do eiusmod tempor
                                                    incididunt ut labore et dolore magna aliqua.</p>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="bordered-justified-lastwk" role="tabpanel"
                                        aria-labelledby="lastwk-tab">
                                        <div class="admin-all-rvw">


                                            <div class="rvw-usr">
                                                <div class="rvw-bx">
                                                    <div class="rvw-img">
                                                        <img src="../assets/images/rvw2.png" alt="">
                                                    </div>

                                                    <div class="rvw-cntnt">
                                                        <h6>Maduin</h6>
                                                        <div class="rvw-cntnt-btm">
                                                            <p>5.0 </p>
                                                            <div class="str-5">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>

                                                            </div>
                                                            <span>1 Month Ago</span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed do eiusmod tempor
                                                    incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <!-- End Bordered Tabs Justified -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection
