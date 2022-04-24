@extends('home.layout')

@section('title')
    Contact
@endsection

@section('content')
    <!-- End Navigation -->
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <div class="page-title" style="background:#f4f4f4 url(assets/img/slider-3.jpg);" data-overlay="5">
        <div class="ht-80"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="_page_tetio">
                        <div class="pledtio_wrap"><span>Get In Touch</span></div>
                        <h2 class="text-light mb-0">Get Helps &amp; Friendly Support</h2>
                        <p>Looking for help or any support? We's available 24 hour a day.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="ht-120"></div>
    </div>

    <section class="pt-0">
        <div class="container">
            <div class="row align-items-center pretio_top">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="contact-box">
                        <i class="ti-shopping-cart theme-cl"></i>
                        <h4>Contact us</h4>
                        <p>info@atlanticresidentsproperties</p>
                        <span>+1 318-309-7154</span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="contact-box">
                        <i class="ti-user theme-cl"></i>
                        <h4>Contact Sales</h4>
                        <p>sales@atlanticresidentsproperties</p>
                        <span>+01 215 245 6258</span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="contact-box">
                        <i class="ti-comment-alt theme-cl"></i>
                        <h4>Start Live Chat</h4>
                        <span>+01 215 245 6258</span>
                        <span class="live-chat">Live Chat</span>
                    </div>
                </div>

            </div>

            <!-- row Start -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="property_block_wrap">

                        <div class="property_block_wrap_header">
                            <h4 class="property_block_title">Fill The Form</h4>
                        </div>

                        <div class="block-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control simple">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control simple">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" class="form-control simple">
                            </div>

                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control simple"></textarea>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-theme" type="submit">Submit Request</button>
                            </div>
                        </div>

                    </div>

                </div>


            </div>
            <!-- /row -->
        </div>
    </section>

    <!-- ============================ article Start ================================== -->
    <div class="clearfix"></div>
    <!-- ============================ article End ================================== -->

    <!-- ============================ Call To Action ================================== -->
    <section class="theme-bg call_action_wrap-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call_action_wrap">
                        <div class="call_action_wrap-head">
                            <h3>Do You Have Questions ?</h3>
                            <span>We'll help you to grow your career and growth.</span>
                        </div>
                        <a href="#" class="btn btn-call_action_wrap">Contact Us Today</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Call To Action End ================================== -->
@endsection
