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
                                    <li class="active">
                                        <router-link
                                            exact to="/user">Dashboard
                                        </router-link>
                                    </li>
                                    <li>Edit Profile</li>
                                </ul>
                            </div>
                        </div>
                        <router-link
                            class="btn v3"
                            exact to="/user/properties/add">
                            <i class="ion-plus-round"></i>Add Listing
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
                    <div class="db-add-list-wrap">
                        <div class="act-title">
                            <h5><i class="ion-person"></i> Profile Details :</h5>
                        </div>
                        <div class="db-add-listing">

                            <form @submit.prevent="updateProfile">
                                <div class="row">
                                    <div class="col-md-4 offset-md-4">
                                        <div v-if="validationAlert" class="bg-danger p-1 text-white">
                                            {{ validationAlert }}
                                        </div>
                                        <!-- Avatar -->
                                        <div class="edit-profile-photo">
                                            <img v-if="form.image === null && imageThumb === null"
                                                 src="/images/user.png" alt="">
                                            <img v-else-if="imageThumb !== null"
                                                 :src="imageThumb" alt="">
                                            <img v-else :src="'/photos/users/'+form.image" alt="">
                                            <div class="change-photo-btn">
                                                <div class="contact-form__upload-btn xs-left">
                                                    <input @change="uploadPhoto"
                                                           class="contact-form__input-file" type="file"
                                                           id="photo-upload">
                                                    <label for="photo-upload">
                                                        <i class="icofont-upload-alt"></i>
                                                        Upload Photo
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>First name</label>
                                                    <input type="text" class="form-control filter-input"
                                                           v-model="form.name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control filter-input"
                                                           v-model="form.email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control filter-input"
                                                           v-model="form.mobile">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn v5">Update profile</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

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
                form:{
                    name: '',
                    email: '',
                    mobile: '',
                    image: null,
                },
                imageThumb: null,
                validationAlert: '',
            }
        },
        methods: {
            uploadPhoto(event){
                //Assign image and path to this variable
                this.form.image = event.target.files[0];
                // assign variable to the event image upload
                const file = event.target.files[0];
                // validate image
                this.validateImage(this.form.image, file);
                // assign variable to the image preview
                this.imageThumb = URL.createObjectURL(file);
            },

            // Validate image
            validateImage: function(img, file){
                console.log(img.type +' - '+ img.size);
                let fileType = ['image/png', 'image/jpg', 'image/jpeg']
                if(fileType.includes(file.type) === false){
                    img = null;
                    this.validationAlert = "Incorrect format for "+file.name;
                    return false;
                }else{
                    this.validationAlert = '';
                }

                if(img.size > 3000000){
                    this.validationAlert = "Image can't be greater than 3mb for"+file.name;
                    return false;
                }else{
                    this.validationAlert = '';
                }
            },

            updateProfile(){
                // Install sweetalert2 to use
                // Loading
                Swal.fire({
                    title: 'Please Wait !',
                    html: 'Submitting',// add html attribute if you want or remove
                    allowOutsideClick: false,
                    showCancelButton: false,
                    showConfirmButton: false,
                    didOpen: () => {
                        Swal.showLoading();
                    },
                });

                let formData = new FormData();
                formData.append("title", this.form.title);
                formData.append("property_type_id", this.form.property_type_id);
                formData.append("state_id", this.form.state_id);
                formData.append("address", this.form.address);
                formData.append("description", this.form.description);
                formData.append("bedrooms", this.form.bedrooms);
                formData.append("bathrooms", this.form.bathrooms);
                formData.append("living_rooms", this.form.living_rooms);
                formData.append("cost", this.form.cost);
                formData.append("features", this.form.features);

                formData.append("image1", this.form.image1);
                formData.append("image2", this.form.image2);
                if(this.form.image3){
                    formData.append("image3", this.form.image3);
                }
                if(this.form.image4){
                    formData.append("image4", this.form.image4);
                }
                if(this.form.image5){
                    formData.append("image5", this.form.image5);
                }

                let config = {
                    headers: { 'content-type': 'multipart/form-data' }
                }
                axios.post('/api/realtor/property/submit', formData, config)
                    .then((response) => {
                        response.data.success === true ? this.formSuccess(response) : this.formError(response);
                        this.messageAlert = response.data.message;
                        console.log(response.data.message);
                    }).catch((error) => {
                    console.log(error);
                }).finally(() => {
                    this.formLoading = false;
                });
            },

        },
        mounted(){
            axios.get('/api/user/authenticate').then((response) => {
                this.form = response.data;
            });
        }
    }
</script>

<style scoped>

</style>
