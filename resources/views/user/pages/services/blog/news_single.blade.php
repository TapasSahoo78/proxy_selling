@extends('user.layouts.app')

@section('content')
    <!-- section begin -->
    <section class="relative no-top no-bottom text-light" data-bgimage="url(user/images/background/6.jpg)"
        data-stellar-background-ratio=".2">

        <div class="overlay-gradient t80">
            <div class="center-y relative text-center" data-scroll-speed="4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="col text-center">
                                <div class="spacer-single"></div>
                                <h1>Make Better User Interface</h1>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- section close -->
    <section aria-label="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-read">

                        <img src="{{asset('user/images/news/big.jpg')}}" class="img-fluid" alt="">

                        <div class="post-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id
                                est laborum.</p>

                            <blockquote>Design can be art. Design can be simple. That’s why it’s so complicated. Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam.</blockquote>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id
                                est laborum.</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id
                                est laborum.</p>

                            <span class="post-date">April 1, 2018</span>
                            <span class="post-date">Oscar Helman</span>
                        </div>

                    </div>

                    <div class="spacer-single"></div>
                </div>

                <div id="sidebar" class="col-md-3">
                    <div class="widget widget-post">
                        <h4>Recent Posts</h4>
                        <div class="small-border"></div>
                        <ul>
                            <li><span class="date">22 Jun</span><a href="#">5 Powerfull Natural Antibiotics</a>
                            </li>
                            <li><span class="date">20 Jun</span><a href="#">25 Reasons to Eat Bananas</a></li>
                            <li><span class="date">12 Jun</span><a href="#">Summer Food and Ingredients Guide</a>
                            </li>
                            <li><span class="date">10 Jun</span><a href="#">6 Ways to Cook a Roast</a></li>

                        </ul>
                    </div>

                    <div class="widget widget_tags">
                        <h4>Tags</h4>
                        <div class="small-border"></div>
                        <ul>
                            <li><a href="#link">Art</a></li>
                            <li><a href="#link">Application</a></li>
                            <li><a href="#link">Design</a></li>
                            <li><a href="#link">Entertainment</a></li>
                            <li><a href="#link">Internet</a></li>
                            <li><a href="#link">Marketing</a></li>
                            <li><a href="#link">Multipurpose</a></li>
                            <li><a href="#link">Music</a></li>
                            <li><a href="#link">Print</a></li>
                            <li><a href="#link">Programming</a></li>
                            <li><a href="#link">Responsive</a></li>
                            <li><a href="#link">Website</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
