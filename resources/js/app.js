/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import {
    createApp
} from 'vue';
import router from './routes';
import axios from 'axios';
import VueAxios from 'vue-axios';
import moment from 'moment';

// Sweet Alert
import Swal from 'sweetalert2';
window.Swal = Swal;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Home Components
import Register from './components/home/Register';
import Login from './components/home/Login';
import HomeSampleProperties from './components/home/HomeSampleProperties';
import HomePropertyDetail from './components/home/HomePropertyDetail';

import DashboardComponent from './components/user/DashboardComponent';
import BioComponent from './components/user/BioComponent';

import MyPropertiesComponent from './components/user/MyPropertiesComponent';
import AddPropertiesComponent from './components/user/AddPropertiesComponent';

import ProfileComponent from './components/user/ProfileComponent';
import ProfileEditComponent from './components/user/ProfileEditComponent';


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = createApp({
    components: {
        Register,
        Login,
        HomeSampleProperties,
        HomePropertyDetail,

        DashboardComponent,
        BioComponent,

        ProfileComponent,
        ProfileEditComponent,

        MyPropertiesComponent,
        AddPropertiesComponent,
    }
}).use(
    router, axios, VueAxios, moment
).mount('#app');
