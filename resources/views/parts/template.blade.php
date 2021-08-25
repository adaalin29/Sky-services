<!DOCTYPE html>
<html>

<head>
    <base href="{{ URL::to('/') }}" />
    <title>{{settings('site.meta')}}</title>
    <meta charset="utf-8" />
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- responsive use only -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link rel="stylesheet" href="./css/style1.css" />
    <link rel="stylesheet" href="./css/responsive.css" />
    <link rel="stylesheet" href="./css/aos.css" />
    <link rel="stylesheet" href="./css/fancybox.min.css" />
    @stack('styles')
</head>

<body>

    <div @if(Request::path() =='/') id="index" @elseif(Request::path() =='about') id = "despre_noi" @elseif(Request::path() =='flights') id = "zboruri" @elseif(Request::path() =='fleet') id = "flota" @elseif(Request::path() =='contact') id = "contact" @elseif(Request::path() =='booking') id = "booking" @elseif(Request::path() =='tours') id = "tururi" @endif class="container-fluid pad0">
        @include('parts.header')
        <div id="wrapper" class="slide-right">



            <main id="content">
                @yield('content')
            </main>
            @include('parts.footer')
        </div>
    </div>
    <script src="./js/j3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="./js/jQuerry.js"></script>
    <script src="./js/jQuery.print.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js "></script>
    

    <script src="./js/swiper.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/common.js "></script>
    <script src="./js/aos.js "></script>
    <script src="./js/fancybox.min.js"></script>
    @stack('scripts')
</body>

</html>