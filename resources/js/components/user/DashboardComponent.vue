<template>
    <!--Dashboard breadcrumb starts-->
    <div class="dash-breadcrumb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="dash-breadcrumb-content">
                        <div class="dash-breadcrumb-left">
                            <div class="breadcrumb-menu text-right sm-left">
                                <ul>
                                    <li class="active"><a href="#">Home</a></li>
                                    <li>Dashboard</li>
                                </ul>
                            </div>
                        </div>
                        <router-link
                            class="btn v3"
                            exact
                            to="/realtor/account/properties/add">
                            <i class="ion-plus-round"></i>Add Listing
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Dashboard breadcrumb ends-->

    <!-- Dashboard Statistics starts-->
    <div class="statistic-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="statistic__item item--green">
                        <h2 class="counter-value">18</h2>
                        <span class="desc">Published Properties</span>
                        <div class="icon">
                            <img src="/admin-assets/images/dashboard/map-of-roads.png" alt="...">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="statistic__item item--orange">
                        <h2 class="counter-value">115</h2>
                        <span class="desc">Submitted Properties</span>
                        <div class="icon">
                            <img src="/admin-assets/images/dashboard/review.png" alt="...">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="statistic__item item--blue">
                        <h2 class="counter-value">800</h2>
                        <span class="desc">Total Views</span>
                        <div class="icon">
                            <img src="/admin-assets/images/dashboard/bar-chart.png" alt="...">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="statistic__item item--red">
                        <h2 class="counter-value">15</h2>
                        <span class="desc">Messages sent</span>
                        <div class="icon">
                            <img src="/admin-assets/images/dashboard/like.png" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard Statistics ends-->

    <!--Dashboard content starts-->
    <div class="dash-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <div class="popular-listing">
                        <div class="act-title">
                            <h5><i class="icofont-eye-alt"></i>Recently Added</h5>
                        </div>
                        <div class="viewd-item-wrap">
                            <div class="most-viewed-item">
                                <div class="most-viewed-img">
                                    <a href="#">
                                        <img src="admin-assets/images/single-listing/gallery-6.jpg" alt="..."></a>
                                </div>
                                <div class="most-viewed-detail">
                                    <a class="category" href="#"><span class="list-bg aqua"><i class="icofont-hotel"></i></span>Hotel</a>
                                    <h3><a href="#">Four Seasons Resort</a></h3>
                                    <div class="ratings">
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star-half"></i>
                                    </div>
                                    <div class="views">Views : <span>325</span></div>
                                    <p class="date">Posted on Mar 25, 2019</p>
                                </div>
                            </div>
                            <div class="most-viewed-item">
                                <div class="most-viewed-img">
                                    <a href="#">
                                        <img src="/admin-assets/images/single-listing/restaurant-6.jpg" alt="..."></a>
                                </div>
                                <div class="most-viewed-detail">
                                    <a class="category" href="#">
                                        <span class="list-bg red"><i class="icofont-restaurant"></i></span>
                                        Restaurent</a>
                                    <h3><a href="#">La Quo Vadis</a></h3>
                                    <div class="ratings">
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star-half"></i>
                                    </div>
                                    <div class="views">Views : <span>287</span></div>
                                    <p class="date">Posted on Feb 27, 2019</p>
                                </div>
                            </div>
                            <div class="most-viewed-item">
                                <div class="most-viewed-img">
                                    <a href="#">
                                        <img src="admin-assets/images/single-listing/single-list-2.jpg"
                                             alt="..."></a>
                                </div>
                                <div class="most-viewed-detail">
                                    <a class="category" href="#">
                                        <span class="list-bg aqua"><i class="icofont-music-alt"></i></span>Music</a>
                                    <h3><a href="#">Bolton Music fair</a></h3>
                                    <div class="ratings">
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star-half"></i>
                                    </div>
                                    <div class="views">Views : <span>194</span></div>
                                    <p class="date">Posted on Dec 17, 2018</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-12">
                    <div class="popular-listing">
                        <div class="act-title">
                            <h5><i class="icofont-eye-alt"></i>Recently Added</h5>
                        </div>
                        <div class="viewd-item-wrap">
                            <div class="most-viewed-item">
                                <div class="most-viewed-img">
                                    <a href="#">
                                        <img src="admin-assets/images/single-listing/gallery-6.jpg" alt="..."></a>
                                </div>
                                <div class="most-viewed-detail">
                                    <a class="category" href="#"><span class="list-bg aqua"><i class="icofont-hotel"></i></span>Hotel</a>
                                    <h3><a href="#">Four Seasons Resort</a></h3>
                                    <div class="ratings">
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star-half"></i>
                                    </div>
                                    <div class="views">Views : <span>325</span></div>
                                    <p class="date">Posted on Mar 25, 2019</p>
                                </div>
                            </div>
                            <div class="most-viewed-item">
                                <div class="most-viewed-img">
                                    <a href="#">
                                        <img src="/admin-assets/images/single-listing/restaurant-6.jpg" alt="..."></a>
                                </div>
                                <div class="most-viewed-detail">
                                    <a class="category" href="#">
                                        <span class="list-bg red"><i class="icofont-restaurant"></i></span>
                                        Restaurent</a>
                                    <h3><a href="#">La Quo Vadis</a></h3>
                                    <div class="ratings">
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star-half"></i>
                                    </div>
                                    <div class="views">Views : <span>287</span></div>
                                    <p class="date">Posted on Feb 27, 2019</p>
                                </div>
                            </div>
                            <div class="most-viewed-item">
                                <div class="most-viewed-img">
                                    <a href="#">
                                        <img src="admin-assets/images/single-listing/single-list-2.jpg"
                                             alt="..."></a>
                                </div>
                                <div class="most-viewed-detail">
                                    <a class="category" href="#">
                                        <span class="list-bg aqua"><i class="icofont-music-alt"></i></span>Music</a>
                                    <h3><a href="#">Bolton Music fair</a></h3>
                                    <div class="ratings">
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star-half"></i>
                                    </div>
                                    <div class="views">Views : <span>194</span></div>
                                    <p class="date">Posted on Dec 17, 2018</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Dashboard content ends-->
</template>

<script>
    export default {
        name: "RealtorDashboardComponent"
    }
</script>

<style scoped>

</style>
