<template>
    <div v-if="!deleted" class="most-viewed-item">
        <div class="most-viewed-img">
            <a href="#">
                <img :src="'/photos/properties/'+ image1" alt="...">
            </a>
        </div>
        <div class="most-viewed-detail">
            <a class="category" href="#">
                <span class="list-bg aqua"><i class="icofont-hotel"></i></span>
                {{ type.name }}
            </a>
            <h3><a href="">{{ title }}</a></h3>
            <p class="list-address">
                <i class="icofont-google-map"></i>
                {{ address }}</p>
            <!--<div class="views">Views : <span>325</span></div>-->
        </div>

        <div v-if="deleteLoading" class="text-center">
            <img src="/images/loaders/loader.gif" width="70"/>
        </div>

        <div v-else class="listing-button">
            <router-link
                class="btn v2"
                exact
                :to="{name: 'EditProperty', params: { id: id },}">
                <i class="ion-edit"></i> Edit </router-link>
            <a @click.prevent="deleteProperty(id)" class="btn v5">
                <i class="ion-android-delete"></i> Delete</a>
        </div>

    </div>
</template>

<script>
    export default {
        props: {
            id: Number,
            type: Object,
            country: Object,
            title: String,
            address: String,
            description: String,
            bedrooms: Number,
            living_rooms: Number,
            bathrooms: Number,
            cost: Number,
            image1: String,
            image2: String,
            image3: String,
            image4: String,
            image5: String,
            features: String,
            status: Boolean,
        },

        data(){
            return{
                deleteLoading: false,
                deleted: false,
            }
        },
        methods: {
            deleteProperty: function(){
                this.deleteLoading = true;
                axios.delete('/api/user/property/'+this.id+'/delete')
                    .then((response) => {
                        response.data.success === true ? this.deleted = true : false;
                        console.log(response.data.properties);
                    }).catch((error) => {
                    console.log(error);
                });
            }
        },

        mounted() {

        },

        computed() {

        },

        watch() {

        },

        created() {

        }
    }
</script>

<style scoped>

</style>
