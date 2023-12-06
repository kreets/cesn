<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- The above 3 meta tags *must* come first in the head -->

    <!-- SITE TITLE -->
    <title>@yield('page_title', 'Ceglédi extrém sportnap')</title>
    <meta name="description" content="@yield('page_meta_description', 'Ceglédi extrém sportnap')"/>
    <meta name="keywords" content="@yield('page_meta_keywords', 'extrém, extrémsport, sportrendezvény, cex, ceglédi extrém sportnap')"/>
    <meta name="author" content="hegeshow.com"/>


    <!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
    <meta property="og:title" content="@yield('page_meta_description', 'Ceglédi extrém sportnap')"/>
    <meta property="og:url" content="{{ url()->current() }}"/>
    <meta property="og:locale" content="hu_HU"/>
    <meta property="og:site_name" content="{{setting('site.title')}}"/>
    <!--meta property="fb:admins" content="" /-->  <!-- use this if you have  -->
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="{{url('/storage')}}/{{setting('site.seo_graph_image')}}"/>
    <!-- when you post this page url in facebook , this image will be shown -->
    <!-- facebook open graph ends from here -->

    <meta name="twitter:card" content="{{setting('site.title')}}" />
    <meta name="twitter:site" content="{{setting('site.title')}}" />
    <meta name="twitter:title" content="@yield('page_meta_description', 'Ceglédi extrém sportnap')" />
    <meta name="twitter:description" content="@yield('page_meta_description', 'Ceglédi extrém sportnap')" />
    <meta name="twitter:image" content="{{url('/storage')}}/{{setting('site.seo_twittercard')}}" />

    <!--  FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico?i"/>
    <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico?o"/>
    <!-- this icon shows in browser toolbar -->
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon/favicon-16x16.png">
    <link rel="stylesheet" type="text/css" href="/assets/css/cookie-consent.css">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="/assets/libs/bootstrap/css/bootstrap.min.css" media="all"/>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="/assets/libs/fontawesome/css/font-awesome.min.css" media="all"/>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="/assets/libs/maginificpopup/magnific-popup.css" media="all"/>

    <!-- Time Circle -->
    <link rel="stylesheet" href="/assets/libs/timer/TimeCircles.css" media="all"/>

    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="/assets/libs/owlcarousel/owl.carousel.min.css" media="all" />
    <link rel="stylesheet" href="/assets/libs/owlcarousel/owl.theme.default.min.css" media="all" />

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:400,700%7cRaleway:300,400,400i,500,600,700,900"/>

    <!-- MASTER  STYLESHEET  -->
    <link id="lgx-master-style" rel="stylesheet" href="/assets/css/style-default.min.css" media="all"/>

    <!-- MODERNIZER CSS  -->
    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!--    POPUP CSS  -->
    <link rel="stylesheet" href="/assets/css/popup.css" media="all"/>
</head>

<body class="home">

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<div class="lgx-container ">

    <!--HEADER-->
    <header>
        <div id="lgx-header" class="lgx-header">
            <div class="lgx-header-position {{ Route::currentRouteName() == 'home' ? '' : 'lgx-header-position-white lgx-header-position-fixed' }}"> <!--lgx-header-position-fixed lgx-header-position-white lgx-header-fixed-container lgx-header-fixed-container-gap lgx-header-position-white-->
                <div class="lgx-container"> <!--lgx-container-fluid-->
                    <nav class="navbar navbar-default lgx-navbar">
                        @include('partials._navbar_menu', ["menu" => (Route::currentRouteName()  == 'home' ? "Kezdolap" : "Aloldalak")])
                    </nav>
                </div>
                <!-- //.CONTAINER -->
            </div>
        </div>
    </header>
    <!--HEADER END-->
    @include('partials._popup')
    @yield('content')
    @include('partials._footer')

</div>
<!--//.LGX SITE CONTAINER-->
<!-- *** ADD YOUR SITE SCRIPT HERE *** -->
<!-- JQUERY  -->
<script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>

<!-- BOOTSTRAP JS  -->
<script src="/assets/libs/bootstrap/js/bootstrap.min.js"></script>

<!-- Smooth Scroll  -->
<script src="/assets/libs/jquery.smooth-scroll.js"></script>

<!-- SKILLS SCRIPT  -->
<script src="/assets/libs/jquery.validate.js"></script>

<script src="https://www.google.com/recaptcha/api.js?render={{env('RECAPTCHA_SITE_KEY') }}"></script>

<!-- if load google maps then load this api, change api key as it may expire for limit cross as this is provided with any theme -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAPS_KEY')}}"></script>
<!-- CUSTOM GOOGLE MAP -->
<script type="text/javascript" src="/assets/libs/gmap/jquery.googlemap.js"></script>

<!-- adding magnific popup js library -->
<script type="text/javascript" src="/assets/libs/maginificpopup/jquery.magnific-popup.min.js"></script>

<!-- Owl Carousel  -->
<script src="/assets/libs/owlcarousel/owl.carousel.min.js"></script>

<!-- COUNTDOWN   -->
<script src="/assets/libs/countdown.js"></script>
<script src="/assets/libs/timer/TimeCircles.js"></script>

<!-- Counter JS -->
<script src="/assets/libs/waypoints.min.js"></script>
<script src="/assets/libs/counterup/jquery.counterup.min.js"></script>

<!-- SMOTH SCROLL -->
<script src="/assets/libs/jquery.smooth-scroll.min.js"></script>
<script src="/assets/libs/jquery.easing.min.js"></script>

<!-- type js -->
<script src="/assets/libs/typed/typed.min.js"></script>

<!-- header parallax js -->
<script src="/assets/libs/header-parallax.js"></script>

<!-- instafeed js -->

<script src="/assets/libs/instafeed.min.js"></script>

<!-- CUSTOM SCRIPT  -->
<script src="/assets/js/custom.script.js?v=1.12"></script>

<script type="text/javascript">
    $(document).ready(function() {
        /*=========================================================================
         ===  GOOGLE MAP
         ========================================================================== */
        if (typeof google != 'undefined') {
            //for Default  map
            if ($('.map-canvas-default').length) {
                $(".map-canvas-default").googleMap({
                    zoom: 13, // Initial zoom level (optiona
                    coords: [{{getCurrentEvent()->location->map_info}}], // Map center (optional)
                    type: "ROADMAP", // Map type (optional),
                    mouseZoom: false
                });

                //for marker
                $(".map-canvas-default").addMarker({
                    coords: [{{getCurrentEvent()->location->map_info}}], // GPS coords
                    title: '{{getCurrentEvent()->location->name}}',
                    text: '{{getCurrentEvent()->location->composedAddress()}}',
                    icon: '{{url('storage')}}/{{setting('site.google_map_pin')}}'
                });
            }

            // FOR DARK MAP
            if ($('.map-canvas-dark').length) {
                $(".map-canvas-dark").googleMap({
                    zoom: 2, // Initial zoom level (optiona
                    coords: [{{getCurrentEvent()->location->map_info}}], // Map center (optional)
                    type: "HYBRID", // Map type (optional),
                    mouseZoom: false
                });

                //for marker
                $(".map-canvas-dark").addMarker({
                    coords: [{{getCurrentEvent()->location->map_info}}], // GPS coords
                    title: '{{getCurrentEvent()->location->name}}',
                    text: '{{getCurrentEvent()->location->composedAddress()}}',
                    icon: '{{url('storage')}}/{{setting('site.google_map_pin')}}'
                });
            }
        }


        /*=========================================================================
         ===  //GOOGLE MAP END
         ========================================================================== */
    });
</script>

@yield('extrajs')


</body>
</html>
