<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Ethio Fashion') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
        <link rel="stylesheet" href="{{ asset('vendors/linericon/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />
        <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('vendors/lightbox/simpleLightbox.css') }}" />
        <link rel="stylesheet" href="{{ asset('vendors/nice-select/css/nice-select.css') }}" />
        <link rel="stylesheet" href="{{ asset('vendors/animate-css/animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('vendors/jquery-ui/jquery-ui.css') }}" />

        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        
        <div class="min-h-screen bg-gray-100">

            <!-- Page Heading -->          

                {{-- Navbar --}}

            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        
                        {{ $header }}

                    </div>
                </header>
            @endisset
            

            <!-- Page Content -->
            <main>

                @yield('content')

            </main>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('js/popper.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/stellar.js') }}"></script>
        <script src="{{ asset('vendors/lightbox/simpleLightbox.min.js') }}"></script>
        <script src="{{ asset('vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('vendors/isotope/isotope-min.js') }}"></script>
        <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('vendors/counter-up/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('vendors/counter-up/jquery.counterup.js') }}"></script>
        <script src="{{ asset('js/mail-script.js') }}"></script>
        <script src="{{ asset('js/theme.js') }}"></script>

    </body>
</html>
