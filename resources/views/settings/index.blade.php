@extends('settings.layouts.app')

@section('title', 'Dashboard')

@section('meta')
    <!-- SEO Meta Tags -->
    <meta name="description" content="Training course HTML landing page template built with Bootstrap featuring countdown timer and 3 registration form versions.">
    <meta name="keywords" content="training, course, online, tutorial, learn, company, instructor, coaching, startup, school, registration, contact form, html template, landing page, bootstrap">
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('assets/settings/css/slider.css')}}" type="text/css" />
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">--}}
    <link rel="stylesheet" href="{{asset('assets/settings/css/homepage.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/settings/css/text-animation.css')}}" type="text/css" />
    <style>
        h2.panel-title{
            font-size: 17px;
        }
        .panel-body p{
            font-size: 14px;
        }
        #clock{
            font-size: 17px!important;
            text-align: center;
        }
        #slideshow{
            width: 100%!important;
            height: 150px;
            text-align: center;
        }
        h4 small{
            color: #ffffff;
            font-weight: bold;
        }
    </style>
@endsection

@section('content')
    <header id="header" class="header">
        <div class="flex-container-wrapper">
            <div class="header-content video-section">
                <div class="pattern-overlay">
                    <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=_smyOW8JKSw',containment:'.video-section', quality:'highres', autoPlay:true, showControls: false, startAt:0, stopAt: 15, mute:true, opacity: 1}"></a>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Welcome to Search My Credit</h2>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-4 col-md-offset-3">
                                <div class="mainTitle">
                                    <b>
                                        <span1>
                                            Your Score is <br />
                                            <span class="main">Update in 31 days</span> <br />
                                            We provide you <br />
                                            with a list of offers <br />
                                            based on your credit score <br />
                                        </span1>
                                    </b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row buttonsMenu">
                            <div class="col-sm-12 col-md-4 animated bounceInLeft fast">
                                <a href="{{route('settings.offers.loans')}}" class="btn btn-green btn-block">
                                    <img src='http://www.isoagentprogram.com/images/piggy-bank-icon-white.png' />&nbsp;
                                    My Loan Offers
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4 animated bounceInUp fast">
                                <a href="{{route('settings.offers.cards')}}" class="btn btn-green btn-block">
                                    <img src='{{ asset('assets/settings/images/59169-200.png') }}' />&nbsp;
                                    My Credit Cards Deals
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4 animated bounceInRight fast">
                                <a href="{{route('settings.offers.financial')}}" class="btn btn-green btn-block">
                                    <img src='//www.visittoraja.com/wp-content/uploads/2016/02/car-icon.png'  />&nbsp;
                                    My Car Finance
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 animated bounceInUp fast">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Your credit score and report</h3>
                                        <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                                    </div>
                                    <div class="panel-body">
                                        <p>Next Report Update In:</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('js')

@endsection