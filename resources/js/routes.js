import { createWebHistory, createRouter } from "vue-router";

import NotFound from './components/NotFoundComponent';

// Realtor Account
import Dashboard from './components/user/DashboardComponent';
import MyProperties from "./components/user/MyPropertiesComponent";
import AddProperties from "./components/user/AddPropertiesComponent";
import Profile from "./components/user/ProfileComponent";
import ProfileEdit from "./components/user/ProfileEditComponent";
import PropertyEdit from "./components/user/PropertyEditComponent";

const routes = [
    {
        // for urls that don't exist
        path: "/:catchAll(.*)",
        name: "NotFound",
        component: NotFound,
        meta: {
            requiresAuth: false
        }
    },

    {
        // This url route is ignored in web.php using /{any}
        // being rendered by server
        path: '/user',
        name: "Dashboard",
        component: Dashboard,
        beforeEnter: (to, from, next) => {
            axios.get('/api/user/authenticate').then(() => {
                next()
            }).catch(() => {
                window.location.href = '/login';
            });
        }
    },

    {
        path: '/user/my-properties',
        name: "MyProperties",
        component: MyProperties,
        beforeEnter: (to, from, next) => {
            axios.get('/api/user/authenticate').then(() => {
                next()
            }).catch(() => {
                window.location.href = '/login';
            });
        }
    },

    {
        path: '/user/properties/add',
        name: "AddProperties",
        component: AddProperties,
        beforeEnter: (to, from, next) => {
            axios.get('/api/user/authenticate').then(() => {
                next()
            }).catch(() => {
                window.location.href = '/login';
            });
        }
    },

    {
        path: '/user/property/:id/edit',
        name: "EditProperty",
        component: PropertyEdit,
        beforeEnter: (to, from, next) => {
            axios.get('/api/user/authenticate').then(() => {
                next()
            }).catch(() => {
                window.location.href = '/login';
            });
        }
    },

    {
        path: '/user/profile',
        name: "Profile",
        component: Profile,
        beforeEnter: (to, from, next) => {
            axios.get('/api/user/authenticate').then(() => {
                next()
            }).catch(() => {
                window.location.href = '/login';
            });
        }
    },

    {
        path: '/user/profile/edit',
        name: "ProfileEdit",
        component: ProfileEdit,
        beforeEnter: (to, from, next) => {
            axios.get('/api/user/authenticate').then(() => {
                next()
            }).catch(() => {
                window.location.href = '/login';
            });
        }
    },

    {
        path: '/user/logout',
        name: "UserLogout",
        beforeEnter: (to, from, next) => {
            axios.get('/api/user/logout').then(() => {
                window.location.href = '/login';
            });
        }
    },

];

const router = createRouter({
    linkExactActiveClass: '',
    history: createWebHistory(),
    routes,
});

export default router;
