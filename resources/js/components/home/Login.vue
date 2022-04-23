<template>
    <!-- row Start -->
    <div class="row justify-content-center mt-4">
        <div class="col-lg-8 col-md-7">
            <div class="property_block_wrap">

                <div class="property_block_wrap_header">
                    <h4 class="property_block_title">Login</h4>
                </div>

                <div v-if="errors" class="justify-content-center text-center">
                    <p v-for="(error, key) in errors" :key="key">
                        {{ error }}
                    </p>
                </div>

                <div v-show="loginLoading" class="justify-content-center text-center">
                    <img width="100" src="/images/loaders/loader.gif">
                </div>

                <form @submit.prevent="submitLogin" v-if="!loginLoading">
                    <div class="block-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input v-model="form.email" type="email" name="email"
                                           class="form-control simple" required>
                                    <p class="text-danger text-center m-0" v-if="errors.email">
                                        {{ errors.email.toString() }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input v-model="form.password" type="password" name="password"
                                           class="form-control simple" required>
                                    <p class="text-danger text-center m-0" v-if="errors.password">
                                        {{ errors.password.toString() }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-theme" type="submit">Submit</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>

    </div>
    <!-- /row -->
</template>

<script>
    export default {
        data() {
            return {
                form: {
                    email: '',
                    password: '',
                },

                errors: [],
                errorAlert: false,
                messageAlert: '',
                loginLoading: false
            }
        },

        methods: {
            submitLogin: function () {
                this.loginLoading = true;
                axios.post('/api/login', this.form).then((response) => {
                        response.data.success === true ? [
                            this.errors = [],
                            window.location.href = '/user',
                        ] : [
                            response.data.message ? this.errors.push(response.data.message)  : false,
                            this.errors = response.data.errors,
                        ];
                        console.log(response.data);
                    }).catch((error) => {

                }).finally(() => {
                    this.loginLoading = false;
                });
            },

        },

    }
</script>

<style scoped>

</style>
