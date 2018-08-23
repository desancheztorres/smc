@extends('settings.layouts.app')

@section('title', 'Car Finance')

@section('meta')
    <!-- SEO Meta Tags -->
    <meta name="description" content="Training course HTML landing page template built with Bootstrap featuring countdown timer and 3 registration form versions.">
    <meta name="keywords" content="training, course, online, tutorial, learn, company, instructor, coaching, startup, school, registration, contact form, html template, landing page, bootstrap">
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('assets/settings/css/slider.css')}}" type="text/css" />
@endsection

@section('content')

    @include('settings.layouts.partials._preloader')
    @include('settings.layouts.partials._header')

    <!-- DETAILS -->
    <div id="details" class="details">
        <div class="container">

            <p>Car finance loans often give better rates than your dealership would and can help you spread the cost for less. Compare car finance deals to see if they can offer cheaper borrowing on your new car.</p><hr>
            <div class="col-md-12">
                <form id="RegistrationForm2" data-toggle="validator" action="{{url('carFinanceIndex')}}">
                    <p><strong>First Name *</strong></p>
                    <div class="form-group">
                        <input type="text" class="form-control-input" id="firstname" placeholder="First Name" >
                        <div class="help-block with-errors"></div>
                    </div>

                    <p><strong>Last Name *</strong></p>
                    <div class="form-group">
                        <input type="text" class="form-control-input" id="lastname" placeholder="Last Name" >
                        <div class="help-block with-errors"></div>
                    </div>

                    <p><strong>Finance Amount *</strong></p>
                    <div class="form-group">
                        <input type="text" class="form-control-input" id="phone" placeholder="£10,000" >
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" id="terms" value="Agreed-to-Terms" required>&nbsp; I Agree to the <a class="show-terms popup-with-move-anim" href="#terms-and-conditions">terms and conditions</a>
                        <div class="help-block with-errors"></div>
                    </div>

                    <!-- Magnific Popup Terms And Conditions Content -->
                    <!-- mfp-hide class is required to keep the content hidden until the visitor clicks the button -->


                    <button type="submit" class="form-control-submit-button">COMPARE NOW</button>
                    <div class="form-message">
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                    </div>
                </form>
            </div> <!-- end of col-md-6 -->
        </div> <!-- end of container -->
    </div> <!-- end of details -->

@endsection