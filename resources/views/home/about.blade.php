@extends('home.layout')

@section('title')
    About
@endsection

@section('content')
    <!-- End Navigation -->
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->

    <!-- ============================ Hero Banner  Start================================== -->

    <div class="page-title" style="background:#f4f4f4 url({{ asset('assets/img/bg.jpg') }});" data-overlay="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                        <h2 class="breadcrumb-title">About Us - Who We Are?</h2>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Hero Banner End ================================== -->

    <section>
        <div class="container">
            <!-- row Start -->
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="story-wrap explore-content">
                        <h2>Our Agency Story</h2>
                        <span class="theme-cl">Check out our company story and work process</span>
                        <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <img src="{{ asset('assets/img/immio.jpg') }}" class="img-fluid rounded" alt="">
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
