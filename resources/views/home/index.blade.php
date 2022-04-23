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
                    <h2 class="big-header-capt mb-4">Find Your Next<br>Perfect <span class="theme-cl">Place</span> To<br> Live.</h2>
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

                <home-properties :properties="{{ $properties }}"></home-properties>

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
                        <h2>Good Reviews By Clients</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8">
                    <div class="modern-testimonial">

                        <!-- Single Items -->
                        <div class="single_items">
                            <div class="_smart_testimons">
                                <div class="_smart_testimons_thumb">
                                    <img src="{{ asset('assets/img/user-1.jpg') }}" class="img-fluid" alt="">
                                    <span class="tes_quote"><i class="fa fa-quote-left"></i></span>
                                </div>
                                <div class="facts-detail">
                                    <p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.</p>
                                </div>
                                <div class="_smart_testimons_info">
                                    <h5>Lily Warliags</h5>
                                    <div class="_ovr_posts"><span>CEO, Leader</span></div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Items -->
                        <div class="single_items">
                            <div class="_smart_testimons">
                                <div class="_smart_testimons_thumb">
                                    <img src="{{ asset('assets/img/user-2.jpg') }}" class="img-fluid" alt="">
                                    <span class="tes_quote"><i class="fa fa-quote-left"></i></span>
                                </div>
                                <div class="facts-detail">
                                    <p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.</p>
                                </div>
                                <div class="_smart_testimons_info">
                                    <h5>Carol B. Halton</h5>
                                    <div class="_ovr_posts"><span>CEO, Leader</span></div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Items -->
                        <div class="single_items">
                            <div class="_smart_testimons">
                                <div class="_smart_testimons_thumb">
                                    <img src="{{ asset('assets/img/user-3.jpg') }}" class="img-fluid" alt="">
                                    <span class="tes_quote"><i class="fa fa-quote-left"></i></span>
                                </div>
                                <div class="facts-detail">
                                    <p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.</p>
                                </div>
                                <div class="_smart_testimons_info">
                                    <h5>Jesse L. Westberg</h5>
                                    <div class="_ovr_posts"><span>CEO, Leader</span></div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Items -->
                        <div class="single_items">
                            <div class="_smart_testimons">
                                <div class="_smart_testimons_thumb">
                                    <img src="{{ asset('assets/img/user-4.jpg') }}" class="img-fluid" alt="">
                                    <span class="tes_quote"><i class="fa fa-quote-left"></i></span>
                                </div>
                                <div class="facts-detail">
                                    <p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.</p>
                                </div>
                                <div class="_smart_testimons_info">
                                    <h5>Elmer N. Rodriguez</h5>
                                    <div class="_ovr_posts"><span>CEO, Leader</span></div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Items -->
                        <div class="single_items">
                            <div class="_smart_testimons">
                                <div class="_smart_testimons_thumb">
                                    <img src="{{ asset('assets/img/user-5.jpg') }}" class="img-fluid" alt="">
                                    <span class="tes_quote"><i class="fa fa-quote-left"></i></span>
                                </div>
                                <div class="facts-detail">
                                    <p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.</p>
                                </div>
                                <div class="_smart_testimons_info">
                                    <h5>Heather R. Sirianni</h5>
                                    <div class="_ovr_posts"><span>CEO, Leader</span></div>
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
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="eplios_tags">
                        <div class="tags-1">01</div>
                        <h2>Search & Find Perfect Place</h2>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
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

    <!-- ============================ List Tag Start ================================== -->
    <section class="pt-0">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/app.png') }}" class="img-fluid" alt="" />
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="eplios_tags right">
                        <div class="tags-2">02</div>
                        <h2>Meet Agents & Fixed Your Deal</h2>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                        <a href="#" class="btn exliou theme-bg mt-2">Find Properties</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ============================ Property Tag End ================================== -->

    <!-- ============================ Top Agents ================================== -->
    <section class="min gray">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center">
                        <h2>Our Featured Agents</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
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
                                            <img src="{{ asset('assets/img/team-1.jpg') }}" class="img-fluid mx-auto" alt="">
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
                                        <a href="#"  data-toggle="modal" data-target="#autho-message"
                                           class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
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
                                            <img src="{{ asset('assets/img/team-2.jpg') }}" class="img-fluid mx-auto" alt="">
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
                                        <a href="#"  data-toggle="modal" data-target="#autho-message"
                                           class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
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
                                            <img src="{{ asset('assets/img/team-3.jpg') }}" class="img-fluid mx-auto" alt="">
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
                                        <a href="#"  data-toggle="modal" data-target="#autho-message"
                                           class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
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
                                            <img src="{{ asset('assets/img/team-4.jpg') }}" class="img-fluid mx-auto" alt="">
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
                                        <a href="#"  data-toggle="modal" data-target="#autho-message"
                                           class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
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
                                        <a href="agent-page.html">
                                            <img src="{{ asset('assets/img/team-5.jpg') }}" class="img-fluid mx-auto" alt="">
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
    <!-- ============================ Top Agents End ================================== -->

    <!-- ============================ Property Tag Start ================================== -->
    <section class="image-cover" style="background:#122947 url({{ asset('assets/img/slider-2.jpg') }}) no-repeat;" data-overlay="2">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12">

                    <div class="tab_exclusive">
                        <h2>Are You Searching Perfect Place For your Dream?</h2>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi</p>
                        <a href="#" class="btn exliou theme-bg mt-2">Find Properties</a>
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
                            <span>We'll help you to grow your career and growth.</span>
                        </div>
                        <a href="#" class="btn btn-call_action_wrap">Contact Us Today</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Call To Action End ================================== -->
</div>
@endsection
