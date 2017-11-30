<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ config('app.name') }} @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/media.css')}}">
    <!-- Theme Styles -->
    <link rel="stylesheet" href="{{asset('temp/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('temp/css/font-awesome.min.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('temp/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('temp/components/owl-carousel/owl.carousel.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('temp/components/owl-carousel/owl.transitions.css')}}" media="screen" />
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="{{asset('temp/components/magnific-popup/magnific-popup.css')}}"> 

    <link rel="stylesheet" type="text/css" href="{{asset('temp/components/revolution_slider/css/settings.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('temp/components/revolution_slider/css/style.css')}}" media="screen" />
    
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="{{asset('temp/css/style-blue.css')}}">
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{asset('temp/css/custom.css')}}">

    <!-- Updated Styles -->
    <link rel="stylesheet" href="{{asset('temp/css/updates.css')}}">
    
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="{{asset('temp/css/responsive.css')}}">
    
    <!-- CSS for IE -->
    <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="{{asset('temp/css/ie.css')}}" />
    <![endif]-->
    
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
         
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    @yield('css')
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script> 
</head>
<body id="main_body">
    <div id="page-wrapper">
        @include('front_office/layouts.header')
        @if(Route::current()->getname() != 'home')
        <div id="content_tk" class="bg_gris">
        @else
        <div id="content_tk">
        @endif
        @yield('content')
        </div>
        @include('front_office/layouts.footer')
    </div> 
         <!-- Javascript -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>  
    <script type="text/javascript" src="{{asset('temp/js/jquery-2.1.3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('temp/js/jquery.noconflict.js')}}"></script>
    <script type="text/javascript" src="{{asset('temp/js/modernizr.2.8.3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('temp/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('temp/js/jquery-ui.1.11.2.min.js')}}"></script>
    
    <!-- Twitter Bootstrap -->
    <script type="text/javascript" src="{{asset('temp/js/bootstrap.min.js')}}"></script>

    <!-- Magnific Popup core JS file -->
    <script type="text/javascript" src="{{asset('temp/components/magnific-popup/jquery.magnific-popup.min.js')}}"></script> 
    
    <!-- parallax -->
    <script type="text/javascript" src="{{asset('temp/js/jquery.stellar.min.js')}}"></script>
    
    <!-- waypoint -->
    <script type="text/javascript" src="{{asset('temp/js/waypoints.min.js')}}"></script>

    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{asset('temp/components/owl-carousel/owl.carousel.min.js')}}"></script>

    <!-- load revolution slider scripts -->
    <script type="text/javascript" src="{{asset('temp/components/revolution_slider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('temp/components/revolution_slider/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- plugins -->
    <script type="text/javascript" src="{{asset('temp/js/jquery.plugins.js')}}"></script>

    <!-- load page Javascript -->
    <script type="text/javascript" src="{{asset('temp/js/main.js')}}"></script>

    <script type="text/javascript" src="{{asset('temp/js/revolution-slider.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initAutocomplete&output=json&key=AIzaSyB_SWTyYPoPqP8oQdRROF_rOr0OWvxSXkA" async defer></script>
    @yield('js')
    </div>
</body>
</html>