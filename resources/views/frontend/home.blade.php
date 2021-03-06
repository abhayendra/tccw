@extends('frontend.layout.app')
@section('content')
<!-- section about -->
<section class="section__about" id="section__about">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="section__title">Once you become fearless, <strong> life becomes limitless. </strong></h2>
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
                        <img src="{{ asset('assets/img/lisa.png') }}" class="img-responsive" alt="...">
                    </div> <!-- / .about__pic -->
                </div>
                <div class="col-md-6">
                    <div class="about__desc">
                        <p class="about_desc__subtitle">About us</p>
                        <h3 class="about_desc__title">I'm Lisa!</h3>
                        <p class="about_desc__desc">Whatever your situation may be, investing in myself is the best thing I’ve done and the best thing that you can do for yourself. Having my own business has only been able to help me grow and develop and create relationships in a more meaningful way. I created The Confidence Crown to share my tips and tricks to getting into the business I’m in today! And I’m ready to teach you just how to do so.</p>
                        <h3 class="about_desc__title">Are you ready for your crown?</h3>
                        <h4 class="about_desc__quote">Keep scrolling down and be a part of the Confidence Crown community!</h4>
                        <a href="{!! url("/") !!}" class="btn btn-default">Learn More</a>
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
                <h2 class="section__title">Be  <strong> #StrongHER </strong></h2>
                <div class="divider">
                    <hr class="line1">
                    <hr class="line2">
                    <hr class="line1">
                </div> <!-- / .divider -->
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
    <div class="container">
        <div class="best-rooms__content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="">
                        <img src="{{ asset('assets/img/book_square.png') }}" class="img-responsive" alt="...">
                    </div>
                </div>
                <div class="col-sm-6" style="text-align:center; ">
                    <h4 class="about_desc__quote" style="font-size:70px; padding-top:30%; ">Be <br/> #StrongHER</h4>
                    <a href="{!! url("/") !!}" class="btn btn-default">Buy my new book now </a>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .best-rooms__content -->
    </div> <!-- / .container -->
</section> <!-- / .section__best-rooms -->

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
                <p class="section__subtitle testimonials__subtitle"></p>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div id="testimonials__carousel" class="owl-carousel owl-theme testimonials__body">
                    @foreach($testimonial as $t)
                    <div class="testimonials__wrapper">
                        <div class="testimonials__item">
                            <div class="testimonials__img">
                                <img src="{{ asset($t->image) }}" class="img-responsive" alt="{!! $t->name !!}">
                            </div>
                            <div class="testimonials__caption">
                                <h3 class="testimonials_caption__name">{!! $t->name !!}</h3>
                                <p class="testimonials_caption__prof">{!! $t->designation !!}</p>
                                <p class="testimonials_caption__text">{!! $t->content !!}</p>
                            </div> <!-- .testimonials__caption -->
                        </div> <!-- .testimonials__item -->
                    </div><!-- .testimonials__wrapper -->
                    @endforeach
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
@endsection
