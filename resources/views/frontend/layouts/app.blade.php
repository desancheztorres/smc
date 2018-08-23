<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    @include('frontend.layouts._partials.fonts')

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>

    <!-- Styles -->
    @include('frontend.layouts._partials.styles')
    @yield('css')

</head>
<body class="home page page-parent page-template-default template-slider color-blue layout-full-width menu-clean sticky-header">
<div id="app">
    <div id="Wrapper">
        @include('frontend.layouts._partials.top_bar')
        @include('frontend.layouts._partials.header')

        @yield('content')

        @include('frontend.layouts._partials.footer')

        @include('frontend.layouts._partials.javascripts')
        @yield('js')
    </div>
</div>
</body>
</html>
