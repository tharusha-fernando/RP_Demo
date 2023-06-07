<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @media screen and (min-width: 3000px) {
            .responsive {
                grid-template-columns: repeat(5, 1fr);
            }
        }

        @media screen and (max-width: 2999px) and (min-width: 1024px) {
            .responsive {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media screen and (max-width: 1023px) and (min-width: 464px) {
            .responsive {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media screen and (max-width: 463px) {
            .responsive {
                grid-template-columns: repeat(1, 1fr);
            }
        }

        .header {
            font-size: 62.5%;
        }

        .mt-3 {
            margin-top: 3rem;
        }
    </style>
    <style>

    </style>


    <title>@yield('title', config('app.name'))</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @livewireStyles
    <!-- Scripts -->


    <!-- Styles -->

</head>

<body class="font-sans antialiased">


    <header class="header">
        <div class="header-1">
            <!--a href="#" class="logo">
                <i class="fas fa-book"> Reading Panel</i></a-->

            <img src="{{ asset('userUi/logo.jpg') }}" alt="" />

            <div class="icons">
                <!--div id="search-btn" class="fas fa-search"></div>

                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-shopping-cart"></a-->
                <a href="{{ route('profile.show') }}" class="fas fa-user"></a>

            </div>
        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="/">Home</a>
                <a href="/featured">Featured</a>
                <a href="/favorites">Favorites</a>
                <a href="/reviews">Reviews</a>
                <a href="">Contacts</a>
            </nav>
        </div>
    </header>

    <!-- bottom nav bar -->

    <nav class="bottom-navbar">
        <a href="/">
            <i class="fas fa-home"></i>
        </a>
        <a href="/featured">
            <i class="fas fa-star"></i>
        </a>
        <a href="/favorites">
            <i class="fas fa-heart"></i>
        </a>
        <a href="/reviews">
            <i class="fas fa-comment"></i>
        </a>
        <a href="">
            <i class="fas fa-envelope"></i>
        </a>
    </nav>
    <!-- bottom nav bar end -->

    <!-- home section start -->





    <AppFooter />




    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    <!--script src="{{ asset('css/owl.theme.default.min.css') }}"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>

    @livewireScripts
</body>

</html>