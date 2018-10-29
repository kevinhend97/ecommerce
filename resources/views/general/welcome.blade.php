<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Kevin Hendrawan Hartono">
    <meta name="description" content="Make ecommerce">
    <title>Online Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('onlineShopTemplate/styles/bootstrap4/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('onlineShopTemplate/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('onlineShopTemplate/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('onlineShopTemplate/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('onlineShopTemplate/plugins/OwlCarousel2-2.2.1/animate.css') }}" />
    @yield('css')
</head>
<body>
    <div class="super_container">
        @include('general.header.header')
        @yield('content')
        @include('general.footer.footer')
    </div>
    <script type="text/javascript" src="{{ asset('onlineShopTemplate/js/jquery-3.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('onlineShopTemplate/styles/bootstrap4/popper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('onlineShopTemplate/styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('onlineShopTemplate/plugins/greensock/TweenMax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('onlineShopTemplate/plugins/greensock/TimelineMax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('onlineShopTemplate/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('onlineShopTemplate/plugins/greensock/animation.gsap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('onlineShopTemplate/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('onlineShopTemplate/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('onlineShopTemplate/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('onlineShopTemplate/plugins/easing/easing.js') }}"></script>
    <script type="text/javascript" src="{{ asset('onlineShopTemplate/plugins/parallax-js-master/parallax.min.js') }}"></script>
    @yield('script')>
</body>
</html>