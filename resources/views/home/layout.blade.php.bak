<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Atlantic Residents Properties | Property, realtors, real estates, rent">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = {csrfToken: '{{ csrf_token() }}'}</script>

    <title>@yield('title') - Atlantic Residents Properties</title>

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/img/logoonly.png') }}" type="image/x-icon" />

    <script src="{{ asset('js/app.js') }}" defer></script>

    @yield('top-assets')

</head>

<body class="yellow-skin">

<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader"></div>

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <!-- Start Navigation -->
    <div class="header header-light">
        <div class="container">
            <nav id="navigation" class="navigation navigation-landscape">
                <div class="nav-header">
                    <a class="nav-brand" href="#">
                        <img src="{{ asset('assets/img/logo.png') }}" class="logo" alt="" />
                    </a>
                    <div class="nav-toggle"></div>
                    <div class="mobile_nav">
                        <ul>
                            <li class="_my_prt_list"><a href="#"><span>2</span>My List</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#login">
                                    <i class="fas fa-user-circle fa-lg"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="nav-menus-wrapper" style="transition-property: none;">
                    <ul class="nav-menu">
                        <li><a href="{{ url('/') }}">Home<span class="submenu-indicator"></span></a></li>
                        <li><a href="{{ url('/properties') }}">Properties<span class="submenu-indicator"></span></a></li>
{{--                        <li><a href="{{ url('/properties') }}">Properties<span class="submenu-indicator"></span></a>--}}
{{--                            <ul class="nav-dropdown nav-submenu">--}}
{{--                                <li><a href="#">Listing Grid</a></li>--}}
{{--                                <li><a href="#">Listing List</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        <li><a href="{{ url('/about') }}">About<span class="submenu-indicator"></span></a>
                            <ul class="nav-dropdown nav-submenu">
                                <li><a href="{{ url('/about') }}">Company</a></li>
                                <li><a href="{{ url('/terms') }}">Terms of use</a></li>
                                <li><a href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/contact') }}">Contact<span class="submenu-indicator"></span></a></li>
                    </ul>

                    <ul class="nav-menu nav-menu-social align-to-right">
                        <li>
                            <a href="{{ route('login.form') }}" class="alio_green">
                                <i class="fas fa-sign-in-alt mr-1"></i>
                                <span class="dn-lg">Login</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('register.form') }}" class="alio_green">
                                <i class="fas fa-sign-in-alt mr-1"></i>
                                <span class="dn-lg">Register</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>
    </div>

    <div id="app">
        @yield('content')
    </div>

    <!-- ============================ Footer Start ================================== -->
    <footer class="dark-footer skin-dark-footer style-2">
        <div class="footer-middle">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-md-5">
                        <div class="footer_widget">
                            <img src="{{ asset('assets/img/logo-light.png') }}"
                                 class="img-footer small mb-2" alt="" />
                            <h4 class="extream mb-3">Do you need help with<br>anything?</h4>
                            <p>Receive updates, hot deals, tutorials, discounts sent straignt in your inbox every month</p>
                            <div class="foot-news-last">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Email Address">
                                    <div class="input-group-append">
                                        <button type="button"
                                                class="input-group-text theme-bg b-0 text-light">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-7 ml-auto">
                        <div class="row">

                            <div class="col-lg-6 col-md-6">
                                <div class="footer_widget">
                                    <h4 class="widget_title">Links</h4>
                                    <ul class="footer-menu">
                                        <li><a href="{{ url('/terms') }}">Terms of use</a></li>
                                        <li><a href="{{ url('/privacy') }}">Privacy policy</a></li>
                                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="footer_widget">
                                    <h4 class="widget_title">Contacts</h4>
                                    <ul class="footer-menu">
                                        <li><strong>Email: </strong> info@atlanticresidentsproperties.com</li>
                                        <li><strong>Mobile: </strong> +1 318-309-7154</li>
                                        <li><strong>Address: </strong> 345 E. Esplanade Ave 0491 San Jacinto, CA, 96589</li>
                                        <li><strong>Address: </strong> 3300 S I 10 SERVICE METAIRIE LA 70001-1973 US</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 text-center">
                        <p class="mb-0">© {{ date('Y') }} Atlantic Residents Properties</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ============================ Footer End ================================== -->

    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/slider-bg.js') }}"></script>
<script src="{{ asset('assets/js/lightbox.js') }}"></script>
<script src="{{ asset('assets/js/imagesloaded.js') }}"></script>
<script src="{{ asset('assets/js/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->

</body>

</html>
