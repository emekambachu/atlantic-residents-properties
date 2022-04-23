@extends('home.layout')

@section('title')
    Login
@endsection

@section('top-assets')

@endsection

@section('content')
    <!-- End Navigation -->
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <div class="page-title" style="background:#f4f4f4 url({{ asset('assets/img/slider-3.jpg') }});" data-overlay="5">
        <div class="ht-10"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="_page_tetio">
                        <div class="pledtio_wrap"><span>Login</span></div>
                        <p>Login for a better experience</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="ht-20"></div>
    </div>

    <section class="pt-0">
        <div class="container">
            <login></login>
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
