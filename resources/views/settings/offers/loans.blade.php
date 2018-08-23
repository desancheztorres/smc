@extends('settings.layouts.app')

@section('title', 'Loans')

@section('meta')
    <!-- SEO Meta Tags -->
    <meta name="description" content="SMC Loans">
    <meta name="keywords" content="smc,loans">
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('assets/settings/css/slider.css')}}" type="text/css" />
    <style>
        .slidecontainer {
            width: 100%;
        }

        .slider {
            -webkit-appearance: none;
            width: 100%;
            height: 25px;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
        }

        .slider:hover {
            opacity: 1;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 25px;
            height: 25px;
            background: #4CAF50;
            cursor: pointer;
        }

        .slider::-moz-range-thumb {
            width: 25px;
            height: 25px;
            background: #4CAF50;
            cursor: pointer;
        }
    </style>
@endsection

@section('content')

    @include('settings.layouts.partials._preloader')
    @include('settings.layouts.partials._header')
    <div id="details" class="details">
        <div class="container">

            <p>We compare long term loans online ranging from £100 to £20,000. Using our comparison table you can compare the loans that last a few months compared to the longer-term loans of up to 3 years. To apply, simply click on the lender best suited to your requirements and you will be taken directly to their website where you will be asked to fill in an application.<br><br></p><hr>
            <div class="col-md-2"></div>
            <div class="col-md-8">

                <h4>How much would you like to borrow?</h4>
                <div class="slidecontainer">
                    <input type="range" min="50" max="25000" value="50" class="slider" id="myRange">
                    <h4 align='right'>£<span id="demo"></span></h4>
                </div>
                <h4>Loan duration?</h4>
                <div class="slidecontainer">
                    <input type="range" min="1" max="60" value="1" class="slider" id="myRange2">
                    <h4 align='right'><span id="demo2"></span> months</h4>
                </div>

                <script>
                    var slider = document.getElementById("myRange");
                    var output = document.getElementById("demo");
                    output.innerHTML = slider.value;

                    slider.oninput = function() {
                        output.innerHTML = this.value;
                    }
                </script>

                <script>
                    var slider2 = document.getElementById("myRange2");
                    var output2 = document.getElementById("demo2");
                    output2.innerHTML = slider2.value;

                    slider2.oninput = function() {
                        output2.innerHTML = this.value;
                    }
                </script>
            </div>
            <div class="col-md-2"></div>	<div class="col-md-12">

                <a href="{{url('loanIndex')}}"><button type="submit" class="form-control-submit-button">FIND ME A LOAN</button></a>
                <hr>
            </div> <!-- end of col-md-6 --><div class="col-md-12"><p><br><br>It is important to compare the different rates and terms of the lenders we feature. All loans are displayed with their Representative APR which is the Annual Percentage Rate offered to at least 51% of successful customers. Using the repayment example provided for each lender will give you a good idea of how much you are expected to repay. The amount you can borrow will depend largely on your monthly income and previous credit history and the longer the loan period, the more you can borrow too.</p>

            </div> <!-- end of container -->
        </div> <!-- end of details -->

    </div>
@endsection

@section('js')
    <script>
        $("#slideshow > div:gt(0)").hide();

        setInterval(function() {
            $('#slideshow > div:first')
                .fadeOut(1000)
                .next()
                .fadeIn(1000)
                .end()
                .appendTo('#slideshow');
        },  6000);
    </script>
@endsection