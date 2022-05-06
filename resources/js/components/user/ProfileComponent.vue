<template>

    <div class="dash-breadcrumb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="dash-breadcrumb-content">
                        <div class="dash-breadcrumb-left">
                            <div class="breadcrumb-menu text-right sm-left">
                                <ul>
                                    <li class="active"><a href="/">Home</a></li>
                                    <li>My Profile</li>
                                </ul>
                            </div>
                        </div>
                        <a class="btn v3" href=""><i class="ion-plus-round"></i>Add Listing </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="dash-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="recent-activity">
                        <div class="act-title">
                            <h5><i class="ion-person"></i>Profile Details</h5>
                        </div>
                        <div class="profile-wrap">
                            <div class="row">
                                <div class="col-md-8 offset-md-2 py-4">
                                    <div class="edit-profile-photo text-center">
                                        <img v-if="user.image === null" src="/images/user.png" alt="">
                                        <img v-else :src="'/photos/users/'+user.image" alt="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="my-profile">
                                        <ul class="db-profile-info">
                                            <li>
                                                <h6>Name :</h6>
                                                <span>{{ user.name }} </span>
                                            </li>
                                            <li>
                                                <h6>Email :</h6>
                                                <span>{{ user.email }}</span>
                                            </li>
                                            <li>
                                                <h6>Mobile :</h6>
                                                <span> {{ user.mobile }}</span>
                                            </li>

                                        </ul>
                                        <router-link
                                            class="btn v5"
                                            exact
                                            to="/user/profile/edit">
                                            <i class="ion-ios-gear-outline"></i>Edit profile
                                        </router-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        data(){
            return {
                user: ''
            }
        },
        methods: {

        },
        mounted(){
            axios.get('/api/user/authenticate').then((response) => {
                this.user = response.data;
            });
        }
    }
</script>

<style scoped>

</style>
