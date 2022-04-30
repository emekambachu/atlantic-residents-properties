<template>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="property-listing property-2">
            <div class="listing-img-wrapper">
                <div class="_exlio_125">{{ property.country.name }}</div>
                <div class="list-img-slide">
                    <div class="click">
                        <div><a href="">
                            <img :src="'/photos/properties/' + property.image1"
                                 class="img-fluid mx-auto" alt=""></a></div>
                        <div v-if="property.image2"><a href="">
                            <img :src="'/photos/properties/' + property.image2"
                                 class="img-fluid mx-auto" alt=""></a></div>
                        <div v-if="property.image3"><a href="">
                            <img :src="'/photos/properties/' + property.image3"
                                 class="img-fluid mx-auto" alt=""></a></div>
                    </div>
                </div>
            </div>

            <div class="listing-detail-wrapper">
                <div class="listing-short-detail-wrap">
                    <div class="_card_list_flex mb-2">
                        <div class="_card_flex_01">
                            <span class="_list_blickes _netork">{{ property.country.name }}</span>
<!--                            <span class="_list_blickes types">Family</span>-->
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
                                    {{ property.title }}</a></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="price-features-wrapper">
                <div class="list-fx-features">
                    <div class="listing-card-info-icon">
                        <div class="inc-fleat-icon">
                            <img src="/assets/img/bed.svg" alt="" width="13"></div>
                        {{ property.bedrooms }} Beds
                    </div>
                    <div class="listing-card-info-icon">
                        <div class="inc-fleat-icon">
                            <img src="/assets/img/bathtub.svg" alt="" width="13"></div>
                        {{ property.bathrooms }} Bath
                    </div>
                    <div class="listing-card-info-icon">
                        <div class="inc-fleat-icon">
                            <img src="/assets/img/move.svg" alt="" width="13"></div>
                        {{ property.living_rooms }} Living rooms
                    </div>
                </div>
            </div>

            <div class="listing-detail-footer">
                <div class="footer-first">
                    <h6 class="listing-card-info-price mb-0 p-0">${{ addCommaDec(property.cost) }}</h6>
                </div>
                <div class="footer-flex">
                    <a :href="'/property/' + property.id + '/detail'" class="prt-view">View Detail</a>
                </div>
            </div>

        </div>
    </div>

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

            addCommaDec(number){
                // convert the number to string and split it before the full-stop
                // convert the splitted numbers to array
                // the first set of numbers before the fullstop is the first array,
                // convert it to comma seperated after 3 numbers
                // Then join it back
                let parts = number.toString().split(".");
                parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                return parts.join(".");
            }
        }
    }
</script>

<style scoped>

</style>
