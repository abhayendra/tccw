<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <title>Sunset Hotel | Hotel Premium HTML Template</title>
    <!-- CSS Plugins -->
    <link href="{{ asset('assets/plugins/lightbox/dist/css/lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/ionicons/css/ionicons.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/plugins/owl-carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/owl-carousel/dist/assets/owl.theme.default.min.css') }}">
    <!-- CSS Global -->
    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{ asset('plugins/rs-plugin-5.3.1/css/settings.css') }}">
    <!--build:css assets/css/theme.min.css-->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <!--endbuild-->
</head>
<body class="home page-template-default page template-slider color-custom style-simple button-stroke layout-full-width if-overlay no-shadows header-split minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-line-below-80-1 menuo-no-borders mobile-tb-center mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky be-reg-20975">
<!-- Back to top button
================================================== -->
<a id="back-to-top" href="#section__home" class="btn btn-top back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
    <i class="ion-android-arrow-up"></i>
</a>


<!-- PRELOADER
================================================== -->
<div id="loader-wrapper">
    <div id="loader"></div>
</div>

<!-- Info Section
================================================== -->
<div class="section__info">
    <div class="container">
        <div class="section_info__body">
            <div class="info__column-left">
                <div class="section_info__contact hidden-xs">
                    <p>
                        <i class="icon ion-android-pin"></i> {!! $settings['address'] !!}
                    </p>
                </div> <!-- .section_info__contact -->
                <div class="section_info__contact hidden-xs">
                    <p>
                        <i class="icon ion-android-call"></i> {!! $settings['phone'] !!}
                    </p>
                </div> <!-- .section_info__contact -->
            </div> <!-- .info__column-left -->
            <div class="info__column-right">
                <ul class="social__icons">
                    @if($settings['facebook']!="")
                    <li class="social-icons__item"><a href="{!! $settings['facebook'] !!}"><i class="icon ion-social-twitter" aria-hidden="true"></i></a></li>
                    @elseif($settings['twitter']!="")
                    <li class="social-icons__item"><a href="{!! $settings['twitter'] !!}"><i class="icon ion-social-facebook" aria-hidden="true"></i></a></li>
                    @elseif($settings['g_plus']!="")
                    <li class="social-icons__item"><a href="{!! $settings['g_plus'] !!}"><i class="icon ion-social-googleplus" aria-hidden="true"></i></a></li>
                    @elseif($settings['youtube']!="")
                    <li class="social-icons__item"><a href="{!! $settings['youtube'] !!}"><i class="icon ion-social-youtube" aria-hidden="true"></i></a></li>
                    @else
                    <li class="social-icons__item"><a href="{!! $settings['instagram'] !!}"><i class="icon ion-social-instagram" aria-hidden="true"></i></a></li>
                    @endif
                </ul> <!-- .social__icons -->
                <div class="dropdown lang-menu">
                    <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        En
                        <i class="icon ion-chevron-down"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Fr</a></li>
                        <li><a href="#">Es</a></li>
                        <li><a href="#">Ru</a></li>
                    </ul>
                </div> <!-- .lang-menu -->
                <form class="search-form hidden-xs" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default btn-search"><i class="icon ion-search"></i></button>
                </form> <!-- .search-form -->
            </div> <!-- .info__column-right -->
        </div> <!-- .section_info__body -->
    </div> <!-- .container -->
</div> <!-- .section__info -->



<!-- Navbar
================================================== -->
<nav class="navbar navbar-default">
    <div class="container">

        <!-- Header -->
        <div class="navbar-header">

            <!-- Collapse toggle -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar__collapse" aria-expanded="false">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Logo -->
            <a class="navbar-brand" href="index.html">
               <img src="{!! asset($settings['logo']) !!}">
            </a>

        </div> <!-- / .navbar-header -->

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbar__collapse">
            <ul class="nav navbar-nav navbar-left">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <i class="icon ion-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li class="active"><a href="index.html">Home static image</a></li>
                        <li><a href="index-parallax.html">Home Parallax</a></li>
                        <li><a href="index-slider.html">Home Slider</a></li>
                        <li><a href="index-video.html">Home Video</a></li>
                    </ul>
                </li>
                <li><a href="about.html">About us</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rooms <i class="icon ion-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="rooms-1.html">Rooms 1</a></li>
                        <li><a href="rooms-2.html">Rooms 2</a></li>
                        <li><a href="room-detail.html">Room detail</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="reservation.html">Reservation</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <i class="icon ion-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="gallery-fullwidth.html">Gallery full width</a></li>
                        <li><a href="gallery-boxed.html">Gallery boxed</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-item.html">Blog Item</a></li>
                        <li><a href="404page.html">404 Page</a></li>
                    </ul>
                </li>
                <li><a href="contacts.html">Contacts</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->

    </div><!-- /.container -->
</nav>

<!-- CONTENT
  ================================================== -->

<!-- section home -->


@include('frontend.layout.slider')

@yield('content')


<!-- section footer -->
<footer class="section__footer">
    <div class="container">
        <div class="footer__body">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-sm-push-4 col-md-6 col-md-push-3">
                    <div class="footer__item">
                        <h2 class="brand__logo">Sunset Hotel</h2>
                        <p class="brand__sublogo">Grand</p>
                        <ul class="social__icons">
                            <li class="social-icons__item"><a href="#"><i class="icon ion-social-twitter" aria-hidden="true"></i></a></li>
                            <li class="social-icons__item"><a href="#"><i class="icon ion-social-facebook" aria-hidden="true"></i></a></li>
                            <li class="social-icons__item"><a href="#"><i class="icon ion-social-googleplus" aria-hidden="true"></i></a></li>
                        </ul> <!-- .social__icons -->
                    </div> <!-- .footer__item -->
                </div>
                <div class="col-xs-12 col-sm-4 col-sm-pull-4 col-md-3 col-md-pull-6">
                    <div class="footer__item">
                        <ul class="footer__links">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul> <!-- .footer__links -->
                    </div> <!-- .footer__item -->
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="footer__item">
                        <h3 class="newsletter__title">Newsletter</h3>
                        <p class="newsletter__subtitle">Subscribe to our email newsletter to receive updates and news.</p>

                        <!-- Newsletter form -->
                        <div id="mc_embed_signup">
                            <form class="newsletter__form validate" action="http://themeforest.us16.list-manage.com/subscribe/post-json?u=3c9679e26b601e1a87122b12f&amp;id=e4b9351526&amp;c=?" method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
                                <div id="mc_embed_signup_scroll">
                                    <div class="mc-field-group form-group">
                                        <label for="mce-EMAIL" class="sr-only">E-mail address</label>
                                        <input type="email" value="" name="EMAIL" class="required email form-control newsletter_input" id="mce-EMAIL" placeholder="Email address">
                                    </div>
                                    <div id="mce-responses" class="clear">
                                        <div class="response"></div>
                                        <div class="response" id="mce-success-response"></div>
                                    </div>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div aria-hidden="true" id="mce-hidden-input">
                                        <input type="text" name="b_507744bbfd1cc2879036c7780_4523d25e1b" tabindex="-1" value="">
                                    </div>
                                    <div class="clear">
                                        <button type="submit" class="btn btn-default btn-newsletter" id="mc-embedded-subscribe">
                                            <i class="icon ion-paper-airplane"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- #mc_embed_signup -->

                    </div> <!-- .footer__item -->
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .footer__body -->
        <div class="footer__copyright">
            <div class="row">
                <div class="col-xs-12">
                    <hr>
                    <p class="footer_copyright__text">&#169; 2017 Sunset Grand Hotel. All rights reserved.</p>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .footer__copyright -->

    </div> <!-- / .container -->
</footer> <!-- .section__footer -->

<!--
================================================== -->

<!-- JS Global -->
<script src="{{ asset('assets/plugins/jquery/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- JS Plugins -->
<script src="{{ asset('assets/plugins/moment-develop/moment.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('assets/plugins/waypoints/lib/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/plugins/lightbox/dist/js/lightbox.min.js') }}"></script>
<script src="{{ asset('assets/plugins/owl-carousel/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/plugins/countTo/jquery.countTo.js') }}"></script>
<script src="{{ asset('assets/plugins/contact/contact.js') }}"></script>

<!-- JS Custom -->
<!--build:js assets/js/theme.min.js -->
<script src="{{ asset('assets/js/theme.js') }}"></script>
<!-- endbuild -->
<script src="{{ asset('assets/js/google_maps.js') }}"></script>
<!-- Google Maps -->
<script src="{{ asset('plugins/rs-plugin-5.3.1/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('plugins/rs-plugin-5.3.1/js/jquery.themepunch.revolution.min.js') }}"></script>

<script src="{{ asset('plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.parallax.min.js') }}   "></script>
<script>
    var revapi1, tpj;
    (function() {
        if (!/loaded|interactive|complete/.test(document.readyState))
            document.addEventListener("DOMContentLoaded", onLoad);
        else
            onLoad();

        function onLoad() {
            if (tpj === undefined) {
                tpj = jQuery;
                if ("off" == "on")
                    tpj.noConflict();
            }
            if (tpj("#rev_slider_1_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_1");
            } else {
                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                    sliderType: "standard",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        onHoverStop: "off",
                    },
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: 1240,
                    gridheight: 600,
                    lazyType: "none",
                    parallax: {
                        type: "scroll",
                        origo: "enterpoint",
                        speed: 400,
                        speedbg: 0,
                        speedls: 0,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                    },
                    shadow: 0,
                    spinner: "spinner2",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "on",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "#Top_bar",
                    fullScreenOffset: "60px",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            };
        };
    }());

</script>
</body>

</html>
