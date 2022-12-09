@extends('layout')

@section('title', 'Contact Us')

@section('content')
<section class="page_title ds s-parallax s-pb-xl-80  s-pb-lg-100  s-pb-md-90 s-pt-md-190 s-pt-180 s-pb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Contact</h1>
                <div class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li>
                       
                        <li class="breadcrumb-item active">
                            Contact
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ls ms s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 c-mb-30 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="media text-center text-sm-left">
                    <div class="icon-styled fs-60 color-main">
                        <i class="ico ico-location"></i>
                    </div>
                    <div class="media-body">
                        <h6 class="">
                            Our Address
                        </h6>
                        <p class="">{{ config('app.address') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="media text-center text-sm-left">
                    <div class="icon-styled fs-60 color-main">
                        <i class="ico ico-location"></i>
                    </div>
                    <div class="media-body">
                        <h6 class="">
                            Nigeria Address
                        </h6>
                        <p class="">{{ config('app.address2') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="media text-center text-sm-left">
                    <div class="icon-styled fs-60 color-main">
                        <i class="ico ico-call"></i>
                    </div>
                    <div class="media-body">
                        <h6 class="">
                            Our Number
                        </h6>
                        <p class="">{{ config('app.phone') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="media text-center text-sm-left">
                    <div class="icon-styled fs-60 color-main">
                        <i class="ico ico-email"></i>
                    </div>
                    <div class="media-body">
                        <h6 class="">
                            Our Email
                        </h6>
                        <p class=""><a href="mailto:{{ config('app.email') }}" class="__cf_email__" data-cfemail="305e51564451705548515d405c551e535f5d">{{ config('app.email') }}</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="media text-center text-sm-left">
                    <div class="icon-styled fs-60 color-main">
                        <i class="ico ico-pipe"></i>
                    </div>
                    <div class="media-body">
                        <h6 class="">
                            Opening time
                        </h6>
                        <p class="">Mon-Fri: 8am-6pm</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb--40"></div>
    </div>
</section>

<section class="ls s-pt-xl-160 s-pb-xl-280 s-pt-lg-130 s-pb-lg-250 s-py-md-90 s-py-60">
    <div class="container">
        <div class="row ds s-parallax s-overlay s-map-light">


            <div class="col-12 col-xl-8 offset-xl-2 animate" data-animation="scaleAppear">

                <div class=" py-60">

                    <div class="form-wrapper ls rounded">
                        <form method="post" action="contact">
                            <div class="row c-mb-20">
                                <div class="col-12 form-title text-center form-builder-item">
                                    <div class="header title">
                                        <h4>Mail us</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row c-mb-10 c-gutter-10">
                                <div class="col-lg-6">
                                    <div class="form-group has-placeholder">
                                        <label for="name">Full Name <span class="required">*</span></label>
                                        <i class="fas fa-user"></i>
                                        <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group has-placeholder">
                                        <label for="email">Email address<span class="required">*</span></label>
                                        <i class="fas fa-envelope"></i>
                                        <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            @if (Session::has('success'))
                                    <div class="alert alert-success mt-2">{{ Session::get('success') }} 
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <p>{{ $error }}</p>
                                        @endforeach
                                    </div>
                                @endif
                                @honeypot

                                @csrf
                            <div class="row c-mb-10 c-gutter-10">
                                <div class="col-lg-6">
                                    <div class="form-group has-placeholder">
                                        <label for="phone">Phone Number <span class="required">*</span></label>
                                        <i class="fas fa-phone"></i>
                                        <input type="text" aria-required="true" size="30" value="" name="phone" id="name3355553" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group has-placeholder">
                                        <label for="subject">Subject <span class="required">*</span></label>
                                        <i class="fas fa-paperclip"></i>
                                        <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row c-mb-10 c-gutter-10">
                                <div class="col-sm-12">
                                    <div class="form-group has-placeholder">
                                        <label for="message">Message</label>
                                        <i class="fas fa-edit"></i>
                                        <textarea aria-required="true" rows="3" cols="45" name="message" id="message" class="form-control" placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row c-mb-10 c-gutter-10">
                                <div class="col-sm-12 mb-0 mt-50 text-center">
                                    <div class="form-group ">
                                        <input class="btn btn-gradient big-btn" type="submit" value="Send message">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
            <!--.col-* -->


        </div>
    </div>
</section>
@endsection