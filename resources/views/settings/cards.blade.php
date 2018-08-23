@extends('settings.layouts.landpage')

@section('title', 'Cards')

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

        .activeCol{
            background-color: aqua;
        }

    </style>
@endsection


@section('content')

    @include('settings.layouts.partials._header_landpage')
    {{--@include('settings.layouts.partials._menu_cards')--}}

@endsection