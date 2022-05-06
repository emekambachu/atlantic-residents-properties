<template>
    <!-- ============================ Hero Banner  Start================================== -->
    <!-- Gallery Part Start -->
    <section class="gallery_parts pt-2 pb-2 d-none d-sm-none d-md-none d-lg-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7 col-sm-12 pr-1">
                    <div class="gg_single_part left">
                        <a :href="'/photos/properties/'+property.image1" class="mfp-gallery">
                            <img :src="'/photos/properties/'+property.image1"
                                 class="img-fluid mx-auto" alt="" /></a></div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 pl-1">
                    <div v-if="property.image2" class="gg_single_part-right min">
                        <a :href="'/photos/properties/'+property.image2" class="mfp-gallery">
                            <img :src="'/photos/properties/'+property.image2"
                                 class="img-fluid mx-auto" alt="" /></a></div>
                    <div v-if="property.image3" class="gg_single_part-right min mt-2 mb-2">
                        <a :href="'/photos/properties/'+property.image3" class="mfp-gallery">
                            <img :src="'/photos/properties/'+property.image3"
                                 class="img-fluid mx-auto" alt="" /></a></div>
                    <div v-if="property.image4" class="gg_single_part-right min">
                        <a :href="'/photos/properties/'+property.image4" class="mfp-gallery">
                            <img :src="'/photos/properties/'+property.image4"
                                 class="img-fluid mx-auto" alt="" /></a></div>
                    <div v-if="property.image5" class="gg_single_part-right min">
                        <a :href="'/photos/properties/'+property.image5" class="mfp-gallery">
                            <img :src="'/photos/properties/'+property.image5"
                                 class="img-fluid mx-auto" alt="" /></a></div>
                </div>
            </div>
        </div>
    </section>

    <div class="featured_slick_gallery gray d-block d-md-block d-lg-block d-xl-none">
        <div class="featured_slick_gallery-slide">
            <div class="featured_slick_padd">
                <a :href="'/photos/properties/'+property.image1" class="mfp-gallery">
                    <img :src="'/photos/properties/'+property.image1" class="img-fluid mx-auto" alt="" /></a></div>
            <div v-if="property.image2" class="featured_slick_padd">
                <a :href="'/photos/properties/'+property.image2" class="mfp-gallery">
                    <img :src="'/photos/properties/'+property.image2" class="img-fluid mx-auto" alt="" /></a></div>
            <div v-if="property.image3" class="featured_slick_padd">
                <a :href="'/photos/properties/'+property.image3" class="mfp-gallery">
                    <img :src="'/photos/properties/'+property.image3" class="img-fluid mx-auto" alt="" /></a></div>
            <div v-if="property.image4" class="featured_slick_padd">
                <a :href="'/photos/properties/'+property.image4" class="mfp-gallery">
                    <img :src="'/photos/properties/'+property.image4" class="img-fluid mx-auto" alt="" /></a></div>
        </div>
    </div>
    <!-- ============================ Hero Banner End ================================== -->

    <!-- ============================ Property Detail Start ================================== -->
    <section class="pt-4">
        <div class="container">
            <div class="row">

                <!-- property main detail -->
                <div class="col-lg-8 col-md-12 col-sm-12">

                    <div class="property_info_detail_wrap mb-4">

                        <div class="property_info_detail_wrap_first">
                            <div class="pr-price-into">
                                <ul class="prs_lists">
                                    <li><span class="bed">{{ property.bedrooms }} Beds</span></li>
                                    <li><span class="bath">{{ property.bathrooms }} Bath</span></li>
                                    <li><span class="gar">{{ property.living_rooms }} Living room</span></li>
                                </ul>
                                <h2>{{ property.address }}</h2>
                                <span><i class="lni-map-marker"></i> {{ property.country.name }}</span>
                            </div>
                        </div>

                        <div class="property_detail_section">
                            <div class="prt-sect-pric">
                                <ul class="_share_lists">
                                    <li><a href="#"><i class="fa fa-bookmark"></i></a></li>
                                    <li><a href="#"><i class="fa fa-share"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <!-- Single Block Wrap -->
                    <div class="property_block_wrap">

                        <div class="property_block_wrap_header">
                            <h4 class="property_block_title">About Property</h4>
                        </div>

                        <div class="block-body">
                            <p>{{ property.description }}</p>
                        </div>

                    </div>

                    <!-- Single Block Wrap -->
<!--                    <div class="property_block_wrap">-->

<!--                        <div class="property_block_wrap_header">-->
<!--                            <h4 class="property_block_title">Advance Features</h4>-->
<!--                        </div>-->

<!--                        <div class="block-body">-->
<!--                            <ul class="row p-0 m-0">-->
<!--                                <li class="col-lg-4 col-md-6 mb-2 p-0"><i class="fa fa-bed mr-1"></i>4 Bedrooms</li>-->
<!--                                <li class="col-lg-4 col-md-6 mb-2 p-0"><i class="fa fa-bath mr-1"></i>2 Bathrooms</li>-->
<!--                                <li class="col-lg-4 col-md-6 mb-2 p-0"><i class="fa fa-expand-arrows-alt mr-1"></i>12400 sqft</li>-->
<!--                                <li class="col-lg-4 col-md-6 mb-2 p-0"><i class="fa fa-house-damage mr-1"></i>1 Living Rooms</li>-->
<!--                                <li class="col-lg-4 col-md-6 mb-2 p-0"><i class="fa fa-building mr-1"></i>Build 2007</li>-->
<!--                                <li class="col-lg-4 col-md-6 mb-2 p-0"><i class="fa fa-utensils mr-1"></i>2 Kitchens </li>-->
<!--                                <li class="col-lg-4 col-md-6 mb-2 p-0"><i class="fa fa-car mr-1"></i>Car Parking</li>-->
<!--                                <li class="col-lg-4 col-md-6 mb-2 p-0"><i class="fa fa-briefcase-medical mr-1"></i>Free Medical</li>-->
<!--                                <li class="col-lg-4 col-md-6 mb-2 p-0"><i class="fa fa-fire mr-1"></i>Fireplace</li>-->
<!--                                <li class="col-lg-4 col-md-6 mb-2 p-0"><i class="fa fa-layer-group mr-1"></i>Residential</li>-->
<!--                                <li class="col-lg-4 col-md-6 mb-2 p-0"><i class="fa fa-tv mr-1"></i>TV Cable</li>-->
<!--                                <li class="col-lg-4 col-md-6 mb-2 p-0"><i class="fa fa-spa mr-1"></i>Free Spa</li>-->
<!--                            </ul>-->
<!--                        </div>-->

<!--                    </div>-->

                    <!-- Single Block Wrap -->
                    <div v-if="property.features !== null" class="property_block_wrap">

                        <div class="property_block_wrap_header">
                            <h4 class="property_block_title">Amenities</h4>
                        </div>

                        <div class="block-body">
                            <ul class="avl-features third">
                                <li v-for="(feature, index) in property.features.split(',')" :key="index"
                                    class="active">{{ feature }}</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Write a Review -->
                    <div class="property_block_wrap">

                        <div class="property_block_wrap_header">
                            <h4 class="property_block_title">Write a Review</h4>
                        </div>

                        <div class="block-body">
                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Messages</label>
                                        <textarea class="form-control ht-80"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <button class="btn theme-bg rounded" type="submit">Submit Review</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                <!-- property Sidebar -->
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="property-sidebar">

                        <!-- Agent Detail -->
                        <div class="sider_blocks_wrap">
                            <div class="side-booking-body">
                                <div class="agent-_blocks_title">
                                    <div class="agent-_blocks_thumb">
                                        <img src="/assets/img/user-6.jpg" alt="">
                                    </div>
                                    <div class="agent-_blocks_caption">
                                        <h4><a href="#">{{ property.user.name }}</a></h4>
                                        <span class="approved-agent"><i class="ti-check"></i>approved</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <span id="number" data-last="+1234567896">
											<span><i class="ti-headphone-alt"></i><a class="see">
                                                +355(44)35...Show</a></span>
										</span>
                            </div>
                        </div>

                        <div class="sider_blocks_wrap">
                            <div class="side-booking-header">
                                <div class="sb-header-left">
                                    <h3 class="price">${{ addComma(property.cost) }}</h3></div>
                            </div>
                            <div class="side-booking-body">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <div class="cld-box">
                                                <i class="ti-user"></i>
                                                <input type="text" class="form-control"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <div class="cld-box">
                                                <i class="ti-email"></i>
                                                <input type="email" class="form-control"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Mobile</label>
                                            <div class="cld-box">
                                                <i class="ti-mobile"></i>
                                                <input type="tel" class="form-control"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Message</label>
                                            <div class="cld-box">
                                                <i class="ti-text"></i>
                                                <input type="text" class="form-control"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="stbooking-footer mt-1">
                                            <div class="form-group mb-0 pb-0">
                                                <a href="#" class="btn book_btn theme-bg">Email Agent</a>
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
    </section>
    <!-- ============================ Property Detail End ================================== -->

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
</template>

<script>
    export default {
        props: {
            property: Object
        },
        data(){
            return{

            }
        },
        methods: {
            addComma(number){
                return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            },
        }
    }
</script>

<style scoped>

</style>
