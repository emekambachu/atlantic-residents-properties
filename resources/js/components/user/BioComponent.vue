<template>
    <div class="account-img">
        <img src="/images/user.png" alt="" />
    </div>
    <h4 class="name text-white">Howdy, {{ user.name }}</h4>
</template>

<script>
    export default {
        data(){
            return{
                user: {
                    name: '',
                },
            }
        },

        methods: {
            loadBio(){
                axios.get('/api/user/authenticate').then((response) => {
                    this.user.name = response.data.name;
                });
            }
        },

        mounted(){
           this.loadBio();
        },
    }
</script>

<style scoped>

</style>
