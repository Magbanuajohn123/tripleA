<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <title>Landing Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Added FontAwesome and SweetAlert2 for functionality -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-[#ffffff] cursor-pointer">

    <nav id="navbar" class="bg-[#ffffff] fixed w-full z-20 top-0 transition-all duration-300">
        <div class="max-w-7xl flex flex-wrap items-center justify-between mx-auto p-3">
            <a href="/" class="flex items-center space-x rtl:space-x-reverse">
                <img src="{{ asset('images/logo.png') }}" class="h-12 w-12 hidden lg:block md:block" alt="Logo">
                <span class="self-center text-xl text-[#030825] font-bold font-[Poppins] whitespace-nowrap">
                    Triple A <span class="text-[#029337]">Rental</span>
                </span>
            </a>

            <div class="flex lg:order-2 space-x-3 lg:space-x-0 rtl:space-x-reverse items-center">
                <button type="button" onclick="login()"
                    class="text-gray-600 hidden sm:block focus:ring-4 hover:text-black focus:outline-none focus:ring-[#3b5998]/50 font-medium leading-5 rounded-base text-sm px-4 py-2.5 text-center items-center">
                    Log in
                </button>
                <button type="button" onclick="goToRegister()"
                    class="group text-white hidden sm:block transition-all duration-400 bg-[#16A34A] hover:bg-[#0b8437] focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium leading-5 rounded-base text-sm px-3 py-2 text-center items-center">
                    Register <i class="fa-solid fa-arrow-right-long group-hover:translate-x-1"></i>
                </button>

                <button data-collapse-toggle="navbar-sticky" type="button" aria-controls="navbar-sticky"
                    aria-expanded="false"
                    class="inline-flex items-center p-2 text-sm text-black rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 7h14M5 12h14M5 17h10" />
                    </svg>
                </button>
            </div>

            <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 lg:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 lg:space-x-8 rtl:space-x-reverse lg:flex-row lg:mt-0 lg:border-0 lg:bg-transparent">
                    <li><a href="#home"
                            class="nav-link relative inline-block py-2 px-3 text-md font-[Poppins] text-gray-600 transition-all duration-300 hover:text-black after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-green-500 after:transition-all after:duration-300 hover:after:w-full"
                            data-section="home">Home</a></li>
                    <li><a href="#inventory"
                            class="nav-link relative inline-block py-2 px-3 font-[Poppins] text-gray-600 transition-all duration-300 hover:text-black after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-green-500 after:transition-all after:duration-300 hover:after:w-full"
                            data-section="inventory">Inventory</a></li>
                    <li><a href="#why-us"
                            class="nav-link relative inline-block py-2 px-3 font-[Poppins] text-gray-600 transition-all duration-300 hover:text-black after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-green-500 after:transition-all after:duration-300 hover:after:w-full"
                            data-section="why-us">Why Us</a></li>
                    <li><a href="#how-it-works"
                            class="nav-link relative inline-block py-2 px-3 font-[Poppins] text-gray-600 transition-all duration-300 hover:text-black after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-green-500 after:transition-all after:duration-300 hover:after:w-full"
                            data-section="how-it-works">How it Works</a></li>
                    <li><a href="#gallery"
                            class="nav-link relative inline-block py-2 px-3 font-[Poppins] text-gray-600 transition-all duration-300 hover:text-black after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-green-500 after:transition-all after:duration-300 hover:after:w-full"
                            data-section="gallery">Gallery</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Chat Box -->
    <div id="chatBoxWrapper"
        class="hidden fixed bottom-24 right-6 w-80 bg-white shadow-2xl rounded-2xl overflow-hidden z-50 border border-gray-100">
        <div class="bg-[#029337] p-4 text-white flex justify-between items-center">
            <span class="font-bold">Chat with Us</span>
            <button onclick="hideChat()" class="text-white hover:text-gray-200"><i
                    class="fa-solid fa-xmark"></i></button>
        </div>
        <div id="chatBox" class="h-80 overflow-y-auto p-4 bg-gray-50 flex flex-col gap-3">
            <div class="flex mb-2">
                <div class="bg-[#DCFCE7] text-[#030825] px-4 py-3 rounded-2xl max-w-[80%] text-sm">
                    Hi! How can we help you today?
                </div>
            </div>
        </div>
        <div class="border-t border-gray-200 p-3 bg-white">
            <div class="flex items-center gap-2">
                <input id="userInput" type="text" placeholder="Type a message..."
                    class="flex-1 rounded-xl border border-gray-300 focus:border-[#029337] focus:ring-[#029337] text-sm py-2 px-3">
                <button onclick="sendMessage()"
                    class="bg-[#029337] text-white w-10 h-10 rounded-xl flex items-center justify-center hover:bg-[#0b8437] transition-colors">
                    <i class="fa-solid fa-paper-plane"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="fixed bottom-6 right-6 z-50" id="chatIcon">
        <button onclick="showChat(event)"
            class="h-14 w-14 rounded-full text-[#029337] hover:bg-[#029337] hover:text-white text-2xl bg-[#DCFCE7] shadow-lg transition-all duration-300 transform hover:scale-110">
            <i class="fa-solid fa-comment-dots"></i>
        </button>
    </div>

    <!-- Page Sections -->
    <section id="home" class="min-h-screen bg-[#ffffff] pt-32 pb-20 overflow-x-hidden">
        <div class="flex justify-between items-center flex-col md:flex-row w-full max-w-7xl mx-auto px-4">
            <div class="w-full md:w-1/2 flex flex-col justify-center items-start">
                <p
                    class="rounded-full px-4 py-1 font-bold bg-[#DCFCE7] text-[#029337] text-xs mb-4 border border-[#029337]">
                    Trusted by 500+ event planners
                </p>
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-[Poppins] font-bold text-[#030825] leading-tight">
                    Premium <br>Event Rentals, <br>
                    <span class="text-[#029337]">Delivered <br>On Time.</span>
                </h1>
                <p class="font-[Poppins] text-sm mt-6 text-gray-500 max-w-md">
                    From elegant weddings to corporate galas — rent chairs, tables, tents, catering equipment, and full
                    buffet stations. Same-day delivery, spotless inventory, hassle-free booking.
                </p>
                <div class="flex mt-8 gap-4">
                    <button
                        class="h-12 transition transform hover:-translate-y-1 duration-300 text-white bg-[#029337] hover:bg-[#03782e] font-medium rounded-lg text-sm px-6 inline-flex items-center gap-2">
                        Book Equipment <i class="fa-solid fa-arrow-right"></i>
                    </button>
                    <button
                        class="h-12 text-gray-900 border border-[#029337] hover:bg-gray-50 transform transition hover:-translate-y-1 duration-300 font-medium rounded-lg text-sm px-6">
                        View Inventory
                    </button>
                </div>
            </div>
            <div class="w-full md:w-1/2 mt-12 md:mt-0">
                <div class="relative">
                    <div class="absolute -inset-1 bg-green-100 rounded-4xl blur-xl opacity-50"></div>
                    <img class="relative h-80 md:h-[500px] w-full object-cover rounded-4xl shadow-xl"
                        src="{{ asset('images/hero-event.jpg') }}" alt="Event Rentals">
                </div>
            </div>
        </div>
    </section>

    <section id="inventory" class="min-h-screen min-w-full px-0 pt-0 lg:pt-20 lg:pb-20 lg:px-4 bg-[#ffffff]">
        <div class="max-w-7xl mx-auto p-4 w-full px-4">
            <div class="text-center flex flex-col items-center justify-center w-full">
                <p
                    class="relative rounded-3xl text-[9px] lg:text-[11px] h-8  text-center font-bold bg-[#DCFCE7] text-[#029337]  mb-2 px-3 py-2 border border-[#029337]">
                    OUR INVENTORY
                </p>
                <h1 class="lg:text-6xl md:text-5xl text-2xl mt-2 text-[#030825] font-bold font-[Poppins]">
                    Everything you <br> need, in one place.
                </h1>
                <p class="text-gray-500 mt-2 lg:mt-3 mb-4 lg:text-sm text-xs">Browse our most-rented categories. Mix,
                    match, and bundle to fit any event
                    <br> size or theme.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-1">


                <div
                    class="group rounded-4xl bg-white h-65 block max-w-full p-6 border  transition-all hover:-translate-y-2 duration-400 border-default  shadow-xs">
                    <a href="#" class="">
                        <p
                            class="bg-[#DCFCE7] w-15 h-15 text-[#029337]  text-center py-2 rounded-2xl  group-hover:bg-[#029337] group-hover:text-white">
                            <i class="pt-2 fa-solid fa-chair text-3xl "></i>
                        </p>
                    </a>
                    <div class="mt-5 flex justify-between">
                        <h4 class="font-bold text-xl font-[Poppins]">Chairs</h4>
                        <p class="text-gray-500 text-xs pt-2">3,500+ units</p>
                    </div>
                    <h4 class="mt-4 mb-3 text-gray-500 text-sm">
                        Monoblock, Tiffany, banquet & folding chairs in white, black, gold and more.
                    </h4>
                    <a href="#" class="text-sm text-[#029337]">View Details <i
                            class="fa-solid fa-arrow-right group-hover:translate-x-2"></i></a>

                </div>
                <div
                    class="group rounded-4xl bg-white h-65 block max-w-full p-6 border mx-2  transition-all hover:-translate-y-2 duration-400 border-default  shadow-xs">
                    <a href="#" class="">
                        <p
                            class="bg-[#DCFCE7] text-[#029337] w-15 h-15  text-center py-2 rounded-2xl  group-hover:bg-[#029337] group-hover:text-white">
                            <i class="pt-2 fa-solid fa-table text-3xl"></i>
                        </p>
                    </a>
                    <div class="mt-5 flex justify-between">
                        <h4 class="font-bold text-xl font-[Poppins]">Tables</h4>
                        <p class="text-gray-500 text-xs pt-2">1,200+ units</p>
                    </div>
                    <h4 class="mt-4 mb-3 text-gray-500 text-sm">
                        Round, rectangular, cocktail and serpentine tables for any layout.
                    </h4>
                    <a href="#" class="text-sm text-[#029337]">View Details <i
                            class="fa-solid fa-arrow-right group-hover:translate-x-2"></i></a>

                </div>
                <div
                    class="group bg-white rounded-4xl  h-65 block max-w-full p-6 border  transition-all hover:-translate-y-2 duration-400 border-default  shadow-xs">
                    <a href="#" class="">
                        <p
                            class="bg-[#DCFCE7] w-15 h-15 text-[#029337] text-center py-2 rounded-2xl  group-hover:bg-[#029337] group-hover:text-white">
                            <i class="fa-solid fa-tent pt-2 text-3xl"></i>
                        </p>
                    </a>
                    <div class="mt-5 flex justify-between">
                        <h4 class="font-bold text-xl font-[Poppins]">Tents</h4>
                        <p class="text-gray-500 text-xs pt-2">150+ sizes</p>
                    </div>
                    <h4 class="mt-4 mb-3 text-gray-500 text-sm">
                        Frame, pole, and clear-span tents from 10×10 up to grand pavilions.
                    </h4>
                    <a href="#" class="text-sm text-[#029337]">View Details <i
                            class="fa-solid fa-arrow-right group-hover:translate-x-2"></i></a>

                </div>


                <div
                    class="group rounded-4xl mt-2 bg-white h-65 block max-w-full p-6 border  transition-all hover:-translate-y-2 duration-400 border-default  shadow-xs">
                    <a href="#" class="">
                        <p
                            class="bg-[#DCFCE7] w-15 h-15 text-[#029337]  text-center py-2 rounded-2xl  group-hover:bg-[#029337] group-hover:text-white">
                            <i class="fa-solid fa-holly-berry pt-2 text-3xl"></i>
                        </p>
                    </a>
                    <div class="mt-5 flex justify-between">
                        <h4 class="font-bold text-xl font-[Poppins]">Catering Equipment</h4>
                        <p class="text-gray-500 text-xs pt-2">2,000+ units</p>
                    </div>
                    <h4 class="mt-4 mb-3">
                        Chafing dishes, beverage dispensers, glassware, cutlery and linens.
                    </h4>
                    <a href="#" class="text-sm text-[#029337]">View Details <i
                            class="fa-solid fa-arrow-right group-hover:translate-x-1"></i></a>

                </div>
                <div
                    class="group rounded-4xl mt-2 bg-white h-65 block max-w-full p-6 border mx-2  transition-all hover:-translate-y-2 duration-400 border-default  shadow-xs">
                    <a href="#" class="">
                        <p
                            class="bg-[#DCFCE7] text-[#029337] w-15 h-15  text-center py-2 rounded-2xl  group-hover:bg-[#029337] group-hover:text-white">
                            <i class="fa-solid fa-utensils pt-2 text-3xl"></i>
                        </p>
                    </a>
                    <div class="mt-5 flex justify-between">
                        <h4 class="font-bold text-xl font-[Poppins]">Buffet Stations</h4>
                        <p class="text-gray-500 text-xs pt-2">300+ sets</p>
                    </div>
                    <h4 class="mt-4 mb-3">
                        Food warmers, soup kettles, carving stations and elegant displays.
                    </h4>
                    <a href="#" class="text-sm text-[#029337]">View Details <i
                            class="fa-solid fa-arrow-right group-hover:translate-x-2"></i></a>

                </div>
                <div
                    class="group bg-white  mt-2 rounded-4xl h-65 block max-w-full p-6 border  transition-all hover:-translate-y-2 duration-400 border-default  shadow-xs">
                    <a href="#" class="">
                        <p
                            class="bg-[#DCFCE7] w-15 h-15 text-[#029337] text-center py-2 rounded-2xl  group-hover:bg-[#029337] group-hover:text-white">
                            <i class="fa-solid fa-box-open pt-2 text-3xl"></i>
                        </p>
                    </a>
                    <div class="mt-5 flex justify-between">
                        <h4 class="font-bold text-xl font-[Poppins]">Event Packages</h4>
                        <p class="text-gray-500 text-xs pt-2">20+ bundles</p>
                    </div>
                    <h4 class="mt-4 mb-3">
                        All-in-one packages priced for 50, 100, 200, 500+ guests.
                    </h4>
                    <a href="#" class="text-sm text-[#029337]">View Details <i
                            class="fa-solid fa-arrow-right group-hover:translate-x-2"></i></a>

                </div>
            </div>
    </section>
    <section id="why-us" class="min-h-screen pt-20 pb-20 px-4 bg-[#ffffff]">
        <div class="max-w-7xl mx-auto">
            <div class="text-center flex flex-col items-center justify-center w-full">
                <p
                    class="relative rounded-3xl text-[9px] lg:text-[11px] h-8  text-center font-bold bg-[#DCFCE7] text-[#029337]  mb-2 px-3 py-2 border border-[#029337]">
                    WHY TRIPLE A
                </p>
                <h1 class="lg:text-6xl md:text-5xl text-2xl mt-2 text-[#030825] font-bold font-[Poppins]">
                    Built for planners who <br> can't afford surprises.
                </h1>
                <p class="text-gray-500 mt-2 lg:mt-3 mb-4 lg:text-sm text-xs">
                    Six reasons clients book us again — and refer their colleagues.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">

                <div
                    class="group bg-neutral-primary-soft block max-w-full p-6 border border-default rounded-4xl shadow-xs transition-all hover:-translate-y-2 duration-400">
                    <p
                        class="bg-[#DCFCE7] text-[#029337] rounded-4xl pt-1 h-12 w-12 text-center group-hover:bg-[#029337] group-hover:text-white">
                        <i class="fa-solid fa-peso-sign pt-2 text-2xl"></i>
                    </p>
                    <h5 class="mb-2 mt-3 text-xl font-semibold tracking-tight text-heading leading-8">Affordable Rental
                        Rates</h5>
                    <p class="text-body text-sm">Transparent pricing with volume discounts. No hidden fees, ever.</p>
                </div>


                <div
                    class="group bg-neutral-primary-soft block max-w-full p-6 border border-default rounded-4xl shadow-xs transition-all hover:-translate-y-2 duration-400">
                    <p
                        class="bg-[#DCFCE7] text-[#029337] rounded-4xl pt-1 h-12 w-12 text-center group-hover:bg-[#029337] group-hover:text-white">
                        <i class="fa-solid fa-kitchen-set pt-2 text-2xl"></i>
                    </p>
                    <h5 class="mb-2 mt-3 text-xl font-semibold tracking-tight text-heading leading-8">Well-Maintained
                        Equipment</h5>
                    <p class="text-body text-sm">Every item inspected, cleaned and sanitized before each booking.</p>
                </div>


                <div
                    class="group bg-neutral-primary-soft block max-w-full p-6 border border-default rounded-4xl shadow-xs transition-all hover:-translate-y-2 duration-400">
                    <p
                        class="bg-[#DCFCE7] text-[#029337] rounded-4xl pt-1 h-12 w-12 text-center group-hover:bg-[#029337] group-hover:text-white">
                        <i class="fa-solid fa-truck-pickup pt-2 text-2xl"></i>
                    </p>
                    <h5 class="mb-2 mt-3 text-xl font-semibold tracking-tight text-heading leading-8">Fast Delivery &
                        Pickup</h5>
                    <p class="text-body text-sm">Same-day delivery in metro areas. On-time, every time.</p>
                </div>
                <div
                    class="group bg-neutral-primary-soft block max-w-full p-6 border border-default rounded-4xl shadow-xs transition-all hover:-translate-y-2 duration-400">
                    <p
                        class="bg-[#DCFCE7] text-[#029337] rounded-4xl pt-1 h-12 w-12 text-center group-hover:bg-[#029337] group-hover:text-white">
                        <i class="fa-solid fa-boxes-stacked pt-2 text-2xl"></i>
                    <h5 class="mb-2 mt-3 text-xl font-semibold tracking-tight text-heading leading-8">
                        Large Inventory
                    </h5>
                    <p class="text-body text-sm">0,000+ items ready to ship — scale from intimate to 1,000+ guests.</p>
                </div>


                <div
                    class="group bg-neutral-primary-soft block max-w-full p-6 border border-default rounded-4xl shadow-xs transition-all hover:-translate-y-2 duration-400">
                    <p
                        class="bg-[#DCFCE7] text-[#029337] rounded-4xl pt-1 h-12 w-12 text-center group-hover:bg-[#029337] group-hover:text-white">
                        <i class="fa-solid fa-box-open pt-2 text-2xl"></i>
                    </p>
                    <h5 class="mb-2 mt-3 text-xl font-semibold tracking-tight text-heading leading-8">Flexible Packages
                    </h5>
                    <p class="text-body text-sm">Build custom bundles or pick a ready-made event package.</p>
                </div>


                <div
                    class="group bg-neutral-primary-soft block max-w-full p-6 border border-default rounded-4xl shadow-xs transition-all hover:-translate-y-2 duration-400">
                    <p
                        class="bg-[#DCFCE7] text-[#029337] rounded-4xl pt-1 h-12 w-12 text-center group-hover:bg-[#029337] group-hover:text-white">
                        <i class="fa-solid fa-user-shield pt-2 text-2xl"></i>
                    </p>
                    <h5 class="mb-2 mt-3 text-xl font-semibold tracking-tight text-heading leading-8">Trusted by
                        Hundreds</h5>
                    <p class="text-body text-sm">Backed by 98% client satisfaction across 500+ successful events.</p>
                </div>
            </div>
        </div>

    </section>

    <section id="how-it-works" class="bg-[#ffffff] min-h-screen pt-20 pb-20 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="text-center flex flex-col items-center justify-center w-full">
                <p
                    class="relative rounded-3xl text-[9px] lg:text-[11px] h-8  text-center font-bold bg-[#DCFCE7] text-[#029337]  mb-2 px-3 py-2 border border-[#029337]">
                    HOW IT WORKS
                </p>
                <h1 class="lg:text-6xl md:text-5xl text-2xl mt-2 text-[#030825] font-bold font-[Poppins]">
                    From browse to setup <br> — in 4 easy steps.
                </h1>
                <p class="text-gray-500 mt-2 lg:mt-3 mb-4 lg:text-sm text-xs">
                    A frictionless booking flow designed around busy event planners.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                <div
                    class="group bg-neutral-primary-soft grid max-w-full justify-center items-center p-6 rounded-4xl shadow-xs transition-all hover:-translate-y-2 duration-400">
                    <div><button
                            class="bg-[#DCFCE7] group-hover:bg-[#029337] group-hover:text-white  text-md w-8 h-8 rounded-full text-[#029337]">
                            1
                        </button>

                    </div>
                    <div
                        class="w-14 h-14 mx-auto rounded-full bg-[#DCFCE7] text-[#029337] flex items-center justify-center transition-all duration-300 group-hover:bg-[#029337] group-hover:text-white">
                        <i class="fa-solid fa-peso-sign text-2xl"></i>
                    </div>
                    <h5 class="mb-2 text-center mt-3 text-xl font-semibold tracking-tight text-heading leading-8">
                        Affordable Rental
                        Rates</h5>
                    <p class="text-body text-sm text-center">Transparent pricing with volume discounts. No hidden fees,
                        ever.</p>
                </div>


                <div
                    class="group bg-neutral-primary-soft grid max-w-full justify-center items-center p-6 rounded-4xl shadow-xs transition-all hover:-translate-y-2 duration-400">
                    <div><button
                            class="bg-[#DCFCE7] group-hover:bg-[#029337] group-hover:text-white  text-md w-8 h-8 rounded-full text-[#029337]">
                            2
                        </button>

                    </div>
                    <div
                        class="w-14 h-14 mx-auto rounded-full bg-[#DCFCE7] text-[#029337] flex items-center justify-center transition-all duration-300 group-hover:bg-[#029337] group-hover:text-white">
                        <i class="fa-solid fa-peso-sign text-2xl"></i>
                    </div>
                    <h5 class="mb-2 text-center mt-3 text-xl font-semibold tracking-tight text-heading leading-8">
                        Affordable Rental
                        Rates</h5>
                    <p class="text-body text-sm text-center">Transparent pricing with volume discounts. No hidden fees,
                        ever.</p>
                </div>


                <div
                    class="group bg-neutral-primary-soft grid max-w-full justify-center items-center p-6 rounded-4xl shadow-xs transition-all hover:-translate-y-2 duration-400">
                    <div><button
                            class="bg-[#DCFCE7] group-hover:bg-[#029337] group-hover:text-white  text-md w-8 h-8 rounded-full text-[#029337]">
                            3
                        </button>

                    </div>
                    <div
                        class="w-14 h-14 mx-auto rounded-full bg-[#DCFCE7] text-[#029337] flex items-center justify-center transition-all duration-300 group-hover:bg-[#029337] group-hover:text-white">
                        <i class="fa-solid fa-peso-sign text-2xl"></i>
                    </div>
                    <h5 class="mb-2 text-center mt-3 text-xl font-semibold tracking-tight text-heading leading-8">
                        Affordable Rental
                        Rates</h5>
                    <p class="text-body text-sm text-center">Transparent pricing with volume discounts. No hidden fees,
                        ever.</p>
                </div>
                <div
                    class="group bg-neutral-primary-soft grid max-w-full justify-center items-center p-6 rounded-4xl shadow-xs transition-all hover:-translate-y-2 duration-400">
                    <div><button
                            class="bg-[#DCFCE7] group-hover:bg-[#029337] group-hover:text-white  text-md w-8 h-8 rounded-full text-[#029337]">
                            4
                        </button>

                    </div>
                    <div
                        class="w-14 h-14 mx-auto rounded-full bg-[#DCFCE7] text-[#029337] flex items-center justify-center transition-all duration-300 group-hover:bg-[#029337] group-hover:text-white">
                        <i class="fa-solid fa-peso-sign text-2xl"></i>
                    </div>
                    <h5 class="mb-2 text-center mt-3 text-xl font-semibold tracking-tight text-heading leading-8">
                        Affordable Rental
                        Rates</h5>
                    <p class="text-body text-sm text-center">Transparent pricing with volume discounts. No hidden fees,
                        ever.</p>
                </div>
            </div>
        </div>
    </section>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('bg-white/90', 'backdrop-blur-md', 'shadow-sm');
            } else {
                navbar.classList.remove('bg-white/90', 'backdrop-blur-md', 'shadow-sm');
            }
        });

        // Chat Box Logic
        function showChat(e) {
            e.preventDefault();
            document.getElementById('chatBoxWrapper').classList.remove('hidden');
            document.getElementById('chatIcon').classList.add('hidden');
        }

        function hideChat() {
            document.getElementById('chatBoxWrapper').classList.add('hidden');
            document.getElementById('chatIcon').classList.remove('hidden');
        }

        function sendMessage() {
            const input = document.getElementById('userInput');
            const message = input.value.trim();
            if (!message) return;

            const chatBox = document.getElementById('chatBox');

            // Append User Message
            chatBox.innerHTML += `
                <div class="flex justify-end">
                    <div class="bg-[#029337] text-white px-4 py-2 rounded-2xl max-w-[85%] text-sm">
                        ${message}
                    </div>
                </div>
            `;

            input.value = "";
            chatBox.scrollTop = chatBox.scrollHeight;

            // Fetch from AI
            fetch('/ai-chat', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        message: message
                    })
                })
                .then(res => res.json())
                .then(data => {
                    chatBox.innerHTML += `
                    <div class="flex">
                        <div class="bg-[#DCFCE7] text-[#030825] px-4 py-3 rounded-2xl max-w-[85%] text-sm">
                            ${data.reply}
                        </div>
                    </div>
                `;
                    chatBox.scrollTop = chatBox.scrollHeight;
                })
                .catch(err => {
                    chatBox.innerHTML +=
                        `<div class="text-red-500 text-xs text-center my-2">Connection error. Please try again.</div>`;
                });
        }

        // Navigation Redirects
        function goToRegister() {
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: "Redirecting to Registration",
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true
            }).then(() => {
                window.location.href = "{{ url('/register') }}";
            });
        }

        function login() {
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: "Redirecting to Login",
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true
            }).then(() => {
                window.location.href = "{{ route('login.form') }}";
            });
        }

        // Scroll Spy for Active Links
        document.addEventListener("DOMContentLoaded", () => {
            const navLinks = document.querySelectorAll(".nav-link");
            const sections = document.querySelectorAll("section");

            window.addEventListener("scroll", () => {
                let current = "";
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    if (window.scrollY >= sectionTop - 150) {
                        current = section.getAttribute("id");
                    }
                });

                navLinks.forEach(link => {
                    link.classList.remove("text-black", "after:w-full");
                    link.classList.add("text-gray-600");
                    if (current && link.getAttribute("data-section") === current) {
                        link.classList.remove("text-gray-600");
                        link.classList.add("text-black", "after:w-full");
                    }
                });
            });
        });
    </script>
</body>

</html>
