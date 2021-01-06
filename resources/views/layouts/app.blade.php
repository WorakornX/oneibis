<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('One Tracking') }}</title>

    <link rel="shortcut icon" href="/img/oneibis.png" type="image/x-icon">

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>

    <!-- specify a web app title for the home screen -->
    <meta name="apple-mobile-web-app-title" content="AppTitle">
    <!-- hide iOS components and give the web app a more native feel -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- change the visual appearance of the status bar -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800"/>

    <!--     Theme     -->
    <link rel="stylesheet" href="{{ mix('css/black-dashboard.css') }}">

    @yield('head_script')
    @yield('style')

</head>
<body>
<div id="asset">
    <div id="" :class="{'sidebar-mini':($store.state.forceNavMini || $store.state.navBarMini)}">
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <loading></loading>
            @include('layouts.page_templates.auth')
        @endauth

        @guest()
            @include('layouts.page_templates.guest')
        @endguest
    </div>
</div>
{{--        @include('layouts.settings')--}}

<!--   Core JS Files   -->
{{--<script src="/js/before.js"></script>--}}
@stack('js')
<script src=" {{ mix('/js/after.js') }}"></script>
</body>
</html>
