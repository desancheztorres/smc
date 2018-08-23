@extends('settings.layouts.app')

@section('title', 'Report')

@section('meta')
    <!-- SEO Meta Tags -->
    <meta name="description" content="SMC Report">
    <meta name="keywords" content="smc,report">
@endsection

@section('css')
    <style>
        body { color: #fff; }
        #chartdiv {
            width		: 100%;
            height		: 500px;
            font-size	: 11px;
            color: #fff;
        }
    </style>
    <link href="{{'assets/settings/css/report.css'}}" rel="stylesheet">
@endsection

@section('content')

    @include('settings.layouts.partials._preloader')
    @include('settings.layouts.partials._header')

    <!-- DETAILS -->
    <div id="details" class="details">
        <div class="container">
            <div class="row">
                <div class="col-md-12 headerTitle">
                    <h4>Personal Information</h4>
                </div>
            </div>
            <div class="row content">
                <div class="col-md-4 title">Name</div>
                <div class="col-md-4 title">Date Of Birth</div>
                <div class="col-md-4 title">Current Address</div>
            </div>
            <div class="row content">
                <div class="col-md-4 detail">Cristian Sanchez</div>
                <div class="col-md-4 detail">01/06/1990</div>
                <div class="col-md-4 detail"></div>
            </div>
            <div class="row">
                <div class="col-md-12 headerTitle">
                    <h4>Current Score & History</h4>
                </div>
            </div>
            <div class="row content">
                <div class="col-md-4 title">Your score</div>
                <div class="col-md-4 title">Average score in your area</div>
                <div class="col-md-4 title">Average UK score</div>
            </div>
            <div class="row content">
                <div class="col-md-4 detail"></div>
                <div class="col-md-4 detail"></div>
                <div class="col-md-4 detail">380</div>
            </div>
            <div class="row headerTitle">
                <div class="col-md-12"><h4>What Has Changed?</h4></div>
            </div>
            <div class="row content">
                <div class="col-md-12">
                    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
                    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
                    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
                    <div id="chartdiv"></div>
                </div>
            </div>


        </div>
    </div> <!-- end of details -->

@endsection

@section('js')
    <script>
        var chart = AmCharts.makeChart( "chartdiv", {
            "type": "serial",
            "theme": "dark",
            "dataProvider": [ {
                "country": "Jan 2018"
            }, {
                "country": "Feb 2018"
            }, {
                "country": "March 2018"
            }, {
                "country": "April 2018"
            } ],
            "gridAboveGraphs": true,
            "startDuration": 1,
            "graphs": [ {
                "balloonText": "[[category]]: <b>[[value]]</b>",
                "fillAlphas": 0.8,
                "lineAlpha": 0.2,
                "type": "column",
                "valueField": "visits"
            } ],
            "chartCursor": {
                "categoryBalloonEnabled": false,
                "cursorAlpha": 0,
                "zoomable": false
            },
            "categoryField": "country",
            "categoryAxis": {
                "gridPosition": "start",
                "gridAlpha": 0,
                "tickPosition": "start",
                "tickLength": 20
            },
            "export": {
                "enabled": true
            }

        } );
    </script>
@endsection