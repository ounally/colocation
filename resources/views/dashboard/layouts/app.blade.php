<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="fr"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="fr"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="{{asset('img/favicon-70x70.png')}}" sizes="70x70">
    <link rel="icon" type="image/png" href="{{asset('img/favicon-70x70.png')}}" sizes="70x70">
    
    <!-- uikit -->
    <link rel="stylesheet" href="{{asset('bower_components/uikit/css/uikit.almost-flat.min.css')}}" media="all">
    <!-- altair admin -->
    <link rel="stylesheet" href="{{asset('assets/css/main.min.css')}}" media="all">
    
    
    <title>{{ config('app.name', 'Covoiturage') }} @yield('title')</title>
    
    @yield('css')

    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.js')}}"></script>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.addListener.js')}}"></script>
    <![endif]-->

</head>
<body class=" sidebar_main_open sidebar_main_swipe">
    
   @include('dashboard/layouts/header.header')
   @include('dashboard/layouts/aside.aside')

   @yield('content')
   
   
    

    @yield('js')

<!-- common functions -->
<script src="{{asset('assets/js/common.min.js')}}"></script>
<!-- uikit functions -->
<script src="{{asset('assets/js/uikit_custom.min.js')}}"></script>
<!-- altair common functions/helpers -->
<script src="{{asset('assets/js/altair_admin_common.min.js')}}"></script>

</body>
</html>