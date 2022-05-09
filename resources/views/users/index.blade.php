<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="LionCoders" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = {csrfToken: '{{ csrf_token() }}'}</script>

    <!-- Links -->
    <link rel="icon" type="image/png" href="#" />
    <!-- google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="{{ asset('admin-assets/css/plugin.css') }}" rel="stylesheet" />
    <!-- Perfect scrollbar CSS-->
    <link href="{{ asset('admin-assets/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <!-- style CSS -->
    <link href="{{ asset('admin-assets/css/style.css') }}" rel="stylesheet" />
    <!-- Dashboard CSS -->
    <link href="{{ asset('admin-assets/css/dashboard.css') }}" rel="stylesheet" />
    <!--color switcher css-->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/switcher/skin-aqua.css') }}"
          media="screen" id="style-colors" />
    <!-- Document Title -->

    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/43c0a0512a.js" crossorigin="anonymous"></script>

    <!-- Vue.js -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>Realtor Dashboard | Atlantic Residents Properties</title>

</head>
<body>

<div id="app" class="page-wrapper">

    <!--Sidebar Menu Starts-->
    <aside class="menu-sidebar js-right-sidebar d-block d-lg-none">
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('assets/img/logo.png') }}" alt="" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar2">

            <bio-component></bio-component>

            <nav class="navbar-sidebar2">
                <ul class="list-unstyled navbar__list">
                    <li>
                        <router-link
                            class="nav-link"
                            exact
                            to="/user">
                            <i class="ion-ios-monitor"></i>Dashboard
                        </router-link>
                    </li>

                    <li>
                        <router-link
                            class="nav-link"
                            exact
                            to="/user/my-properties">
                            <i class="ion-ios-home"></i>My Properties
                        </router-link>
                    </li>

                    <li>
                        <router-link
                            class="nav-link"
                            exact
                            to="/user/properties/add">
                            <i class="ion-ios-plus"></i>Add Property
                        </router-link>
                    </li>

                    <li>
                        <router-link
                            class="nav-link"
                            exact
                            to="/user/profile">
                            <i class="ion-ios-person"></i>Profile
                        </router-link>
                    </li>

                    <li>
                        <router-link
                            class="nav-link"
                            exact
                            to="/user/logout">
                            <i class="ion-ios-locked"></i>Logout
                        </router-link>
                    </li>

                    <li>
                        <logout-component></logout-component>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!--Sidebar Menu ends-->

    <!--Dashboard content Wrapper starts-->
    <div class="dash-content-wrap">

        <!-- Top header starts-->
        <header class="db-top-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-9 col-sm-6 col-4">
                        <div class="site-navbar-wrap v2">
                            <div class="site-navbar">
                                <div class="row align-items-center">
                                    <nav class="site-navigation float-left">
                                        <div class="container">
                                            <ul class="site-menu js-clone-nav d-none d-lg-block">
                                                <li>
                                                    <router-link
                                                        class="nav-link"
                                                        exact
                                                        to="/user">Dashboard
                                                    </router-link>
                                                </li>

                                                <li>
                                                    <router-link
                                                        class="nav-link"
                                                        exact
                                                        to="/user/my-properties">My Properties
                                                    </router-link>
                                                </li>

                                                <li>
                                                    <router-link
                                                        class="nav-link"
                                                        exact
                                                        to="/user/properties/add">Add Property
                                                    </router-link>
                                                </li>

                                                <li>
                                                    <router-link
                                                        class="nav-link"
                                                        exact
                                                        to="/user/profile">Profile
                                                    </router-link>
                                                </li>

                                            </ul>
                                        </div>
                                    </nav>
                                    <div class="d-lg-none sm-right">
                                        <a href="#" class="mobile-bar js-menu-toggle">
                                            <span class="ion-android-menu"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="site-mobile-menu">
                                <div class="site-mobile-menu-header">
                                    <div class="site-mobile-menu-close  js-menu-toggle">
                                        <span class="ion-ios-close-empty"></span>
                                    </div>
                                </div>
                                <div class="site-mobile-menu-body"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- Top header ends-->

        <!--Vue Router View-->
        <router-view></router-view>

        <!--Dashboard footer starts-->
        <div class="dash-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>© {{ date('Y') }} Atlantic Residents Properties. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Dashboard footer ends-->

    </div>
    <!--Dashboard content Wrapper ends-->

</div>

<!-- Plugin JS-->
<script src="{{ asset('admin-assets/js/plugin.js') }}"></script>
<!--Perfect Scrollbar JS-->
<script src="{{ asset('admin-assets/js/perfect-scrollbar.min.js') }}"></script>
<!-- Main JS-->
<script src="{{ asset('admin-assets/js/main.js') }}"></script>
<!-- Dashboard JS-->
<script src="{{ asset('admin-assets/js/dashboard.js') }}"></script>
</body>

</html>
