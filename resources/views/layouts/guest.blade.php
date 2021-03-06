{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
 --}}


 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body>

    <!-- header -->
    <header class="py-4 shadow-sm bg-pink-100 lg:bg-white">
        <div class="container flex items-center justify-between">
            <!-- logo -->
            <a href="/" class="block w-32">
                <img src="{{asset ('images/logo2.png') }}" alt="logo" class="w-full">
            </a>
            <!-- logo end -->

            <!-- searchbar -->
            <div class="w-full xl:max-w-xl lg:max-w-lg lg:flex relative hidden">
                <span class="absolute left-4 top-3 text-lg text-gray-400">
                    <i class="fas fa-search"></i>
                </span>
                <input type="text"
                    class="pl-12 w-full border border-r-0 border-primary py-3 px-3 rounded-l-md focus:ring-primary focus:border-primary"
                    placeholder="search">
                <button type="submit"
                    class="bg-primary border border-primary text-white px-8 font-medium rounded-r-md hover:bg-transparent hover:text-primary transition">
                    Search
                </button>
            </div>
            <!-- searchbar end -->

            <!-- navicons -->
            <div class="space-x-4 flex items-center">
                <a href="wishlist.html" class="block text-center text-gray-700 hover:text-primary transition relative">
                    <span
                        class="absolute -right-0 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">5</span>
                    <div class="text-2xl">
                        <i class="far fa-heart"></i>
                    </div>
                    <div class="text-xs leading-3">Wish List</div>
                </a>
                <a href="cart.html"
                    class="lg:block text-center text-gray-700 hover:text-primary transition hidden relative">
                    <span
                        class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">3</span>
                    <div class="text-2xl">
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="text-xs leading-3">Cart</div>
                </a>

                @if(Route::has('login'))
                @auth
                @if(Auth::user()->utype==='ADM')
                <div class="flex items-center cursor-pointer group relative ">
                    <ul>
                        <li>
                            <div class="text-2xl text-center">
                                <i class="far fa-user"></i>
                            </div>
                        </li>
                        <li>
                            <div class="text-xs leading-3">Admin <span class="text-xm text-primary text-center"> <i class="fas fa-chevron-down"></i> </span></div>
                            <div
                                class="absolute left-0 top-full w-full  shadow-md py-3 invisible opacity-0 group-hover:opacity-100 group-hover:visible transition duration-300 z-50 divide-y divide-gray-300 divide-dashed">
                                <ul>
                                    <li>
                                        <a href="{{route('admin.dashboard')}}"
                                            class="block  text-red-700 hover:text-primary transition">
                                            <span class="text-xs leading-3"><b>Dasboard</b></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            class="block  text-red-700 hover:text-primary transition">
                                            <span class="text-xs leading-3"><b>Logout</b></span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                @elseif(Auth::user()->utype==='SVP')
                <div class="flex items-center cursor-pointer group relative ">
                    <ul>
                        <li>
                            <div class="text-2xl text-center">
                                <i class="far fa-user"></i>
                            </div>
                        </li>
                        <li>
                            <div class="text-xs leading-3">Provider <span class="text-xm text-primary text-center"> <i class="fas fa-chevron-down"></i> </span></div>
                            <div
                                class="absolute left-0 top-full w-full  shadow-md py-3 invisible opacity-0 group-hover:opacity-100 group-hover:visible transition duration-300 z-50 divide-y divide-gray-300 divide-dashed">
                                <ul>
                                    <li>
                                        <a href="{{route('provider.dashboard')}}"
                                            class="block  text-red-700 hover:text-primary transition">
                                            <span class="text-xs leading-3"><b>Dasboard</b></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('logout')}}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            class="block  text-red-700 hover:text-primary transition">
                                            <span class="text-xs leading-3"><b>Logout</b></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                @else
                <div class="flex items-center cursor-pointer group relative ">
                    <ul>
                        <li>
                            <div class="text-2xl text-center">
                                <i class="far fa-user"></i>
                            </div>
                        </li>
                        <li>
                            <div class="text-xs leading-3">Customer <span class="text-xm text-primary text-center"> <i class="fas fa-chevron-down"></i> </span></div>
                            <div
                                class="absolute left-0 top-full w-full  shadow-md py-3 invisible opacity-0 group-hover:opacity-100 group-hover:visible transition duration-300 z-50 divide-y divide-gray-300 divide-dashed">
                                <ul>
                                    <li>
                                        <a href="{{route('customer.dashboard')}}"
                                            class="block  text-red-700 hover:text-primary transition">
                                            <span class="text-xs leading-3"><b>Dasboard</b></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('logout')}}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            class="block  text-red-700 hover:text-primary transition">
                                            <span class="text-xs leading-3"><b>Logout</b></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                @endif
                <form id="logout-form" method="POST" action="{{route('logout')}}" style="display: none">
                    @csrf
                </form>
                @else
                <a href="{{route('login')}}" class="block text-center text-gray-700 hover:text-primary transition">
                    <div class="text-2xl">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="text-xs leading-3">Account</div>
                </a>
                @endif
                @endif
            </div>
            <!-- navicons end -->

        </div>
    </header>
    <!-- header end -->

    <!-- navbar -->
    <nav class="bg-gray-800 hidden lg:block">
        <div class="container">
            <div class="flex">

                <!-- all category -->
                <div class="px-8 py-4 bg-primary flex items-center cursor-pointer group relative">
                    <span class="text-white">
                        <i class="fas fa-bars"></i>
                    </span>
                    <span class="capitalize ml-2 text-white">All categories</span>

                    <div
                        class="absolute left-0 top-full w-full bg-white shadow-md py-3 invisible opacity-0 group-hover:opacity-100 group-hover:visible transition duration-300 z-50 divide-y divide-gray-300 divide-dashed">
                        <!-- single category -->
                        <a href="#" class="px-6 py-3 flex items-center hover:bg-gray-100 transition">
                            <img src="{{asset ('images/icons/bed.svg') }}" class="w-5 h-5 object-contain">
                            <span class="ml-6 text-gray-600 text-sm">Bedroom</span>
                        </a>
                        <!-- single category end -->
                        <!-- single category -->
                        <a href="#" class="px-6 py-3 flex items-center hover:bg-gray-100 transition">
                            <img src="{{asset ('images/icons/sofa.svg') }}" class="w-5 h-5 object-contain">
                            <span class="ml-6 text-gray-600 text-sm">Sofa</span>
                        </a>
                        <!-- single category end -->
                        <!-- single category -->
                        <a href="#" class="px-6 py-3 flex items-center hover:bg-gray-100 transition">
                            <img src="{{asset ('images/icons/office.svg') }}" class="w-5 h-5 object-contain">
                            <span class="ml-6 text-gray-600 text-sm">Office</span>
                        </a>
                        <!-- single category end -->
                        <!-- single category -->
                        <a href="#" class="px-6 py-3 flex items-center hover:bg-gray-100 transition">
                            <img src="{{asset ('images/icons/terrace.svg') }}" class="w-5 h-5 object-contain">
                            <span class="ml-6 text-gray-600 text-sm">Outdoor</span>
                        </a>
                        <!-- single category end -->
                        <!-- single category -->
                        <a href="#" class="px-6 py-3 flex items-center hover:bg-gray-100 transition">
                            <img src="{{asset ('images/icons/bed-2.svg') }}" class="w-5 h-5 object-contain">
                            <span class="ml-6 text-gray-600 text-sm">Mattress</span>
                        </a>
                        <!-- single category end -->
                        <!-- single category -->
                        <a href="#" class="px-6 py-3 flex items-center hover:bg-gray-100 transition">
                            <img src="{{asset ('images/icons/restaurant.svg') }}" class="w-5 h-5 object-contain">
                            <span class="ml-6 text-gray-600 text-sm">Sofa</span>
                        </a>
                        <!-- single category end -->
                    </div>
                </div>
                <!-- all category end -->

                <!-- nav menu -->
                <div class="flex items-center justify-between flex-grow pl-12">
                    <div class="flex items-center space-x-6 text-base capitalize">
                        <a href="/" class="text-gray-200 hover:text-white transition">Home</a>
                        <a href="/shop" class="text-gray-200 hover:text-white transition">Shop</a>
                        <a href="/cart" class="text-gray-200 hover:text-white transition">CART</a>
                        <a href="/checkout" class="text-gray-200 hover:text-white transition">CHECKOUT</a>
                        <a href="#" class="text-gray-200 hover:text-white transition">About us</a>
                        <a href="#" class="text-gray-200 hover:text-white transition">Contact us</a>
                    </div>
                </div>
                <!-- nav menu end -->

            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- mobile menubar -->
    <div
        class="fixed w-full border-t border-gray-200 shadow-sm bg-white py-3 bottom-0 left-0 flex justify-around items-start px-6 lg:hidden z-40">
        <a href="javascript:void(0)" class="block text-center text-gray-700 hover:text-primary transition relative">
            <div class="text-2xl" id="menuBar">
                <i class="fas fa-bars"></i>
            </div>
            <div class="text-xs leading-3">Menu</div>
        </a>
        <a href="#" class="block text-center text-gray-700 hover:text-primary transition relative">
            <div class="text-2xl">
                <i class="fas fa-list-ul"></i>
            </div>
            <div class="text-xs leading-3">Category</div>
        </a>
        <a href="#" class="block text-center text-gray-700 hover:text-primary transition relative">
            <div class="text-2xl">
                <i class="fas fa-search"></i>
            </div>
            <div class="text-xs leading-3">Search</div>
        </a>
        <a href="/cart" class="text-center text-gray-700 hover:text-primary transition relative">
            <span
                class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">3</span>
            <div class="text-2xl">
                <i class="fas fa-shopping-bag"></i>
            </div>
            <div class="text-xs leading-3">Cart</div>
        </a>
    </div>
    <!-- mobile menu end -->

    <!-- mobile sidebar menu -->
    <div class="fixed left-0 top-0 w-full h-full z-50 bg-black bg-opacity-30 shadow hidden" id="mobileMenu">
        <div class="absolute left-0 top-0 w-72 h-full z-50 bg-white shadow">
            <div id="closeMenu" class="text-gray-400 hover:text-primary text-lg absolute right-3 top-3 cursor-pointer">
                <i class="fas fa-times"></i>
            </div>
            <!-- navlink -->
            <h3 class="text-xl font-semibold text-gray-700 mb-1 font-roboto pl-4 pt-4">Menu</h3>
            <div class="">
                <a href="/" class="block px-4 py-2 font-medium transition hover:bg-gray-100">
                    Home
                </a>
                <a href="/shop" class="block px-4 py-2 font-medium transition hover:bg-gray-100">
                    Shop
                </a>
                <a href="#" class="block px-4 py-2 font-medium transition hover:bg-gray-100">
                    About Us
                </a>
                <a href="#" class="block px-4 py-2 font-medium transition hover:bg-gray-100">
                    Contact Us
                </a>
            </div>
            <!-- navlinks end -->
        </div>
    </div>
    <!-- mobile sidebar menu end -->
    {{$slot}}
    <!-- footer -->
    <footer class="bg-white pt-16 pb-12 border-t border-gray-100">
        <div class="container">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <!-- footer text -->
                <div class="space-y-8 xl:col-span-1">
                    <img class="block w-32" src="{{asset ('images/logo2.png') }}" alt="Company name">
                    <p class="text-gray-500 text-base">
                        Ashulia ??? Saver Dhaka, Bangladesh <br> 01718863771
                    </p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                <!-- footer text end -->
                <!-- footer links -->
                <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                Solutions
                            </h3>
                            <div class="mt-4 space-y-4">
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Marketing
                                </a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Analytics
                                </a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Commerce
                                </a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Insights
                                </a>
                            </div>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                Support
                            </h3>
                            <div class="mt-4 space-y-4">
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Pricing
                                </a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Documentation
                                </a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Guides
                                </a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    API Status
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                Company
                            </h3>
                            <div class="mt-4 space-y-4">
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    About
                                </a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Blog
                                </a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Jobs
                                </a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Press
                                </a>
                            </div>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                Legal
                            </h3>
                            <div class="mt-4 space-y-4">
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Claim
                                </a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Privacy
                                </a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Policy
                                </a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Terms
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer links end -->
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <!-- copyright -->
    <div class="bg-gray-800 py-4">
        <div class="container flex items-center justify-between">
            <p class="text-white">?? Nishan - All Rights Reserved</p>
            <div>
                <img src="{{asset ('images/methods.png') }}" class="h-5">
            </div>
        </div>
    </div>
    <!-- copyright end -->
    <script>
        let menuBar = document.querySelector('#menuBar')
        let mobileMenu = document.querySelector('#mobileMenu')
        let closeMenu = document.querySelector('#closeMenu')

        menuBar.addEventListener('click', function () {
            mobileMenu.classList.remove('hidden')
        })

        closeMenu.addEventListener('click', function () {
            mobileMenu.classList.add('hidden')
        })

    </script>
    @livewireScripts
</body>

</html>
