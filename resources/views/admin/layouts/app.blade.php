<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Searchmycredit') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('admin.layouts.partials._styles')
    @include('admin.layouts.partials._tiny')
    @yield('css')

</head>
<body>
<div class="page">
    <!-- Main Navbar-->
    @include('admin.layouts.partials._header')
    <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        @include('admin.layouts.partials._sidebar')
        <div class="content-inner">
            <!-- Page Header-->
            @include('admin.layouts.partials._page_header')
            <!-- Flash Messages-->
            @include('admin.layouts.partials._flash_messages')
            <!-- Page Content-->
            @yield('content')
            <!-- Page Footer-->
            @include('admin.layouts.partials._footer')
        </div>
    </div>
</div>

<!-- JavaScript files-->
@include('admin.layouts.partials._javascripts')
@yield('js')
</body>
</html>
