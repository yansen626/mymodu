<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0" name="viewport">

    <!-- Open Graph -->
    <meta property="og:title" content="Modu System Indonesia" />
    <meta property="og:url" content="http://dev.thememountain.com/faulkner/project-style-one.html" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://dev.thememountain.com/faulkner/images/portfolio/projects/project-1-1.jpg" />
    <meta property="og:description" content="Your Page Description Here" />

    <!-- Twitter Theme -->
    <meta name="twitter:widgets:theme" content="light">

    <!-- Title &amp; Favicon -->
    <title>Modu System Indonesia</title>
    <link rel="shortcut icon" type="image/x-icon"  href="{{ URL::asset('images/favicon.ico') }}" type="image/x-icon">

    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700%7CLato:300,400,700' rel='stylesheet' type='text/css'>

    <!-- Css -->
    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/core.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/skin.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body class="shop home-page">

    <!-- HEADER -->
    @include('frontend.partials._sidebar')
    <!-- //HEADER -->

    <div class="wrapper">
        <div class="wrapper-inner">
            <!-- HEADER -->
            @include('frontend.partials._header')
            <!-- //HEADER -->

            @yield('body-content')

            <!-- FOOTER -->
            @include('frontend.partials._footer')
            <!-- //FOOTER -->
        </div>
    </div>


    <script src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3JCAhNj6tVAO_LSb8M-AzMlidiT-RPAs"></script>
    <script src="{{ URL::asset('js/timber.master.min.js') }}"></script>

    <script src="{{ URL::asset('js/custom.js') }}"></script>

</body>
</html>