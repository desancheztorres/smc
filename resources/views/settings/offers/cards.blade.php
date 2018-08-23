@extends('settings.layouts.app')

@section('title', 'Card')

@section('css')
    <style>
        .navbar {
            border-radius: 0;
            transition: all 0.3s ease-out;
        }

        .affix {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030;
        }

        /* fixed to top styles */
        .affix.navbar {
            background-color: #333;
        }
        .affix.navbar .nav-item>a,
        .affix.navbar .navbar-brand {
            color: #fff;
        }
        .container-fluid {
            padding-right: 0px;
            padding-left: 0px;
        }

    </style>
@endsection

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

            <p>These cards have low interest offers for purchases, many as low as 0%. This means you can buy expensive items up front and spread the cost of your purchases over time.Bear in mind that once the offer period is over, a higher interest rate will be applicable, so it's best to pay off your balance before the offer ends.</p><hr>
            <div class="col-md-12">
                <form id="RegistrationForm2" data-toggle="validator" action="{{url('cardIndex')}}">
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

                    <p><strong>Monthly Expenses *</strong></p>
                    <div class="form-group">
                        <input type="text" class="form-control-input" id="phone" placeholder="£1,210" >
                        <div class="help-block with-errors"></div>
                    </div>

                    <p><strong>Annual Income *</strong></p>
                    <div class="form-group">
                        <input type="email" class="form-control-input" id="email" placeholder="£60,000" >
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