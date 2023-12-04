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
                @include('user.pages.include.list_proxy')
            </div>
        </div>
    </section>
@endsection
