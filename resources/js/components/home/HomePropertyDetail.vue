<template>

    <!--Slick slider, the jquery script should be in the blade file section-->
    <div class="your-class mr-1">
        <div class="mr-5" v-for="(photo, index) in property.property_photos" :key="index">
            <img :src="'/photos/properties/'+photo.image"
                 class="center-cropped" alt=""/>
        </div>
    </div>

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
                                    <li><span class="gar">{{ property.square_feet }} Square Feet</span></li>
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
                            <p v-html="property.description"></p>
                        </div>
                    </div>


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
                                        <img v-if="property.user.image !== null"
                                             :src="'/photos/users/'+property.user.image" alt="">
                                        <img v-else src="/images/user.png" alt="">
                                    </div>
                                    <div class="agent-_blocks_caption">
                                        <h4><a href="#">{{ property.user.name }}</a></h4>
                                        <span class="approved-agent"><i class="ti-check"></i>approved</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <span id="number" data-last="+1234567896">
											<span><i class="ti-headphone-alt"></i><a class="see">
                                                {{ property.user.mobile }}</a></span>
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
