<template>

    <div class="dash-breadcrumb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="dash-breadcrumb-content">
                        <div class="dash-breadcrumb-left">
                            <div class="breadcrumb-menu text-right sm-left">
                                <ul>
                                    <li class="active"><a href="#">Home</a></li>
                                    <li><a href="#">Dashboard</a></li>
                                    <li>Add Listing</li>
                                </ul>
                            </div>
                        </div>
                        <router-link
                            class="btn v3"
                            exact to="/user/my-properties">
                            <i class="ion-ios-home"></i>My Properties
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
                            <h5><i class="ion-ios-location"></i> Add property</h5>
                        </div>

                        <div class="db-add-listing">
                            <div class="bg-danger text-white text-center p-2" v-if="errorAlert">
                                <p>{{ messageAlert }}</p>
                                <p v-for="(error, key) in errors" :key="key">
                                    {{ error.toString() }}
                                </p>
                            </div>

                            <p class="bg-success text-white text-center p-2" v-if="successAlert">
                                {{ messageAlert }}</p>

                            <p class="text-center p-2" v-show="formLoading">
                                <img src="/images/loaders/loader.gif" width="200"/>
                            </p>

                            <form enctype="multipart/form-data"
                                  @submit.prevent="updateProperty" v-if="!formLoading">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Room Title</label>
                                            <input type="text" name="title"
                                                   class="form-control filter-input"
                                                   v-model="form.title">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Type</label>
                                            <select class="nice-select filter-input" name="property_type_id"
                                                    v-model="form.property_type_id">
                                                <option selected>Select</option>
                                                <option class="option" v-for="type in propertyTypes"
                                                        :key="type.id"
                                                        :value="type.id"
                                                :selected="type.id === form.property_type_id">
                                                    {{ type.name }}
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="number" name="cost" class="form-control filter-input"
                                                   v-model="form.cost">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Location</label>
                                            <select class="nice-select filter-input" name="country_id"
                                                    v-model="form.country_id">
                                                <option selected>Select</option>
                                                <option class="option" v-for="(country, key) in countries"
                                                        :key="country.id"
                                                        :value="country.id"
                                                        :selected="country.id === form.country_id">
                                                    {{ country.name }}
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="address" class="form-control filter-input"
                                                   v-model="form.address">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Room Description</label>
                                            <ckeditor :editor="editor" v-model="form.description"
                                                      :config="editorConfig"></ckeditor>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Bedrooms</label>
                                            <input type="number" name="bedroom" required
                                                   class="form-control filter-input"
                                                   v-model="form.bedrooms">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Bathrooms</label>
                                            <input type="number" name="bathroom" required
                                                   class="form-control filter-input"
                                                   v-model="form.bathrooms">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Living Rooms</label>
                                            <input type="number" name="living_room" required
                                                   class="form-control filter-input"
                                                   v-model="form.living_rooms">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Square Feet</label>
                                            <input type="number" name="living_room" required
                                                   class="form-control filter-input"
                                                   v-model="form.square_feet">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Features</label>
                                            <div class="filter-checkbox">
                                                <input id="check-ac" type="checkbox" value="Air condition"
                                                       v-model="form.features">
                                                <label for="check-ac">Air condition</label>

                                                <input id="check-wf" type="checkbox" value="Wifi"
                                                       v-model="form.features">
                                                <label for="check-wf">Wi Fi</label>

                                                <input id="check-g" type="checkbox" value="Gym"
                                                       v-model="form.features">
                                                <label for="check-g">Gym</label>

                                                <input id="check-lr" type="checkbox" value="Laundry room"
                                                       v-model="form.features">
                                                <label for="check-lr">Laundry Room</label>

                                                <input id="check-i" type="checkbox" value="Internet"
                                                       v-model="form.features">
                                                <label for="check-i">Internet</label>

                                                <input id="check-pa" type="checkbox" value="Pets allowed"
                                                       v-model="form.features">
                                                <label for="check-pa">Pets Allowed</label>

                                                <input id="check-ch" type="checkbox" value="Central heating"
                                                       v-model="form.features">
                                                <label for="check-ch">Central heating</label>

                                                <input id="check-sp" type="checkbox" value="Swimming pool"
                                                       v-model="form.features">
                                                <label for="check-sp">Swimming pool</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="add-listing__input-file-box">
                                                <input class="add-listing__input-file" type="file"
                                                       name="file" id="file" multiple
                                                       @change="uploadImages">
                                                <div class="add-listing__input-file-wrap">
                                                    <i class="ion-ios-cloud-upload"></i>
                                                    <p>Click to upload your images</p>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-center">
                                                <p v-if="imageValidation !== ''"
                                                   class="p-1 text-white text-center"></p>
                                                <div v-for="(image, index) in images" :key="index"
                                                     style="width:100px; margin-right:5px;"
                                                     class="text-center">
                                                    <img :src="image.file !== null ? image.src : '/photos/properties/'+image.src"/><br>
                                                    <i @click.prevent="removeImage(index)"
                                                       class="fa-duotone fa-x bg-danger text-white p-1"
                                                       title="remove"></i>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn v8 mar-top-15">Update Property</button>
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
    import CKEditor from '@ckeditor/ckeditor5-vue';
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

    export default {
        components: {
            // Use the <ckeditor> component in this view.
            ckeditor: CKEditor.component
        },
        data(){
            return {
                editor: ClassicEditor,
                editorConfig: {

                },
                form: {
                    title: '',
                    property_type_id: '',
                    country_id: '',
                    address: '',
                    description: '',
                    bedrooms: '',
                    bathrooms: '',
                    living_rooms: '',
                    square_feet: '',
                    cost: '',
                    features: [],
                },
                images: [],

                states: [],
                countries: [],
                propertyTypes: [],

                errors:[],
                formLoading: false,
                successAlert: false,
                errorAlert: false,
                messageAlert: '',
                imageValidation: '',
            }
        },

        methods: {
            populateForm(response){
                this.form.title = response.data.property.title;
                this.form.property_type_id = response.data.property.property_type_id;
                this.form.country_id = response.data.property.country_id;
                this.form.address = response.data.property.address;
                this.form.description = response.data.property.description;
                this.form.bedrooms = response.data.property.bedrooms;
                this.form.bathrooms = response.data.property.bathrooms;
                this.form.living_rooms = response.data.property.living_rooms;
                this.form.square_feet = response.data.property.square_feet;
                this.form.cost = response.data.property.cost;
                this.form.features = response.data.property.features.split(',');

                // populate images
                for (let i = 0; i < response.data.images.length; i++) {
                    this.images.push({
                        src: response.data.images[i],
                        file: null
                    });
                }
            },

            updateProperty: function(){
                this.formLoading = true;

                let formData = new FormData();
                formData.append("title", this.form.title);
                formData.append("property_type_id", this.form.property_type_id);
                formData.append("country_id", this.form.country_id);
                formData.append("address", this.form.address);
                formData.append("description", this.form.description);
                formData.append("bedrooms", this.form.bedrooms);
                formData.append("bathrooms", this.form.bathrooms);
                formData.append("living_rooms", this.form.living_rooms);
                formData.append("square_feet", this.form.square_feet);
                formData.append("cost", this.form.cost);
                formData.append("features", this.form.features);

                for (let i = 0; i < this.images.length; i++) {
                    formData.append("images[]", this.images[i].file);
                }

                // if(this.form.image2){
                //     formData.append("image2", this.form.image2);
                // }
                // if(this.form.image3){
                //     formData.append("image3", this.form.image3);
                // }
                // if(this.form.image4){
                //     formData.append("image4", this.form.image4);
                // }
                // if(this.form.image5){
                //     formData.append("image5", this.form.image5);
                // }

                let config = {
                    headers: {'content-type': 'multipart/form-data'}
                }
                console.log(this.form.title);
                axios.post('/api/user/property/'+ this.$route.params.id +'/update', formData, config)
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

            formSuccess: function(response){
                this.successAlert = true;
            },

            formError: function(response){
                this.errorAlert = true;
                this.errors = response.data.errors
            },

            // upload and preview image
            uploadImages: function(event){
                // assign selected files to event array
                // loop through files and validate
                // Add to img object and push to images array
                let selectedFiles = event.target.files;
                for (let i = 0; i < selectedFiles.length; i++){
                    if(i >= 15 || this.images.length >= 15){// 15 images max
                        this.imageValidation = "15 images max";
                        return false;
                    }
                    this.validateImage(selectedFiles[i]);
                    let img = {
                        src: URL.createObjectURL(selectedFiles[i]),
                        file: selectedFiles[i],
                    }
                    this.images.push(img);
                }
            },

            removeImage(index){
                this.images.splice(index, 1);
            },

            // upload and preview image
            // uploadImage1: function(event){
            //     //Assign image and path to this variable
            //     this.form.image1 = event.target.files[0];
            //     // assign variable to the event image upload
            //     const file = event.target.files[0];
            //     // validate image
            //     this.validateImage(this.form.image1, file);
            //     // assign variable to the image preview
            //     this.form.image1preview = URL.createObjectURL(file);
            // },
            // uploadImage2: function(event){
            //     //Assign image and path to this variable
            //     this.form.image2 = event.target.files[0];
            //     // assign variable to the event image upload
            //     const file = event.target.files[0];
            //     // validate image
            //     this.validateImage(this.form.image2, file);
            //     // assign variable to the image preview
            //     this.form.image2preview = URL.createObjectURL(file);
            // },
            // uploadImage3: function(event){
            //     //Assign image and path to this variable
            //     this.form.image3 = event.target.files[0];
            //     // assign variable to the event image upload
            //     const file = event.target.files[0];
            //     // validate image
            //     this.validateImage(this.form.image3, file);
            //     // assign variable to the image preview
            //     this.form.image3preview = URL.createObjectURL(file);
            // },
            // uploadImage4: function(event){
            //     //Assign image and path to this variable
            //     this.form.image4 = event.target.files[0];
            //     // assign variable to the event image upload
            //     const file = event.target.files[0];
            //     // validate image
            //     this.validateImage(this.form.image4, file);
            //     // assign variable to the image preview
            //     this.form.image4preview = URL.createObjectURL(file);
            // },
            // uploadImage5: function(event){
            //     //Assign image and path to this variable
            //     this.form.image5 = event.target.files[0];
            //     // assign variable to the event image upload
            //     const file = event.target.files[0];
            //     // validate image
            //     this.validateImage(this.form.image5, file);
            //     // assign variable to the image preview
            //     this.form.image5preview = URL.createObjectURL(file);
            // },

            // Validate image
            validateImage: function(img){
                console.log(img.type +' - '+ img.size);
                let fileType = ['image/png', 'image/jpg', 'image/jpeg']
                if(fileType.includes(img.type) === false){
                    this.imageValidation = "Incorrect format for "+img.name;
                    return false;
                }else{
                    this.imageValidation = '';
                }

                if(img.size > 3000000){
                    this.imageValidation = "Image can't be greater than 3mb for "+img.name;
                    return false;
                }else{
                    this.imageValidation = '';
                }
            },

            getCountries: function(){
                axios.get('/api/countries')
                    .then((response) => {
                        response.data.success ? this.countries = response.data.countries : false;
                        console.log(response.data);
                    }).catch((error) => {
                    console.log(error);
                });
            },

            getPropertyTypes: function(){
                axios.get('/api/property/types')
                    .then((response) => {
                        response.data.success ? this.propertyTypes = response.data.property_types : false;
                        console.log(response.data);
                    }).catch((error) => {
                    console.log(error);
                });
            },

            getCurrentProperty(){
                axios.get('/api/user/property/'+ this.$route.params.id +'/edit')
                    .then((response) => {
                        response.data.success === true ? this.populateForm(response) : false;
                        console.log(response.data.property);
                    }).catch((error) => {
                    console.log(error);
                });
            },

        },

        mounted(){
            console.log('The id is: ' + this.$route.params.id);
            console.log('Images: ' + this.images);
            this.getCountries();
            this.getPropertyTypes();
            this.getCurrentProperty();
        },

        created(){

        }
    }
</script>

<style scoped>

</style>
