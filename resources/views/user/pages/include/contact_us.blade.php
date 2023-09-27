@extends('user.layouts.app')

@section('content')
        <div id="top"></div>
        <!-- revolution slider begin -->
        <!-- section begin -->
        <section class="relative no-top no-bottom text-light" data-bgimage="url(images/background/10.jpg)"
            data-stellar-background-ratio=".2">

            <div class="overlay-gradient t70">
                <div class="center-y">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 offset-md-2 text-center">
                                <div class="col text-center">
                                    <div class="spacer-single"></div>
                                    <h1 class="no-bottom">Contact Us</h1>
                                    <p class="lead">Ask any questions using form below.</p>
                                </div>
                            </div>

                            <div class="spacer-10"></div>

                            <div class="col-lg-8 mb-sm-30">
                                <form name="contactForm" id='contact_form' class="form-s1" method="post"
                                    action='email.php'>

                                    <div class="field-set">
                                        <input type='text' name='name' id='name' class="form-control"
                                            placeholder="Your Name">
                                    </div>

                                    <div class="field-set">
                                        <input type='text' name='email' id='email' class="form-control"
                                            placeholder="Your Email">
                                    </div>

                                    <div class="field-set">
                                        <input type='text' name='phone' id='phone' class="form-control"
                                            placeholder="Your Phone">
                                    </div>

                                    <div class="field-set">
                                        <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                                    </div>

                                    <div class="spacer-half"></div>

                                    <div id='submit'>
                                        <input type='submit' id='send_message' value='Submit Form' class="btn btn-custom">
                                    </div>
                                    <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                    <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.
                                    </div>

                                </form>
                            </div>
                            <div class="col-lg-4 mb30">

                                <div class="padding40 bg-gradient-to-right-2 text-light rounded">
                                    <h3>US Office</h3>
                                    <address class="s1">
                                        <span><i class="fa fa-map-marker fa-lg"></i>08 W 36th St, New York, NY 10001</span>
                                        <span><i class="fa fa-phone fa-lg"></i>+1 333 9296</span>
                                        <span><i class="fa fa-envelope-o fa-lg"></i><a
                                                href="mailto:contact@example.com">contact@example.com</a></span>
                                        <span><i class="fa fa-file-pdf-o fa-lg"></i><a href="#">Download
                                                Brochure</a></span>
                                    </address>
                                </div>

                                <div class="spacer-30"></div>

                                <div class="padding40 bg-gradient-to-right text-light rounded">
                                    <h3>AU Office</h3>
                                    <address class="s1">
                                        <span><i class="fa fa-map-marker fa-lg"></i>100 Mainstreet Center, Sydney</span>
                                        <span><i class="fa fa-phone fa-lg"></i>+61 333 9296</span>
                                        <span><i class="fa fa-envelope-o fa-lg"></i><a
                                                href="mailto:contact@example.com">contact@example.com</a></span>
                                        <span><i class="fa fa-file-pdf-o fa-lg"></i><a href="#">Download
                                                Brochure</a></span>
                                    </address>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- section close -->
@endsection
