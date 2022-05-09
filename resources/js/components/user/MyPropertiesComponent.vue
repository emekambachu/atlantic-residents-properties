<template>

    <div class="dash-breadcrumb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="dash-breadcrumb-content">
                        <div class="dash-breadcrumb-left">
                            <div class="breadcrumb-menu text-right sm-left">
                                <ul>
                                    <li class="active">
                                        <a href="/user">Home</a>
                                    </li>
                                    <li>My Listings</li>
                                </ul>
                            </div>
                        </div>
                        <router-link
                            class="btn v3" exact to="/user/properties/add">
                            <i class="ion-ios-plus"></i>Add Property
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="dash-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="recent-activity my-listing">
                        <div class="act-title">
                            <h5><i class="ion-social-buffer-outline"></i> My Properties</h5>
                        </div>

                        <div class="viewd-item-wrap">
                            <single-property-component
                                v-for="property in properties"
                                :key="property.id"
                                :property="property"
                            ></single-property-component>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

</template>

<script>
    import SinglePropertyComponent from "./SinglePropertyComponent";
    export default {
        components: {
            SinglePropertyComponent
        },
        data(){
            return{
                properties: [],
            }
        },
        methods: {
            getProperties: function(){
                axios.get('/api/user/properties')
                    .then((response) => {
                        response.data.success === true ? this.properties = response.data.properties : false;
                        console.log(response.data.properties);
                    }).catch((error) => {
                    console.log(error);
                });
            },
        },

        mounted() {
            this.getProperties();
        },
    }
</script>

<style scoped>

</style>
