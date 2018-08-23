@extends('settings.layouts.app')

@section('title', 'Offers')

@section('meta')
    <!-- SEO Meta Tags -->
    <meta name="description" content="SMC Offers">
    <meta name="keywords" content="smc,offers">
@endsection

@section('content')

    @include('settings.layouts.partials._preloader')
    @include('settings.layouts.partials._header')

    <!-- DETAILS -->
    <div id="details" class="details">
        <div class="container">

            <!-- Tabs -->
            <div class="details-tabs">
                <ul class="nav nav-pills nav-justified">
                    <li class="active"><a href="#tab_a" data-toggle="tab">Personal Loans</a></li>
                    <li><a href="#tab_b" data-toggle="tab">Credit Cards</a></li>
                    <li><a href="#tab_c" data-toggle="tab">Car Finance</a></li>

                </ul>
            </div>

            <!-- Tab Content -->
            <div class="tab-content">
                <!-- Tab_a -->
                <div class="tab-pane tab-a fade in active" id="tab_a">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <img class="img-responsive img-rounded" src="{{ asset('assets/settings/images/loan.png') }}" alt="details image">
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="text-pane">
                                <h3>Compare loan offers</h3>
                                <p>We provide you with a list of offers based on your credit score.</p>
                                <ul class="fa-ul">
                                    <li><i class="fa-li fa fa-check-square-o"></i>Secure & Unsecure Loans</li>
                                    <li><i class="fa-li fa fa-check-square-o"></i>Guarantor Loans</li>
                                    <li><i class="fa-li fa fa-check-square-o"></i>Logbook Loans and more</li>
                                </ul>
                                <a class="button-solid page-scroll" href="{{route('settings.offers.loans')}}">Compare Now</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end of tab_a -->

                <!-- Tab_b -->
                <div class="tab-pane tab-b fade" id="tab_b">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <img class="img-responsive img-rounded" src="{{ asset('assets/settings/images/cc.png') }}" alt="details image">
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="text-pane">
                                <h3>Balance transfer cards</h3>
                                <p>Compare balance transfer credit cards from more than 21 companies to find a 0% interest credit card deal to transfer your existing balance to.</p>
                                <ul class="fa-ul">
                                    <li><i class="fa-li fa fa-check-square-o"></i>0% interest periods on balance transfers</li>
                                    <li><i class="fa-li fa fa-check-square-o"></i>Up to 36 months</li>
                                    <li><i class="fa-li fa fa-check-square-o"></i>No interest on your credit card debts until 2022</li>
                                </ul>
                                <a class="button-solid page-scroll" href="{{route('settings.offers.cards')}}">COMPARE NOW</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end of tab_b -->

                <!-- Tab_c -->
                <div class="tab-pane tab-c fade" id="tab_c">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <img class="img-responsive img-rounded" src="{{ asset('assets/settings/images/car.png') }}" alt="details image">
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="text-pane">
                                <h3>Need a car loan? </h3>
                                <p>Compare car loans to make sure you get the best deal to help you afford your new set of wheels</p>
                                <ul class="fa-ul">
                                    <li><i class="fa-li fa fa-check-square-o"></i>We're fast and easy to use</li>
                                    <li><i class="fa-li fa fa-check-square-o"></i>Between 1 and 25 years.</li>
                                    <li><i class="fa-li fa fa-check-square-o"></i>A low-rate loan is almost always better</li>
                                </ul>
                                <a class="button-solid page-scroll" href="{{route('settings.offers.financial')}}">Compare NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end of tab_c -->
        </div> <!-- end of tab content -->
    </div> <!-- end of container -->
    </div> <!-- end of details -->

@endsection
