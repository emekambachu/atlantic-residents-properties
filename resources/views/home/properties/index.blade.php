@extends('home.layout')

@section('title')
    Properties
@endsection

@section('content')
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
                    <h2 class="big-header-capt mb-4 text-white">Search Your Next<br>Property</h2>
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

    <section>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10 text-center">
                    <div class="sec-heading center mb-4">
                        <h2>Find properties</h2>
{{--                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>--}}
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                @foreach($properties as $property)
                    <home-sample-properties :property="{{ $property }}"></home-sample-properties>
                @endforeach


{{--                <!-- Single Property -->--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-12">--}}
{{--                    <div class="property-listing property-2">--}}

{{--                        <div class="listing-img-wrapper">--}}
{{--                            <div class="_exlio_125">For Sale</div>--}}
{{--                            <div class="list-img-slide">--}}
{{--                                <div class="click">--}}
{{--                                    <div><a href="">--}}
{{--                                            <img src="{{ asset('assets/img/p-7.png') }}"--}}
{{--                                                 class="img-fluid mx-auto" alt="" /></a></div>--}}
{{--                                    <div><a href="">--}}
{{--                                            <img src="{{ asset('assets/img/p-8.png') }}"--}}
{{--                                                 class="img-fluid mx-auto" alt="" /></a></div>--}}
{{--                                    <div><a href="">--}}
{{--                                            <img src="{{ asset('assets/img/p-9.png') }}"--}}
{{--                                                 class="img-fluid mx-auto" alt="" /></a></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="listing-detail-wrapper">--}}
{{--                            <div class="listing-short-detail-wrap">--}}
{{--                                <div class="_card_list_flex mb-2">--}}
{{--                                    <div class="_card_flex_01">--}}
{{--                                        <span class="_list_blickes _netork">5 Network</span>--}}
{{--                                        <span class="_list_blickes types">Offices</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="_card_flex_last">--}}
{{--                                        <div class="prt_saveed_12lk">--}}
{{--                                            <label class="toggler toggler-danger">--}}
{{--                                                <input type="checkbox"><i class="ti-heart"></i></label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="_card_list_flex">--}}
{{--                                    <div class="_card_flex_01">--}}
{{--                                        <h4 class="listing-name verified">--}}
{{--                                            <a href="" class="prt-link-detail">--}}
{{--                                                9632 New Green Garden, Huwai Denever USA, AWE789O</a></h4>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="price-features-wrapper">--}}
{{--                            <div class="list-fx-features">--}}
{{--                                <div class="listing-card-info-icon">--}}
{{--                                    <div class="inc-fleat-icon">--}}
{{--                                        <img src="{{ asset('assets/img/bed.svg') }}"--}}
{{--                                             width="13" alt="" /></div>5 Beds--}}
{{--                                </div>--}}
{{--                                <div class="listing-card-info-icon">--}}
{{--                                    <div class="inc-fleat-icon">--}}
{{--                                        <img src="{{ asset('assets/img/bathtub.svg') }}"--}}
{{--                                             width="13" alt="" /></div>2 Bath--}}
{{--                                </div>--}}
{{--                                <div class="listing-card-info-icon">--}}
{{--                                    <div class="inc-fleat-icon">--}}
{{--                                        <img src="{{ asset('assets/img/move.svg') }}"--}}
{{--                                             width="13" alt="" /></div>900 sqft--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="listing-detail-footer">--}}
{{--                            <div class="footer-first">--}}
{{--                                <h6 class="listing-card-info-price mb-0 p-0">$9,500</h6>--}}
{{--                            </div>--}}
{{--                            <div class="footer-flex">--}}
{{--                                <a href="" class="prt-view">View Detail</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- End Single Property -->--}}

            </div>

            <!-- Pagination -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    @if ($properties->lastPage() > 1)
                        {{ $properties->onEachSide(0)->appends(request()->except('page'))->links() }}
                    @endif
                </div>
            </div>

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
