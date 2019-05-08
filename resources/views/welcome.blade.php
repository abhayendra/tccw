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
                            <i class="icon ion-android-pin"></i> 29 Land St, Lorem City, CA
                        </p>
                    </div> <!-- .section_info__contact -->
                    <div class="section_info__contact hidden-xs">
                        <p>
                            <i class="icon ion-android-call"></i> +96 885 1247
                        </p>
                    </div> <!-- .section_info__contact -->
                </div> <!-- .info__column-left -->
                <div class="info__column-right">
                    <ul class="social__icons">
                        <li class="social-icons__item"><a href="#"><i class="icon ion-social-twitter" aria-hidden="true"></i></a></li>
                        <li class="social-icons__item"><a href="#"><i class="icon ion-social-facebook" aria-hidden="true"></i></a></li>
                        <li class="social-icons__item"><a href="#"><i class="icon ion-social-googleplus" aria-hidden="true"></i></a></li>
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
                    <h3 class="navbar-brand__logo">Sunset Hotel</h3>
                    <p class="navbar-brand__sublogo">Grand</p>
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
    <section class="section__home" id="section__home">
        <div id="Wrapper">
            <div id="Header_wrapper">
                <header id="Header">
                    <div class="mfn-main-slider" id="mfn-rev-slider">
                        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-source="gallery" style="background:#e9e9ea;padding:0px;">
                            <div id="rev_slider_1_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8">
                                <ul>
                                    <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power3.easeIn" data-easeout="Power3.easeOut" data-masterspeed="5" data-delay="1000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                        <img src="{{ asset('content/model2/images/model2-slider-slide1.jpg')}}" data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 -40" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                                    </li>
                                    <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power3.easeIn" data-easeout="Power3.easeOut" data-masterspeed="5" data-delay="1000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                        <img src="{{ asset('content/model2/images/model2-slider-slide3.jpg')}}" data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="10 20" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                                    </li>
                                    <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power3.easeIn" data-easeout="Power3.easeOut" data-masterspeed="5" data-delay="1000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                        <img src="{{ asset('content/model2/images/model2-slider-slide2.jpg')}}" data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                                    </li>
                                    <li data-index="rs-4" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power3.easeIn" data-easeout="Power3.easeOut" data-masterspeed="5" data-delay="1000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                        <img src="{{ asset('content/model2/images/model2-slider-slide4.jpg')}}" data-bgposition="center top" data-kenburns="on" data-duration="5000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 -40" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </header>
            </div>

        </div>
    </section>
    <section class="section__home" id="section__home" style="display:none;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="welcome__content">

                        <!-- logo -->
                        <h1 class="welcome_content__title">Sunset Hotel</h1>
                        <p class="welcome_content__title-primary">grand</p>

                        <div class="divider">
                            <hr class="line1">
                            <hr class="line2">
                            <hr class="line1">
                        </div> <!-- / .divider -->

                        <p class="welcome_content__desc">In our hotel you will find everything you need to enjoy your vacation</p>

                        <!-- button -->
                        <a href="#section__about" class="btn btn-reservation">Explore it</a>

                    </div> <!-- .welcome__content -->
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->

        <!-- background image (insert via CSS) -->
        <div class="home__bg"></div>

    </section> <!-- / .section__home -->

    <!-- section availability -->
    <section class="section__availability" style="display:none;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <!-- Reservation form -->
                    <form class="reservation__form">
                        <div class="form-group">
                            <div class="form-group__inner">
                                <label for="reservation__check-in">Arrival date</label>
                                <input type="text" class="form-control date" id="reservation__check-in" value="24 December 2017">
                            </div> <!-- / .form-group__inner -->
                        </div> <!-- / .form-group -->
                        <div class="form-group">
                            <div class="form-group__inner">
                                <label for="reservation__check-out">Departure date</label>
                                <input type="text" class="form-control date" id="reservation__check-out" value="12 January 2018">
                            </div> <!-- / .form-group__inner -->
                        </div> <!-- / .form-group -->
                        <div class="form-group">
                            <div class="form-group__inner">
                                <label for="reservation__adults">Adults</label>
                                <input type="text" id="reservation__adults">
                                <div class="dropdown reservation-dropdown">
                                    <button class="dropdown-toggle" type="button" id="adults-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <span>1 Adult</span>
                                        <i class="icon ion-chevron-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="adults-dropdown">
                                        <li><a href="#">1 Adult</a></li>
                                        <li><a href="#">2 Adults</a></li>
                                        <li><a href="#">3 Adults</a></li>
                                    </ul>
                                </div> <!-- . -->
                            </div> <!-- / .form-group__inner -->
                        </div> <!-- / .form-group -->
                        <div class="form-group">
                            <div class="form-group__inner">
                                <label for="reservation__children">Children</label>
                                <input type="text" id="reservation__children">
                                <div class="dropdown reservation-dropdown">
                                    <button class="dropdown-toggle" type="button" id="children-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <span>1 Child</span>
                                        <i class="icon ion-chevron-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="children-dropdown">
                                        <li><a href="#">1 Child</a></li>
                                        <li><a href="#">2 Children</a></li>
                                        <li><a href="#">3 Children</a></li>
                                    </ul>
                                </div> <!-- . -->
                            </div> <!-- / .form-group__inner -->
                        </div> <!-- / .form-group -->
                    </form> <!-- / .reservation__form -->

                </div>
            </div> <!-- / .row -->
            <div class="row">
                <div class="col-xs-12">

                    <!-- Reservation button -->
                    <div class="reservation__button">
                        <button type="submit" class="btn btn-reservation">Check availability</button>
                    </div> <!-- / .reservation__button -->

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section> <!-- .section__availability -->

    <!-- section about -->
    <section class="section__about" id="section__about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section__title">Welcome to <strong>Sunset Hotel</strong></h2>
                    <div class="divider">
                        <hr class="line1">
                        <hr class="line2">
                        <hr class="line1">
                    </div> <!-- / .divider -->
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
        <div class="container-fluid">
            <div class="row">
                <div class="section_about__content">
                    <div class="col-md-6">
                        <div class="about__pic">
                            <img src="{{ asset('assets/img/about_img.jpg') }}" class="img-responsive" alt="...">
                        </div> <!-- / .about__pic -->
                    </div>
                    <div class="col-md-6">
                        <div class="about__desc">
                            <p class="about_desc__subtitle">About us</p>
                            <h3 class="about_desc__title">Probably the best place to enjoy your life</h3>
                            <p class="about_desc__desc">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary.</p>
                            <h4 class="about_desc__quote">The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</h4>
                            <a href="about.html" class="btn btn-default">Learn More</a>
                        </div> <!-- / .about__desc -->
                    </div>
                </div> <!-- / .section_about__content -->
            </div> <!-- / .row -->
        </div>

    </section> <!-- / .section__about -->

    <!-- section best-rooms -->
    <section class="section__best-rooms">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section__title">Our <strong>Best rooms</strong></h2>
                    <div class="divider">
                        <hr class="line1">
                        <hr class="line2">
                        <hr class="line1">
                    </div> <!-- / .divider -->
                    <p class="section__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sit dicta quae natus quasi ratione quis id, tenetur atque blanditiis.</p>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
        <div class="container">
            <div class="best-rooms__content">
                <div class="row">
                    <div class="col-sm-6">
                        <figure class="best-rooms__item">
                            <img src="{{ asset('assets/img/single_room.jpg') }}" class="img-responsive" alt="...">
                            <figcaption>
                                <h3>Single room</h3>
                                <div class="item__price">
                                    $50 <small>/ night</small>
                                </div>
                                <p class="item__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sit dicta quae natus quasi ratione quis id, tenetur atque blanditiis.</p>
                                <a href="reservation.html" class="btn-book">Book now <i class="icon ion-chevron-right"></i><i class="icon ion-chevron-right"></i></a>
                            </figcaption>
                        </figure> <!-- / .best-rooms__item -->
                    </div>
                    <div class="col-sm-6">
                        <figure class="best-rooms__item">
                            <img src="{{ asset('assets/img/double_room.jpg') }}" class="img-responsive" alt="...">
                            <figcaption>
                                <h3>Double room</h3>
                                <div class="item__price">
                                    $135 <small>/ night</small>
                                </div>
                                <p class="item__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sit dicta quae natus quasi ratione quis id, tenetur atque blanditiis.</p>
                                <a href="reservation.html" class="btn-book">Book now <i class="icon ion-chevron-right"></i><i class="icon ion-chevron-right"></i></a>
                            </figcaption>
                        </figure> <!-- / .best-rooms__item -->
                    </div>
                </div> <!-- / .row -->
                <div class="row">
                    <div class="col-sm-6">
                        <figure class="best-rooms__item">
                            <img src="{{ asset('assets/img/deluxe_room.jpg') }}" class="img-responsive" alt="...">
                            <figcaption>
                                <h3>Deluxe room</h3>
                                <div class="item__price">
                                    $240 <small>/ night</small>
                                </div>
                                <p class="item__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sit dicta quae natus quasi ratione quis id, tenetur atque blanditiis.</p>
                                <a href="reservation.html" class="btn-book">Book now <i class="icon ion-chevron-right"></i><i class="icon ion-chevron-right"></i></a>
                            </figcaption>
                        </figure> <!-- / .best-rooms__item -->
                    </div>
                    <div class="col-sm-6">
                        <figure class="best-rooms__item">
                            <img src="{{ asset('assets/img/royal_room.jpg') }}" class="img-responsive" alt="...">
                            <figcaption>
                                <h3>Royal room</h3>
                                <div class="item__price">
                                    $320 <small>/ night</small>
                                </div>
                                <p class="item__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam illum modi explicabo obcaecati odit, omnis quis alias.</p>
                                <a href="reservation.html" class="btn-book">Book now <i class="icon ion-chevron-right"></i><i class="icon ion-chevron-right"></i></a>
                            </figcaption>
                        </figure> <!-- / .best-rooms__item -->
                    </div>
                </div> <!-- / .row -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="rooms__button">
                            <a href="rooms-1.html" class="btn">See all rooms</a>
                        </div> <!-- / .rooms__button -->
                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .best-rooms__content -->
        </div> <!-- / .container -->
    </section> <!-- / .section__best-rooms -->

    <!-- section services -->
    <section class="section__services">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="services__item">
                        <h2 class="services_item__title">Parking</h2>
                        <div class="services_item__divider">
                            <i class="icon ion-android-star"></i>
                            <i class="icon ion-android-star"></i>
                            <i class="icon ion-android-star"></i>
                        </div> <!-- .services_item__divider -->
                        <p class="services_item__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel temporibus adipisci mollitia ducimus facilis nesciunt at minima magni optio, dignissimos, neque dolore iste labore dolor enim, ipsam quisquam, quae nihil!</p>
                    </div> <!-- .services__item -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="services__item">
                        <h2 class="services_item__title">Fitness hall</h2>
                        <div class="services_item__divider">
                            <i class="icon ion-android-star"></i>
                            <i class="icon ion-android-star"></i>
                            <i class="icon ion-android-star"></i>
                        </div> <!-- .services_item__divider -->
                        <p class="services_item__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi eaque, eum. Voluptates corporis tenetur commodi nihil velit perspiciatis natus fugit rerum nisi, at, voluptas autem quisquam reprehenderit odit dolores quas!</p>
                    </div> <!-- .services__item -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="services__item">
                        <h2 class="services_item__title">Restaurant</h2>
                        <div class="services_item__divider">
                            <i class="icon ion-android-star"></i>
                            <i class="icon ion-android-star"></i>
                            <i class="icon ion-android-star"></i>
                        </div> <!-- .services_item__divider -->
                        <p class="services_item__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non nesciunt ullam porro ipsa, architecto, doloribus illo veritatis consequatur temporibus eveniet labore, vitae laudantium possimus placeat libero magnam.</p>
                    </div> <!-- .services__item -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="services__item">
                        <h2 class="services_item__title">Spa center</h2>
                        <div class="services_item__divider">
                            <i class="icon ion-android-star"></i>
                            <i class="icon ion-android-star"></i>
                            <i class="icon ion-android-star"></i>
                        </div> <!-- .services_item__divider -->
                        <p class="services_item__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed animi voluptates, laudantium aspernatur, libero nulla ut. Quibusdam distinctio eaque cum officia expedita dolore, perspiciatis quisquam vel et neque tempora cupiditate.</p>
                    </div> <!-- .services__item -->
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section> <!-- / .section__services -->

    <!-- section gallery -->
    <section class="section__gallery">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section__title">Our <strong>Gallery</strong></h2>
                    <div class="divider">
                        <hr class="line1">
                        <hr class="line2">
                        <hr class="line1">
                    </div> <!-- / .divider -->
                    <p class="section__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sit dicta quae natus quasi ratione quis id, tenetur atque blanditiis aperiam mollitia enim corporis ex praesentium reprehenderit.</p>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div id="gallery__carousel" class="owl-carousel owl-theme gallery__body">
                        <div class="gallery__item">
                            <a href="assets/img/gallery_img1.jpg" data-lightbox="gallery" data-title="Your caption">
                                <img src="{{ asset('assets/img/gallery_img1.jpg') }}" class="img-responsive" alt="...">
                            </a>
                        </div> <!-- .gallery__item -->
                        <div class="gallery__item">
                            <a href="assets/img/gallery_img2.jpg" data-lightbox="gallery" data-title="Your caption">
                                <img src="{{ asset('assets/img/gallery_img2.jpg') }}" class="img-responsive" alt="...">
                            </a>
                        </div> <!-- .gallery__item -->
                        <div class="gallery__item">
                            <a href="assets/img/gallery_img3.jpg" data-lightbox="gallery" data-title="Your caption">
                                <img src="{{ asset('assets/img/gallery_img3.jpg') }}" class="img-responsive" alt="...">
                            </a>
                        </div> <!-- .gallery__item -->
                        <div class="gallery__item">
                            <a href="assets/img/gallery_img4.jpg" data-lightbox="gallery" data-title="Your caption">
                                <img src="{{ asset('assets/img/gallery_img4.jpg') }}" class="img-responsive" alt="...">
                            </a>
                        </div> <!-- .gallery__item -->
                        <div class="gallery__item">
                            <a href="assets/img/gallery_img5.jpg" data-lightbox="gallery" data-title="Your caption">
                                <img src="{{ asset('assets/img/gallery_img5.jpg') }}" class="img-responsive" alt="...">
                            </a>
                        </div> <!-- .gallery__item -->
                        <div class="gallery__item">
                            <a href="assets/img/gallery_img6.jpg" data-lightbox="gallery" data-title="Your caption">
                                <img src="{{ asset('assets/img/gallery_img6.jpg') }}" class="img-responsive" alt="...">
                            </a>
                        </div> <!-- .gallery__item -->
                        <div class="gallery__item">
                            <a href="assets/img/gallery_img7.jpg" data-lightbox="gallery" data-title="Your caption">
                                <img src="{{ asset('assets/img/gallery_img7.jpg') }}" class="img-responsive" alt="...">
                            </a>
                        </div> <!-- .gallery__item -->
                        <div class="gallery__item">
                            <a href="assets/img/gallery_img8.jpg" data-lightbox="gallery" data-title="Your caption">
                                <img src="{{ asset('assets/img/gallery_img8.jpg') }}" class="img-responsive" alt="...">
                            </a>
                        </div> <!-- .gallery__item -->
                        <div class="gallery__item">
                            <a href="assets/img/gallery_img9.jpg" data-lightbox="gallery" data-title="Your caption">
                                <img src="{{ asset('assets/img/gallery_img9.jpg') }}" class="img-responsive" alt="...">
                            </a>
                        </div> <!-- .gallery__item -->
                        <div class="gallery__item">
                            <a href="assets/img/gallery_img10.jpg" data-lightbox="gallery" data-title="Your caption">
                                <img src="{{ asset('assets/img/gallery_img10.jpg') }}" class="img-responsive" alt="...">
                            </a>
                        </div> <!-- .gallery__item -->
                        <div class="gallery__item">
                            <a href="assets/img/gallery_img11.jpg" data-lightbox="gallery" data-title="Your caption">
                                <img src="{{ asset('assets/img/gallery_img11.jpg') }}" class="img-responsive" alt="...">
                            </a>
                        </div> <!-- .gallery__item -->
                        <div class="gallery__item">
                            <a href="assets/img/gallery_img12.jpg" data-lightbox="gallery" data-title="Your caption">
                                <img src="{{ asset('assets/img/gallery_img12.jpg') }}" class="img-responsive" alt="...">
                            </a>
                        </div> <!-- .gallery__item -->
                    </div> <!-- .gallery__body -->
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section> <!-- / .section__gallery -->

    <!-- section testimonials -->
    <section class="section__testimonials">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section__title"><strong>Testimonials</strong></h2>
                    <div class="divider">
                        <hr class="line1">
                        <hr class="line2">
                        <hr class="line1">
                    </div> <!-- / .divider -->
                    <p class="section__subtitle testimonials__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sit dicta quae natus quasi ratione quis id, tenetur atque blanditiis aperiam.</p>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div id="testimonials__carousel" class="owl-carousel owl-theme testimonials__body">
                        <div class="testimonials__wrapper">
                            <div class="testimonials__item">
                                <div class="testimonials__img">
                                    <img src="{{ asset('assets/img/testimonials_img1.jpg') }}" class="img-responsive" alt="...">
                                </div>
                                <div class="testimonials__caption">
                                    <h3 class="testimonials_caption__name">John Doe</h3>
                                    <p class="testimonials_caption__prof">Photographer</p>
                                    <p class="testimonials_caption__text">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me.</p>
                                </div> <!-- .testimonials__caption -->
                            </div> <!-- .testimonials__item -->
                        </div><!-- .testimonials__wrapper -->
                        <div class="testimonials__wrapper">
                            <div class="testimonials__item">
                                <div class="testimonials__img">
                                    <img src="{{ asset('assets/img/testimonials_img2.jpg') }}" class="img-responsive" alt="...">
                                </div>
                                <div class="testimonials__caption">
                                    <h3 class="testimonials_caption__name">Maria Atkinson</h3>
                                    <p class="testimonials_caption__prof">Writer</p>
                                    <p class="testimonials_caption__text">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me.</p>
                                </div> <!-- .testimonials__caption -->
                            </div> <!-- .testimonials__item -->
                        </div><!-- .testimonials__wrapper -->
                        <div class="testimonials__wrapper">
                            <div class="testimonials__item">
                                <div class="testimonials__img">
                                    <img src="{{ asset('assets/img/testimonials_img3.jpg') }}" class="img-responsive" alt="...">
                                </div>
                                <div class="testimonials__caption">
                                    <h3 class="testimonials_caption__name">Brad Pitt</h3>
                                    <p class="testimonials_caption__prof">Actor</p>
                                    <p class="testimonials_caption__text">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me.</p>
                                </div> <!-- .testimonials__caption -->
                            </div> <!-- .testimonials__item -->
                        </div><!-- .testimonials__wrapper -->
                        <div class="testimonials__wrapper">
                            <div class="testimonials__item">
                                <div class="testimonials__img">
                                    <img src="{{ asset('assets/img/testimonials_img4.jpg') }}" class="img-responsive" alt="...">
                                </div>
                                <div class="testimonials__caption">
                                    <h3 class="testimonials_caption__name">Jessica Doe</h3>
                                    <p class="testimonials_caption__prof">Singer</p>
                                    <p class="testimonials_caption__text">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me.</p>
                                </div> <!-- .testimonials__caption -->
                            </div> <!-- .testimonials__item -->
                        </div><!-- .testimonials__wrapper -->
                        <div class="testimonials__wrapper">
                            <div class="testimonials__item">
                                <div class="testimonials__img">
                                    <img src="{{ asset('assets/img/testimonials_img1.jpg') }}" class="img-responsive" alt="...">
                                </div>
                                <div class="testimonials__caption">
                                    <h3 class="testimonials_caption__name">Robert Jones</h3>
                                    <p class="testimonials_caption__prof">Art Director</p>
                                    <p class="testimonials_caption__text">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me.</p>
                                </div> <!-- .testimonials__caption -->
                            </div> <!-- .testimonials__item -->
                        </div><!-- .testimonials__wrapper -->
                        <div class="testimonials__wrapper">
                            <div class="testimonials__item">
                                <div class="testimonials__img">
                                    <img src="{{ asset('assets/img/testimonials_img4.jpg') }}" class="img-responsive" alt="...">
                                </div>
                                <div class="testimonials__caption">
                                    <h3 class="testimonials_caption__name">Melissa Portland</h3>
                                    <p class="testimonials_caption__prof">Designer</p>
                                    <p class="testimonials_caption__text">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me.</p>
                                </div> <!-- .testimonials__caption -->
                            </div> <!-- .testimonials__item -->
                        </div><!-- .testimonials__wrapper -->
                    </div> <!-- .testimonials__body -->
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section> <!-- / .section__testimonials -->

    <!-- section Events -->
    <section class="section__events">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section__title">Our news <strong>& events</strong></h2>
                    <div class="divider">
                        <hr class="line1">
                        <hr class="line2">
                        <hr class="line1">
                    </div> <!-- / .divider -->
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 hidden-xs col-sm-6 col-md-6 col-lg-3 col-lg-push-9">
                    <div class="news__title">
                        <div>News</div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-lg-pull-3">
                    <div class="events__item">
                        <div class="events-item__img">
                            <img src="{{ asset('assets/img/events_img1.jpg') }}" class="img-responsive" alt="...">
                        </div>
                        <div class="events-item__body">
                            <div class="events-item__header">
                                <div class="events-item__date">
                                    <p class="item_date__nbr">15</p>
                                    <p class="item_date__mounth">March</p>
                                </div> <!-- .events-item__date -->
                                <div class="events-item__content">
                                    <div class="events-item__title">
                                        <h3>News post title</h3>
                                    </div>
                                    <div class="events-item__info">
                                        <ul class="item-info__list">
                                            <li class="info-list__item"><i class="ion ion-android-person"></i> by John Doe</li>
                                            <li class="info-list__item"><i class="ion ion-android-chat" aria-hidden="true"></i> 5 Comments</li>
                                        </ul> <!-- .item-info__list -->
                                    </div> <!-- .events-item__info -->
                                </div> <!-- .events-item__content -->
                            </div> <!-- .events-item__header -->
                            <div class="events-item__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
                            </div> <!-- .events-item__text -->
                            <div class="events-item__link">
                                <a href="blog-item.html">Read More ➔</a>
                            </div> <!-- .events-item__link -->
                        </div> <!-- / .events-item__body -->
                    </div> <!-- .events__item -->
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-lg-pull-3">
                    <div class="events__item">
                        <div class="events-item__img">
                            <img src="{{ asset('assets/img/events_img2.jpg') }}" class="img-responsive" alt="...">
                        </div>
                        <div class="events-item__body">
                            <div class="events-item__header">
                                <div class="events-item__date">
                                    <p class="item_date__nbr">18</p>
                                    <p class="item_date__mounth">March</p>
                                </div> <!-- .events-item__date -->
                                <div class="events-item__content">
                                    <div class="events-item__title">
                                        <h3>News post title</h3>
                                    </div>
                                    <div class="events-item__info">
                                        <ul class="item-info__list">
                                            <li class="info-list__item"><i class="ion ion-android-person"></i> by John Doe</li>
                                            <li class="info-list__item"><i class="ion ion-android-chat" aria-hidden="true"></i> 7 Comments</li>
                                        </ul> <!-- .item-info__list -->
                                    </div> <!-- .events-item__info -->
                                </div> <!-- .events-item__content -->
                            </div> <!-- .events-item__header -->
                            <div class="events-item__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
                            </div> <!-- .events-item__text -->
                            <div class="events-item__link">
                                <a href="blog-item.html">Read More ➔</a>
                            </div> <!-- .events-item__link -->
                        </div> <!-- / .events-item__body -->
                    </div> <!-- .events__item -->
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-lg-pull-3">
                    <div class="events__item">
                        <div class="events-item__img">
                            <img src="{{ asset('assets/img/events_img3.jpg') }}" class="img-responsive" alt="...">
                        </div>
                        <div class="events-item__body">
                            <div class="events-item__header">
                                <div class="events-item__date">
                                    <p class="item_date__nbr">21</p>
                                    <p class="item_date__mounth">March</p>
                                </div> <!-- .events-item__date -->
                                <div class="events-item__content">
                                    <div class="events-item__title">
                                        <h3>News post title</h3>
                                    </div>
                                    <div class="events-item__info">
                                        <ul class="item-info__list">
                                            <li class="info-list__item"><i class="ion ion-android-person"></i> by John Doe</li>
                                            <li class="info-list__item"><i class="ion ion-android-chat" aria-hidden="true"></i> 9 Comments</li>
                                        </ul> <!-- .item-info__list -->
                                    </div> <!-- .events-item__info -->
                                </div> <!-- .events-item__content -->
                            </div> <!-- .events-item__header -->
                            <div class="events-item__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
                            </div> <!-- .events-item__text -->
                            <div class="events-item__link">
                                <a href="blog-item.html">Read More ➔</a>
                            </div> <!-- .events-item__link -->
                        </div> <!-- / .events-item__body -->
                    </div> <!-- .events__item -->
                </div>
            </div> <!-- / .row -->
            <div class="row">
                <div class="col-xs-12 hidden-xs col-sm-6 col-md-6 col-lg-3">
                    <div class="events__title">
                        <div>Events</div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="events__item ">
                        <div class="events-item__img">
                            <img src="{{ asset('assets/img/events_img4.jpg') }}" class="img-responsive" alt="...">
                        </div>
                        <div class="events-item__body">
                            <div class="events-item__header">
                                <div class="events-item__date">
                                    <p class="item_date__nbr">11</p>
                                    <p class="item_date__mounth">April</p>
                                </div> <!-- .events-item__date -->
                                <div class="events-item__content">
                                    <div class="events-item__title">
                                        <h3>Event post title</h3>
                                    </div>
                                    <div class="events-item__info">
                                        <ul class="item-info__list">
                                            <li class="info-list__item"><i class="ion ion-android-person"></i> by John Doe</li>
                                            <li class="info-list__item"><i class="ion ion-android-chat" aria-hidden="true"></i> 2 Comments</li>
                                        </ul> <!-- .item-info__list -->
                                    </div> <!-- .events-item__info -->
                                </div> <!-- .events-item__content -->
                            </div> <!-- .events-item__header -->
                            <div class="events-item__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
                            </div> <!-- .events-item__text -->
                            <div class="events-item__link">
                                <a href="blog-item.html">Read More ➔</a>
                            </div> <!-- .events-item__link -->
                        </div> <!-- / .events-item__body -->
                    </div> <!-- .events__item -->
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="events__item">
                        <div class="events-item__img">
                            <img src="{{ asset('assets/img/events_img5.jpg') }}" class="img-responsive" alt="...">
                        </div>
                        <div class="events-item__body">
                            <div class="events-item__header">
                                <div class="events-item__date">
                                    <p class="item_date__nbr">14</p>
                                    <p class="item_date__mounth">April</p>
                                </div> <!-- .events-item__date -->
                                <div class="events-item__content">
                                    <div class="events-item__title">
                                        <h3>Event post title</h3>
                                    </div>
                                    <div class="events-item__info">
                                        <ul class="item-info__list">
                                            <li class="info-list__item"><i class="ion ion-android-person"></i> by John Doe</li>
                                            <li class="info-list__item"><i class="ion ion-android-chat" aria-hidden="true"></i> 11 Comments</li>
                                        </ul> <!-- .item-info__list -->
                                    </div> <!-- .events-item__info -->
                                </div> <!-- .events-item__content -->
                            </div> <!-- .events-item__header -->
                            <div class="events-item__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
                            </div> <!-- .events-item__text -->
                            <div class="events-item__link">
                                <a href="blog-item.html">Read More ➔</a>
                            </div> <!-- .events-item__link -->
                        </div> <!-- / .events-item__body -->
                    </div> <!-- .events__item -->
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="events__item">
                        <div class="events-item__img">
                            <img src="{{ asset('assets/img/events_img6.jpg') }}" class="img-responsive" alt="...">
                        </div>
                        <div class="events-item__body">
                            <div class="events-item__header">
                                <div class="events-item__date">
                                    <p class="item_date__nbr">16</p>
                                    <p class="item_date__mounth">April</p>
                                </div> <!-- .events-item__date -->
                                <div class="events-item__content">
                                    <div class="events-item__title">
                                        <h3>Event post title</h3>
                                    </div>
                                    <div class="events-item__info">
                                        <ul class="item-info__list">
                                            <li class="info-list__item"><i class="ion ion-android-person"></i> by John Doe</li>
                                            <li class="info-list__item"><i class="ion ion-android-chat" aria-hidden="true"></i> 8 Comments</li>
                                        </ul> <!-- .item-info__list -->
                                    </div> <!-- .events-item__info -->
                                </div> <!-- .events-item__content -->
                            </div> <!-- .events-item__header -->
                            <div class="events-item__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
                            </div> <!-- .events-item__text -->
                            <div class="events-item__link">
                                <a href="blog-item.html">Read More ➔</a>
                            </div> <!-- .events-item__link -->
                        </div> <!-- / .events-item__body -->
                    </div> <!-- .events__item -->
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section> <!-- / .section__events -->

    <!-- section Contacts -->
    <section class="section__contacts">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section__title"><strong>Contact</strong> us</h2>
                    <div class="divider">
                        <hr class="line1">
                        <hr class="line2">
                        <hr class="line1">
                    </div> <!-- / .divider -->
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
        <div class="section_row">
            <div id="map"></div>
        </div> <!-- / .section_row -->
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="contacts__info">
                        <p class="contacts_info__title">Information</p>
                        <ul class="contacts_info__content">
                            <li>
                                <i class="icon ion-android-pin"></i>
                                <div class="contact-info-content">
                                    <div class="title">Address</div>
                                    <div class="description">10987 1st Avenue, Lorem City, CA</div>
                                </div>
                            </li>
                            <li>
                                <i class="icon ion-android-call"></i>
                                <div class="contact-info-content">
                                    <div class="title">Phone / Fax</div>
                                    <div class="description">+45 789 123 4544 / +45 789 123 4848</div>
                                </div>
                            </li>
                            <li>
                                <i class="icon ion-android-mail"></i>
                                <div class="contact-info-content">
                                    <div class="title">E-mail</div>
                                    <div class="description">admin@sunsethotel.com</div>
                                </div>
                            </li>
                        </ul> <!-- .contacts_info__content -->
                    </div> <!-- / .contacts__info -->
                    <p class="subheading">If you have any questions don't hesistate to contact us.</p>
                </div>
                <div class="col-sm-7">
                    <div class="section-contacts__form_body">

                        <p class="section-contacts__title">Get in touch</p>

                        <!-- Please carefully read the README file in order to setup the PHP contact form properly -->

                        <!-- Alert message -->
                        <div class="alert" id="form_message" role="alert"></div>

                        <!-- Form -->
                        <form id="form_sendemail" class="contacts__form">

                            <!-- Email -->
                            <div class="form-group">
                                <label for="email" class="sr-only">Email address</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email address">
                                <span class="help-block"></span>
                            </div>

                            <!-- Name -->
                            <div class="form-group">
                                <label for="name" class="sr-only">Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
                                <span class="help-block"></span>
                            </div>

                            <!-- Message -->
                            <div class="form-group">
                                <label for="message" class="sr-only">Message</label>
                                <textarea name="message" class="form-control" id="message" rows="6" placeholder="Enter your message"></textarea>
                                <span class="help-block"></span>
                            </div>

                            <!-- Note -->
                            <div class="form-group">
                                <small class="text-muted">
                                    * All fields are mandatory.
                                </small>
                            </div>

                            <!-- Submit -->
                            <button type="submit" class="btn btn-default">
                                Send Message
                            </button>

                        </form> <!-- .contacts__form -->
                    </div> <!-- / .secction-contacts__form_body -->
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section> <!-- / .section__contacts -->

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
