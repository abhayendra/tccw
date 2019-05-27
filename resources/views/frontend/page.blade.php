@extends('frontend.layout.app')
@section('content')
<!-- section header -->
<section class="section__header" id="section__header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="welcome__content">
                    <h2 class="welcome_content__title">{!! $pageData->title !!}</h2>
                    <!-- Breadcrumbs -->
                    <ol class="breadcrumb">
                        <li><a href="{!! url('/') !!}">Home</a></li>
                        <li class="active">About us</li>
                    </ol>
                    <!--<p class="welcome_content__desc">Let’s make it reign!</p>-->
                </div> <!-- .welcome__content -->
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
    <div class="home__bg about__bg"></div>
</section> <!-- / .section__header -->

<!-- section about-alt -->
{!! $pageData->content !!}

@endsection
