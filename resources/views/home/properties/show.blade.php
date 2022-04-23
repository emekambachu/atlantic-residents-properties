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

    <div class="hero-banner vedio-banner">
        <div class="overlay"></div>

        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="{{ asset('assets/img/banners.mp4') }}" type="video/mp4">
        </video>

        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <h1 class="big-header-capt mb-0 text-light">Search Your Next Home</h1>
                    <p class="text-center mb-4 text-light">Find new & featured property located in your local city.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="simple_tab_search center">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="buy-tab" data-toggle="tab"
                                   href="#buy" role="tab" aria-controls="buy" aria-selected="true">Buy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sell-tab" data-toggle="tab" href="#sell"
                                   role="tab" aria-controls="sell" aria-selected="false">Sell</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="rent-tab" data-toggle="tab" href="#rent"
                                   role="tab" aria-controls="rent" aria-selected="false">Rent</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <!-- Tab for Buy -->
                            <div class="tab-pane fade show active" id="buy" role="tabpanel" aria-labelledby="buy-tab">
                                <div class="full_search_box nexio_search lightanic_search hero_search-radius modern">
                                    <div class="search_hero_wrapping">

                                        <div class="row">

                                            <div class="col-lg-3 col-sm-12 d-md-none d-lg-block">
                                                <div class="form-group">
                                                    <label>Price Range</label>
                                                    <input type="text" class="form-control search_input b-0"
                                                           placeholder="ex. Neighborhood" />
                                                </div>
                                            </div>

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

                                            <div class="col-lg-2 col-md-3 col-sm-12">
                                                <div class="form-group none">
                                                    <a class="collapsed ad-search" data-toggle="collapse"
                                                       data-parent="#search" data-target="#advance-search"
                                                       href="javascript:void(0);" aria-expanded="false"
                                                       aria-controls="advance-search">
                                                        <i class="fa fa-sliders-h mr-2"></i>Advance Filter</a>
                                                </div>
                                            </div>

                                            <div class="col-lg-2 col-md-3 col-sm-12 small-padd">
                                                <div class="form-group none">
                                                    <a href="#" class="btn search-btn">Search Property</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Collapse Advance Search Form -->
                                        <div class="collapse" id="advance-search"
                                             aria-expanded="false" role="banner">
                                            <!-- row -->
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                    <div class="form-group none style-auto">
                                                        <select id="bedrooms" class="form-control">
                                                            <option value="">&nbsp;</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                    <div class="form-group none style-auto">
                                                        <select id="bathrooms" class="form-control">
                                                            <option value="">&nbsp;</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                    <div class="form-group none">
                                                        <input type="text" class="form-control"
                                                               placeholder="min sqft" />
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                    <div class="form-group none">
                                                        <input type="text" class="form-control"
                                                               placeholder="max sqft" />
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- /row -->

                                            <!-- row -->
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
                                                    <h6>Advance Price</h6>
                                                    <div class="rg-slider">
                                                        <input type="text" class="js-range-slider"
                                                               name="my_range" value="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /row -->

                                            <!-- row -->
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                                                    <h4 class="text-dark">Amenities & Features</h4>
                                                    <ul class="no-ul-list third-row">
                                                        <li>
                                                            <input id="a-1" class="checkbox-custom"
                                                                   name="a-1" type="checkbox">
                                                            <label for="a-1" class="checkbox-custom-label">
                                                                Air Condition</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-2" class="checkbox-custom"
                                                                   name="a-2" type="checkbox">
                                                            <label for="a-2" class="checkbox-custom-label">Bedding</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-3" class="checkbox-custom"
                                                                   name="a-3" type="checkbox">
                                                            <label for="a-3"
                                                                   class="checkbox-custom-label">Heating</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-4" class="checkbox-custom" name="a-4"
                                                                   type="checkbox">
                                                            <label for="a-4"
                                                                   class="checkbox-custom-label">Internet</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-5" class="checkbox-custom" name="a-5"
                                                                   type="checkbox">
                                                            <label for="a-5"
                                                                   class="checkbox-custom-label">Microwave</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-6" class="checkbox-custom" name="a-6"
                                                                   type="checkbox">
                                                            <label for="a-6" class="checkbox-custom-label">
                                                                Smoking Allow</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-7" class="checkbox-custom" name="a-7"
                                                                   type="checkbox">
                                                            <label for="a-7"
                                                                   class="checkbox-custom-label">Terrace</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-8" class="checkbox-custom" name="a-8"
                                                                   type="checkbox">
                                                            <label for="a-8"
                                                                   class="checkbox-custom-label">Balcony</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-9" class="checkbox-custom" name="a-9"
                                                                   type="checkbox">
                                                            <label for="a-9"
                                                                   class="checkbox-custom-label">Icon</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-10" class="checkbox-custom" name="a-10"
                                                                   type="checkbox">
                                                            <label for="a-10"
                                                                   class="checkbox-custom-label">Wi-Fi</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-11" class="checkbox-custom" name="a-11"
                                                                   type="checkbox">
                                                            <label for="a-11"
                                                                   class="checkbox-custom-label">Beach</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-12" class="checkbox-custom" name="a-12"
                                                                   type="checkbox">
                                                            <label for="a-12"
                                                                   class="checkbox-custom-label">Parking</label>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <!-- /row -->

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Tab for Sell -->
                            <div class="tab-pane fade" id="sell" role="tabpanel" aria-labelledby="sell-tab">
                                <div class="full_search_box nexio_search lightanic_search hero_search-radius modern">
                                    <div class="search_hero_wrapping">

                                        <div class="row">
                                            <div class="col-lg-3 col-sm-12 d-md-none d-lg-block">
                                                <div class="form-group">
                                                    <label>Price Range</label>
                                                    <input type="text" class="form-control search_input b-0"
                                                           placeholder="ex. Neighborhood" />
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label>City/Street</label>
                                                    <div class="input-with-icon">
                                                        <select id="lot-1" class="form-control">
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
                                                        <select id="ptype-1" class="form-control">
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

                                            <div class="col-lg-2 col-md-3 col-sm-12">
                                                <div class="form-group none">
                                                    <a class="collapsed ad-search" data-toggle="collapse"
                                                       data-parent="#search1" data-target="#advance-search-1"
                                                       href="javascript:void(0);" aria-expanded="false"
                                                       aria-controls="advance-search">
                                                        <i class="fa fa-sliders-h mr-2"></i>Advance Filter</a>
                                                </div>
                                            </div>

                                            <div class="col-lg-2 col-md-3 col-sm-12 small-padd">
                                                <div class="form-group none">
                                                    <a href="#" class="btn search-btn">Search Property</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Collapse Advance Search Form -->
                                        <div class="collapse" id="advance-search-1" aria-expanded="false"
                                             role="banner">

                                            <!-- row -->
                                            <div class="row">

                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                    <div class="form-group none style-auto">
                                                        <select id="bedrooms1" class="form-control">
                                                            <option value="">&nbsp;</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                    <div class="form-group none style-auto">
                                                        <select id="bathrooms1" class="form-control">
                                                            <option value="">&nbsp;</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                    <div class="form-group none">
                                                        <input type="text" class="form-control" placeholder="min sqft" />
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                    <div class="form-group none">
                                                        <input type="text" class="form-control" placeholder="max sqft" />
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- /row -->

                                            <!-- row -->
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
                                                    <h6>Advance Price</h6>
                                                    <div class="rg-slider">
                                                        <input type="text" class="js-range-slider" name="my_range" value="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /row -->

                                            <!-- row -->
                                            <div class="row">

                                                <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                                                    <h4 class="text-dark">Amenities & Features</h4>
                                                    <ul class="no-ul-list third-row">
                                                        <li>
                                                            <input id="a-1a" class="checkbox-custom"
                                                                   name="a-1a" type="checkbox">
                                                            <label for="a-1a"
                                                                   class="checkbox-custom-label">
                                                                Air Condition</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-2b" class="checkbox-custom"
                                                                   name="a-2b" type="checkbox">
                                                            <label for="a-2b" class="checkbox-custom-label">Bedding</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-3c" class="checkbox-custom" name="a-3c" type="checkbox">
                                                            <label for="a-3c" class="checkbox-custom-label">Heating</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-4d" class="checkbox-custom" name="a-4d" type="checkbox">
                                                            <label for="a-4d" class="checkbox-custom-label">Internet</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-5e" class="checkbox-custom" name="a-5e" type="checkbox">
                                                            <label for="a-5e" class="checkbox-custom-label">Microwave</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-6f" class="checkbox-custom" name="a-6f" type="checkbox">
                                                            <label for="a-6f" class="checkbox-custom-label">Smoking Allow</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-7g" class="checkbox-custom" name="a-7g" type="checkbox">
                                                            <label for="a-7g" class="checkbox-custom-label">Terrace</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-8h" class="checkbox-custom" name="a-8h" type="checkbox">
                                                            <label for="a-8h" class="checkbox-custom-label">Balcony</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-9i" class="checkbox-custom" name="a-9i" type="checkbox">
                                                            <label for="a-9i" class="checkbox-custom-label">Icon</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-10j" class="checkbox-custom" name="a-10j" type="checkbox">
                                                            <label for="a-10j" class="checkbox-custom-label">Wi-Fi</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-11k" class="checkbox-custom" name="a-11k" type="checkbox">
                                                            <label for="a-11k" class="checkbox-custom-label">Beach</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-12l" class="checkbox-custom" name="a-12l" type="checkbox">
                                                            <label for="a-12l" class="checkbox-custom-label">Parking</label>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <!-- /row -->

                                        </div>

                                    </div>
                                </div>

                            </div>

                            <!-- Tab for Rent -->
                            <div class="tab-pane fade" id="rent" role="tabpanel" aria-labelledby="rent-tab">
                                <div class="full_search_box nexio_search lightanic_search hero_search-radius modern">
                                    <div class="search_hero_wrapping">

                                        <div class="row">

                                            <div class="col-lg-3 col-sm-12 d-md-none d-lg-block">
                                                <div class="form-group">
                                                    <label>Price Range</label>
                                                    <input type="text" class="form-control search_input b-0" placeholder="ex. Neighborhood" />
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label>City/Street</label>
                                                    <div class="input-with-icon">
                                                        <select id="lot-2" class="form-control">
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
                                                        <select id="ptype-2" class="form-control">
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

                                            <div class="col-lg-2 col-md-3 col-sm-12">
                                                <div class="form-group none">
                                                    <a class="collapsed ad-search" data-toggle="collapse" data-parent="#search" data-target="#advance-search-2" href="javascript:void(0);" aria-expanded="false" aria-controls="advance-search"><i class="fa fa-sliders-h mr-2"></i>Advance Filter</a>
                                                </div>
                                            </div>

                                            <div class="col-lg-2 col-md-3 col-sm-12 small-padd">
                                                <div class="form-group none">
                                                    <a href="#" class="btn search-btn">Search Property</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Collapse Advance Search Form -->
                                        <div class="collapse" id="advance-search-2" aria-expanded="false" role="banner">

                                            <!-- row -->
                                            <div class="row">

                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                    <div class="form-group none style-auto">
                                                        <select id="bedrooms2" class="form-control">
                                                            <option value="">&nbsp;</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                    <div class="form-group none style-auto">
                                                        <select id="bathrooms2" class="form-control">
                                                            <option value="">&nbsp;</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                    <div class="form-group none">
                                                        <input type="text" class="form-control" placeholder="min sqft" />
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                    <div class="form-group none">
                                                        <input type="text" class="form-control" placeholder="max sqft" />
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- /row -->

                                            <!-- row -->
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
                                                    <h6>Advance Price</h6>
                                                    <div class="rg-slider">
                                                        <input type="text" class="js-range-slider" name="my_range" value="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /row -->

                                            <!-- row -->
                                            <div class="row">

                                                <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                                                    <h4 class="text-dark">Amenities & Features</h4>
                                                    <ul class="no-ul-list third-row">
                                                        <li>
                                                            <input id="a-a1" class="checkbox-custom" name="a-a1" type="checkbox">
                                                            <label for="a-a1" class="checkbox-custom-label">Air Condition</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-b2" class="checkbox-custom" name="a-b2" type="checkbox">
                                                            <label for="a-b2" class="checkbox-custom-label">Bedding</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-c3" class="checkbox-custom" name="a-c3" type="checkbox">
                                                            <label for="a-c3" class="checkbox-custom-label">Heating</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-d4" class="checkbox-custom" name="a-d4" type="checkbox">
                                                            <label for="a-d4" class="checkbox-custom-label">Internet</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-e5" class="checkbox-custom" name="a-e5" type="checkbox">
                                                            <label for="a-e5" class="checkbox-custom-label">Microwave</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-f6" class="checkbox-custom" name="a-f6" type="checkbox">
                                                            <label for="a-f6" class="checkbox-custom-label">Smoking Allow</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-g7" class="checkbox-custom" name="a-g7" type="checkbox">
                                                            <label for="a-g7" class="checkbox-custom-label">Terrace</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-h8" class="checkbox-custom" name="a-h8" type="checkbox">
                                                            <label for="a-h8" class="checkbox-custom-label">Balcony</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-i9" class="checkbox-custom" name="a-i9" type="checkbox">
                                                            <label for="a-i9" class="checkbox-custom-label">Icon</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-j10" class="checkbox-custom" name="a-j10" type="checkbox">
                                                            <label for="a-j10" class="checkbox-custom-label">Wi-Fi</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-k11" class="checkbox-custom" name="a-k11" type="checkbox">
                                                            <label for="a-k11" class="checkbox-custom-label">Beach</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-l12" class="checkbox-custom" name="a-l12" type="checkbox">
                                                            <label for="a-l12" class="checkbox-custom-label">Parking</label>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <!-- /row -->

                                        </div>

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
                        <h2>Recent Listed Property</h2>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <!-- Single Property -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="property-listing property-2">

                        <div class="listing-img-wrapper">
                            <div class="_exlio_125">For Sale</div>
                            <div class="list-img-slide">
                                <div class="click">
                                    <div><a href="">
                                            <img src="{{ asset('assets/img/p-7.png') }}"
                                                 class="img-fluid mx-auto" alt="" /></a></div>
                                    <div><a href="">
                                            <img src="{{ asset('assets/img/p-8.png') }}"
                                                 class="img-fluid mx-auto" alt="" /></a></div>
                                    <div><a href="">
                                            <img src="{{ asset('assets/img/p-9.png') }}"
                                                 class="img-fluid mx-auto" alt="" /></a></div>
                                </div>
                            </div>
                        </div>

                        <div class="listing-detail-wrapper">
                            <div class="listing-short-detail-wrap">
                                <div class="_card_list_flex mb-2">
                                    <div class="_card_flex_01">
                                        <span class="_list_blickes _netork">5 Network</span>
                                        <span class="_list_blickes types">Offices</span>
                                    </div>
                                    <div class="_card_flex_last">
                                        <div class="prt_saveed_12lk">
                                            <label class="toggler toggler-danger">
                                                <input type="checkbox"><i class="ti-heart"></i></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="_card_list_flex">
                                    <div class="_card_flex_01">
                                        <h4 class="listing-name verified">
                                            <a href="" class="prt-link-detail">
                                                9632 New Green Garden, Huwai Denever USA, AWE789O</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="price-features-wrapper">
                            <div class="list-fx-features">
                                <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon">
                                        <img src="{{ asset('assets/img/bed.svg') }}"
                                             width="13" alt="" /></div>5 Beds
                                </div>
                                <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon">
                                        <img src="{{ asset('assets/img/bathtub.svg') }}"
                                             width="13" alt="" /></div>2 Bath
                                </div>
                                <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon">
                                        <img src="{{ asset('assets/img/move.svg') }}"
                                             width="13" alt="" /></div>900 sqft
                                </div>
                            </div>
                        </div>

                        <div class="listing-detail-footer">
                            <div class="footer-first">
                                <h6 class="listing-card-info-price mb-0 p-0">$9,500</h6>
                            </div>
                            <div class="footer-flex">
                                <a href="" class="prt-view">View Detail</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Single Property -->

                <!-- Single Property -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="property-listing property-2">

                        <div class="listing-img-wrapper">
                            <div class="_exlio_125">For Rent</div>
                            <div class="list-img-slide">
                                <div class="click">
                                    <div><a href="">
                                            <img src="{{ asset('assets/img/p-10.png') }}"
                                                 class="img-fluid mx-auto" alt="" /></a></div>
                                    <div><a href="">
                                            <img src="{{ asset('assets/img/p-11.png') }}"
                                                 class="img-fluid mx-auto" alt="" /></a></div>
                                    <div><a href="">
                                            <img src="{{ asset('assets/img/p-12.png') }}"
                                                 class="img-fluid mx-auto" alt="" /></a></div>
                                </div>
                            </div>
                        </div>

                        <div class="listing-detail-wrapper">
                            <div class="listing-short-detail-wrap">
                                <div class="_card_list_flex mb-2">
                                    <div class="_card_flex_01">
                                        <span class="_list_blickes _netork">7 Network</span>
                                        <span class="_list_blickes types">Apartment</span>
                                    </div>
                                    <div class="_card_flex_last">
                                        <div class="prt_saveed_12lk">
                                            <label class="toggler toggler-danger">
                                                <input type="checkbox"><i class="ti-heart"></i></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="_card_list_flex">
                                    <div class="_card_flex_01">
                                        <h4 class="listing-name verified">
                                            <a href="" class="prt-link-detail">
                                                8512 Red Reveals Market, Montreal Canada, SHQT45O</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="price-features-wrapper">
                            <div class="list-fx-features">
                                <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon">
                                        <img src="{{ asset('assets/img/bed.svg') }}" width="13" alt="" /></div>4 Beds
                                </div>
                                <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon">
                                        <img src="{{ asset('assets/img/bathtub.svg') }}" width="13" alt="" /></div>2 Bath
                                </div>
                                <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon">
                                        <img src="{{ asset('assets/img/move.svg') }}" width="13" alt="" /></div>920 sqft
                                </div>
                            </div>
                        </div>

                        <div class="listing-detail-footer">
                            <div class="footer-first">
                                <h6 class="listing-card-info-price mb-0 p-0">$10,400</h6>
                            </div>
                            <div class="footer-flex">
                                <a href="" class="prt-view">View Detail</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Single Property -->

                <!-- Single Property -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="property-listing property-2">

                        <div class="listing-img-wrapper">
                            <div class="_exlio_125">For Sale</div>
                            <div class="list-img-slide">
                                <div class="click">
                                    <div><a href="">
                                            <img src="{{ asset('assets/img/p-13.png') }}"
                                                 class="img-fluid mx-auto" alt="" /></a></div>
                                    <div><a href="">
                                            <img src="{{ asset('assets/img/p-14.png') }}"
                                                 class="img-fluid mx-auto" alt="" /></a></div>
                                    <div><a href="">
                                            <img src="{{ asset('assets/img/p-15.png') }}"
                                                 class="img-fluid mx-auto" alt="" /></a></div>
                                </div>
                            </div>
                        </div>

                        <div class="listing-detail-wrapper">
                            <div class="listing-short-detail-wrap">
                                <div class="_card_list_flex mb-2">
                                    <div class="_card_flex_01">
                                        <span class="_list_blickes _netork">7 Network</span>
                                        <span class="_list_blickes types">Villas</span>
                                    </div>
                                    <div class="_card_flex_last">
                                        <div class="prt_saveed_12lk">
                                            <label class="toggler toggler-danger">
                                                <input type="checkbox"><i class="ti-heart"></i></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="_card_list_flex">
                                    <div class="_card_flex_01">
                                        <h4 class="listing-name verified">
                                            <a href="" class="prt-link-detail">
                                                7298 Rani Market Near Saaket, Henever Canada, QWUI98</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="price-features-wrapper">
                            <div class="list-fx-features">
                                <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon">
                                        <img src="{{ asset('assets/img/bed.svg') }}"
                                             width="13" alt="" /></div>4 Beds
                                </div>
                                <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon">
                                        <img src="{{ asset('assets/img/bathtub.svg') }}"
                                             width="13" alt="" /></div>3 Bath
                                </div>
                                <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon">
                                        <img src="{{ asset('assets/img/move.svg') }}"
                                             width="13" alt="" /></div>850 sqft
                                </div>
                            </div>
                        </div>

                        <div class="listing-detail-footer">
                            <div class="footer-first">
                                <h6 class="listing-card-info-price mb-0 p-0">$9,200</h6>
                            </div>
                            <div class="footer-flex">
                                <a href="" class="prt-view">View Detail</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Single Property -->

                <!-- Single Property -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="property-listing property-2">

                        <div class="listing-img-wrapper">
                            <div class="_exlio_125">For Rent</div>
                            <div class="list-img-slide">
                                <div class="click">
                                    <div><a href="">
                                            <img src="{{ asset('assets/img/p-16.png') }}"
                                                 class="img-fluid mx-auto" alt="" /></a></div>
                                    <div><a href="">
                                            <img src="{{ asset('assets/img/p-17.png') }}"
                                                 class="img-fluid mx-auto" alt="" /></a></div>
                                    <div><a href="">
                                            <img src="{{ asset('assets/img/p-18.png') }}"
                                                 class="img-fluid mx-auto" alt="" /></a></div>
                                </div>
                            </div>
                        </div>

                        <div class="listing-detail-wrapper">
                            <div class="listing-short-detail-wrap">
                                <div class="_card_list_flex mb-2">
                                    <div class="_card_flex_01">
                                        <span class="_list_blickes _netork">10 Network</span>
                                        <span class="_list_blickes types">Family</span>
                                    </div>
                                    <div class="_card_flex_last">
                                        <div class="prt_saveed_12lk">
                                            <label class="toggler toggler-danger">
                                                <input type="checkbox"><i class="ti-heart"></i></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="_card_list_flex">
                                    <div class="_card_flex_01">
                                        <h4 class="listing-name verified">
                                            <a href="" class="prt-link-detail">
                                                7264 Green Glelcer Street, Barghimbar USA, ERIO098</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="price-features-wrapper">
                            <div class="list-fx-features">
                                <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon">
                                        <img src="{{ asset('assets/img/bed.svg') }}"
                                             width="13" alt="" /></div>4 Beds
                                </div>
                                <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon">
                                        <img src="{{ asset('assets/img/bathtub.svg') }}"
                                             width="13" alt="" /></div>2 Bath
                                </div>
                                <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon">
                                        <img src="{{ asset('assets/img/move.svg') }}"
                                             width="13" alt="" /></div>750 sqft
                                </div>
                            </div>
                        </div>

                        <div class="listing-detail-footer">
                            <div class="footer-first">
                                <h6 class="listing-card-info-price mb-0 p-0">$9,100</h6>
                            </div>
                            <div class="footer-flex">
                                <a href="" class="prt-view">View Detail</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Single Property -->

            </div>

            <!-- Pagination -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <a href="" class="btn btn-theme-light-2 rounded">Explore More Properties</a>
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
