@extends('home.layout')

@section('title')
    Home
@endsection

@section('top-assets')
@endsection

@section('content')
<div>
    <!-- End Navigation -->
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->

    <!-- ============================ Hero Banner  Start================================== -->
    <div class="image-cover hero_banner"
         style="background:#042238 url({{ asset('assets/img/banner-5.jpg') }}) no-repeat;">
        <div class="container">

            <div class="row">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <h2 class="big-header-capt mb-4 text-white">Find Your Next<br>Perfect <span class="theme-cl">Place</span> To<br> Live.</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="full_search_box nexio_search lightanic_search hero_search-radius modern">
                        <div class="search_hero_wrapping">

                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <label>City/Street</label>
                                        <div class="input-with-icon">
                                            <select id="location" class="form-control">
                                                <option value="">&nbsp;</option>
                                                <option value="1">New York City</option>
                                                <option value="2">Honolulu, Hawaii</option>
                                                <option value="3">California</option>
                                                <option value="4">New Orleans</option>
                                                <option value="5">Washington</option>
                                                <option value="6">Charleston</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <label>Property Type</label>
                                        <div class="input-with-icon">
                                            <select id="ptypes" class="form-control">
                                                <option value="">&nbsp;</option>
                                                <option value="1">All categories</option>
                                                <option value="2">Apartment</option>
                                                <option value="3">Villas</option>
                                                <option value="4">Commercial</option>
                                                <option value="5">Offices</option>
                                                <option value="6">Garage</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-12 d-md-none d-lg-block">
                                    <div class="form-group">
                                        <label>Price Range</label>
                                        <div class="input-with-icon">
                                            <select id="price" class="form-control">
                                                <option value="">&nbsp;</option>
                                                <option value="1">From 40,000 To 10m</option>
                                                <option value="2">From 60,000 To 20m</option>
                                                <option value="3">From 70,000 To 30m</option>
                                                <option value="3">From 80,000 To 40m</option>
                                                <option value="3">From 90,000 To 50m</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <label>Property Type</label>
                                        <div class="input-with-icon">
                                            <select id="ptypes" class="form-control">
                                                <option value="">&nbsp;</option>
                                                <option value="1">All categories</option>
                                                <option value="2">Apartment</option>
                                                <option value="3">Villas</option>
                                                <option value="4">Commercial</option>
                                                <option value="5">Offices</option>
                                                <option value="6">Garage</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-3 col-sm-12 small-padd">
                                    <div class="form-group none">
                                        <a href="#" class="btn search-btn">Search Property</a>
                                    </div>
                                </div>
                            </div>

                        </div>
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

    <!-- ============================ Latest Property For Sale Start ================================== -->
    <section class="min">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10 text-center">
                    <div class="sec-heading center mb-4">
                        <h2>We Make Finding and Buying a Home Easy</h2>
                        <p>Whether you’re buying or selling, our agents provide deep local real estate experience and knowledge to make your experience as frictionless and empowering as possible.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                @foreach($properties as $property)
                <home-sample-properties :property="{{ $property }}"></home-sample-properties>
                @endforeach

            </div>

        </div>
    </section>
    <!-- ============================ Latest Property For Sale End ================================== -->

    <!-- ============================ Smart Testimonials ================================== -->
    <section class="image-cover" style="background:#122947 url({{ asset('assets/img/pattern.png') }}) no-repeat;">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center light">
                        <h2>Our Featured Agents</h2>
                        <p>Whether you're buying or selling a home, a Atlantic residents properties Agent is ready to deliver an extraordinary experience. Our agents bring a commitment to helping you make informed decisions by capitalizing on current market opportunities and trends.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="item-slide space">

                        <!-- Single Item -->
                        <div class="single_items">
                            <div class="grid_agents style-2">
                                <div class="elio_mx_list theme-bg-2">20 Listings</div>
                                <div class="grid_agents-wrap">

                                    <div class="fr-grid-thumb">
                                        <a href="">
                                            <img src="assets/img/team-1.jpg" class="img-fluid mx-auto" alt="">
                                        </a>
                                        <ul class="inline_social">
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="fr-grid-deatil">
                                        <span><i class="ti-location-pin mr-1"></i>3298 Sardis Station</span>
                                        <h5 class="fr-can-name"><a href="">Fannie T. Dean</a></h5>
                                    </div>

                                    <div class="fr-infos-deatil">
                                        <a href="#"  data-toggle="modal" data-target="#autho-message" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
                                        <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="single_items">
                            <div class="grid_agents style-2">
                                <div class="elio_mx_list theme-bg-2">18 Listings</div>
                                <div class="grid_agents-wrap">

                                    <div class="fr-grid-thumb">
                                        <a href="">
                                            <img src="assets/img/team-2.jpg" class="img-fluid mx-auto" alt="">
                                        </a>
                                        <ul class="inline_social">
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="fr-grid-deatil">
                                        <span><i class="ti-location-pin mr-1"></i>1700 Pursglove, USA</span>
                                        <h5 class="fr-can-name"><a href="">Sylvia J. Church</a></h5>
                                    </div>

                                    <div class="fr-infos-deatil">
                                        <a href="#"  data-toggle="modal" data-target="#autho-message" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
                                        <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="single_items">
                            <div class="grid_agents style-2">
                                <div class="elio_mx_list theme-bg-2">30 Listings</div>
                                <div class="grid_agents-wrap">

                                    <div class="fr-grid-thumb">
                                        <a href="">
                                            <img src="assets/img/team-3.jpg" class="img-fluid mx-auto" alt="">
                                        </a>
                                        <ul class="inline_social">
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="fr-grid-deatil">
                                        <span><i class="ti-location-pin mr-1"></i>188 Barrington Court</span>
                                        <h5 class="fr-can-name"><a href="">Regina J. Stanhope</a></h5>
                                    </div>

                                    <div class="fr-infos-deatil">
                                        <a href="#"  data-toggle="modal" data-target="#autho-message" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
                                        <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="single_items">
                            <div class="grid_agents style-2">
                                <div class="elio_mx_list theme-bg-2">42 Listings</div>
                                <div class="grid_agents-wrap">

                                    <div class="fr-grid-thumb">
                                        <a href="">
                                            <img src="assets/img/team-4.jpg" class="img-fluid mx-auto" alt="">
                                        </a>
                                        <ul class="inline_social">
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="fr-grid-deatil">
                                        <span><i class="ti-location-pin mr-1"></i>1548 Cimmaron Road</span>
                                        <h5 class="fr-can-name"><a href="">Rose M. Bischof</a></h5>
                                    </div>

                                    <div class="fr-infos-deatil">
                                        <a href="#"  data-toggle="modal" data-target="#autho-message" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
                                        <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="single_items">
                            <div class="grid_agents style-2">
                                <div class="elio_mx_list theme-bg-2">17 Listings</div>
                                <div class="grid_agents-wrap">

                                    <div class="fr-grid-thumb">
                                        <a href="">
                                            <img src="assets/img/team-5.jpg" class="img-fluid mx-auto" alt="">
                                        </a>
                                        <ul class="inline_social">
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="fr-grid-deatil">
                                        <span><i class="ti-location-pin mr-1"></i>Montreal, USA</span>
                                        <h5 class="fr-can-name"><a href="">Lawanna K. Ruel</a></h5>
                                    </div>

                                    <div class="fr-infos-deatil">
                                        <a href="#"  data-toggle="modal" data-target="#autho-message" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
                                        <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ============================ Smart Testimonials End ================================== -->


    <!-- ============================ List Tag Start ================================== -->
    <section class="pt-4">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/app.png') }}" class="img-fluid" alt="" />
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="eplios_tags right">
                        <h2>Meet Agents & Fixed Your Deal</h2>
                        <p>Whether you’re a real estate agent or have a team, or you’re thinking about a career in real estate, eXp Realty offers every agent the unique opportunity to become a shareholder in their own company, and celebrate the company’s financial success. Join more than 80,000+ agents worldwide who are growing their business, income, and skills with Atlantic residents properties.</p>
                        <a href="{{ route('properties') }}" class="btn exliou theme-bg mt-2">Find Properties</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ============================ Property Tag End ================================== -->


    <!-- ============================ Property Tag Start ================================== -->
    <section class="image-cover" style="background:#122947 url({{ asset('assets/img/slider-2.jpg') }}) no-repeat;" data-overlay="2">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12">

                    <div class="tab_exclusive">
                        <h2>Are You Searching Perfect Place For your Dream?</h2>
                        <p>With the limited number of homes on the current U.S. market, you need an agent with the right connections, technology and strategies to achieve your home buying or selling vision. Whether you're feeling overwhelmed and want someone to take the wheel, or you just need a second opinion and you have it covered, you can be rest assured a Atlantic resident properties is the right agent for any level of service, in any market condition.'</p>
                        <a href="{{ route('properties') }}" class="btn exliou theme-bg mt-2">Find Properties</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Property Tag End ================================== -->

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
                        </div>
                        <a href="{{ url('/contact') }}" class="btn btn-call_action_wrap">Contact Us Today</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Call To Action End ================================== -->
</div>
@endsection
