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

    <!-- ============================ List Tag Start ================================== -->
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="eplios_tags">
                        <h2>Atlantic Residents Properties</h2>
                        <p>Buying a home is one of the most important decisions you will make, and our local experts at eXp Realty are here to make the process as easy as possible. Atlantic Residents Properties is one of the world’s fastest-growing real estate brokerages. Founded in 2009, we are now in 18 countries around the world with a community of over 80,000+ real estate professionals, all connected through our unique cloud-based platform.</p>
                        <ul class="eplios_list">
                            <li>100% Money Gaurantee</li>
                            <li>Super & Perfect Place</li>
                            <li>Effective & Best Price</li>
                            <li>Friendly & Lovely Area</li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/tag.png') }}" class="img-fluid" alt="" />
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ============================ Property Tag End ================================== -->

    <!-- ============================ Property Type Start ================================== -->
    <section class="light-bg min">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="sec-heading center">
                        <h2>Featured Property Types</h2>
                        <p>Find All Type of Property.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <div class="col-lg col-md-4">
                    <!-- Single Category -->
                    <div class="property_cats_boxs">
                        <a href="" class="category-box">
                            <div class="property_category_short">
                                <div class="category-icon clip-1">
                                    <i class="flaticon-beach-house-2"></i>
                                </div>

                                <div class="property_category_expand property_category_short-text">
                                    <h4>Family House</h4>
                                    <p>122 Property</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg col-md-4">
                    <!-- Single Category -->
                    <div class="property_cats_boxs">
                        <a href="" class="category-box">
                            <div class="property_category_short">
                                <div class="category-icon clip-2">
                                    <i class="flaticon-cabin"></i>
                                </div>

                                <div class="property_category_expand property_category_short-text">
                                    <h4>House & Villa</h4>
                                    <p>155 Property</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg col-md-4">
                    <!-- Single Category -->
                    <div class="property_cats_boxs">
                        <a href="" class="category-box">
                            <div class="property_category_short">
                                <div class="category-icon clip-3">
                                    <i class="flaticon-apartments"></i>
                                </div>

                                <div class="property_category_expand property_category_short-text">
                                    <h4>Apartment</h4>
                                    <p>300 Property</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg col-md-4">
                    <!-- Single Category -->
                    <div class="property_cats_boxs">
                        <a href="" class="category-box">
                            <div class="property_category_short">
                                <div class="category-icon clip-4">
                                    <i class="flaticon-student-housing"></i>
                                </div>

                                <div class="property_category_expand property_category_short-text">
                                    <h4>Office & Studio</h4>
                                    <p>80 Property</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg col-md-4">
                    <!-- Single Category -->
                    <div class="property_cats_boxs">
                        <a href="" class="category-box">
                            <div class="property_category_short">
                                <div class="category-icon clip-5">
                                    <i class="flaticon-modern-house-4"></i>
                                </div>

                                <div class="property_category_expand property_category_short-text">
                                    <h4>Villa & Condo</h4>
                                    <p>80 Property</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ============================ Property Type End ================================== -->
@endsection
