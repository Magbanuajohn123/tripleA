<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@500;600;700&display=swap"
        rel="stylesheet">
</head>

<body class="bg-[#041a0d] ">




    <nav id="navbar" class=" fixed w-full z-20 top-0 inset-s-0">
        <div class="max-w-7xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/logo.png') }}" class="h-7" alt="Flowbite Logo">
                <span class="self-center text-xl text-white font-semibold whitespace-nowrap font-[Poppins]">Triple A
                    <span class="text-[#16A34A]">Rental</span> </span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-body rounded-base md:hidden hover:bg-neutral-secondary-soft hover:text-heading focus:outline-none focus:ring-2 focus:ring-neutral-tertiary"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M5 7h14M5 12h14M5 17h14" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium  rounded-base  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 m">
                    <li>
                        <a href="#" class="block py-2 px-3 text-white md:p-0 hover:text-[#16A34A]"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#equipment"
                            class="block py-2 px-3 text-white rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-[#16A34A] md:p-0 md:dark:hover:bg-transparent">Equipment</a>
                    </li>

                    <li>
                        <a href="#why"
                            class="block py-2 px-3 text-white rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-[#16A34A] md:p-0 md:dark:hover:bg-transparent">Why
                            Us</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-[#16A34A] md:p-0 md:dark:hover:bg-transparent">How
                            It Works</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-[#16A34A] md:p-0 md:dark:hover:bg-transparent">Gallery</a>
                    </li>
                </ul>
                <button type="button"
                    class="text-white bg-[#16A34A] hover:bg-[#16A34A] box-border border border-transparent mx-3 pointer-fine: focus:ring-4 focus:ring-[#16A34A] shadow-xs font-medium leading-5 rounded-base text-sm px-3 py-2 focus:outline-none" onclick="window.location.href='/register' ">Register</button>
                <button type="button"
                    class="text-white bg-[#16A34A] hover:bg-[#16A34A] box-border border border-transparent focus:ring-4 focus:ring-[#16A34A] shadow-xs font-medium leading-5 rounded-base text-sm px-3 py-2 focus:outline-none" onclick="window.location.href='/login' ">Login</button>
            </div>

        </div>
    </nav>
    <div class="container mx-auto px-6 md:px-12 lg:px-20 pt-24 md:pt-40">

        <div class="flex flex-col-reverse lg:flex-row items-center gap-12">

            <!-- Left Content -->
            <div class="w-full lg:w-1/2 text-center lg:text-left">

                <h1
                    class="text-4xl sm:text-5xl lg:text-5xl xl:text-6xl font-[Poppins] font-bold text-white leading-tight">
                    Complete Event Rental
                    <span class="text-[#16A34A]">Solutions</span>
                    for Every Occasion
                </h1>

                <p class="text-gray-300 mt-6 text-base sm:text-lg lg:text-xl leading-relaxed">
                    From monoblock chairs and banquet tables to tents, food warmers,
                    buffet stations, and catering equipment — Triple A Rental provides
                    everything you need for successful events.
                </p>

                <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <button
                        class="bg-[#16A34A] hover:bg-green-700 text-white px-8 py-3 rounded-lg font-medium transition">
                        Book Now
                    </button>

                    <button
                        class="border border-[#16A34A] text-[#16A34A] hover:bg-[#16A34A] hover:text-white px-8 py-3 rounded-lg font-medium transition">
                        View Equipment
                    </button>
                </div>

            </div>

            <!-- Right Image -->
            <div class="w-full lg:w-1/2 flex justify-center">

                <img src="{{ asset('images/logo.png') }}" alt="Event Equipment"
                    class="w-full max-w-sm sm:max-w-md lg:max-w-xl lg:h-120 rounded-2xl shadow-2xl">

            </div>

        </div>

    </div>
    <section id="equipment" class="scroll-pt-50 container mx-auto px-6 md:px-12 lg:px-20 py-24 md:py-22">

        <div class="max-w-4xl  text-start">

            <span class="inline-block px-4 py-2 bg-green-500/10 text-[#16A34A] rounded-full text-sm font-semibold">
                Our Inventory
            </span>

            <h2 class="mt-2 text-3xl md:text-4xl lg:text-5xl font-[Poppins] font-bold text-white leading-tight">
                Everything for Your Event,
                <br><span class="text-[#16A34A]">Under One Roof</span>
            </h2>

            <p class="mt-2 text-gray-300 text-base md:text-md leading-relaxed">
                Browse our six main categories. Every item is professionally
                maintained and <br> ready to make your event unforgettable.
            </p>

        </div>
        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-full gap-2">




            <div class="bg-[#041a0d] block max-w-full border border-[#09301a] rounded-base shadow-xs">
                <a href="#">
                    <img class="rounded-t-base h-50 w-full" src="{{ asset('images/logo.png') }}" alt="" />
                </a>
                <div class="p-6 text-start">

                    <div class="flex justify-between items-center ">
                        <h3 class=" text-white font-semibold text-xl">Monoblock Chairs</h3>
                        <p class="text-gray-300 text-[13px]">2,400+ units</p>
                    </div>
                    <p class="text-gray-300 mt-1">Monoblock · Banquet · Plastic</p>
                    <a href="#" class="text-[#18783b] flex hover:text-green-400 mt-2 font-medium">
                        View Details
                        <svg class="w-6 h-6 text-[#16A34A] dark:text-[#16A34A]" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>

                    </a>
                </div>
            </div>
            <div class="bg-[#041a0d] block max-w-full border border-[#09301a] rounded-base shadow-xs">
                <a href="#">
                    <img class="rounded-t-base h-50 w-full" src="{{ asset('images/logo.png') }}" alt="" />
                </a>
                <div class="p-6 text-start">

                    <div class="flex justify-between items-center ">
                        <h3 class=" text-white font-semibold text-xl">Monoblock Chairs</h3>
                        <p class="text-gray-300 text-[13px]">2,400+ units</p>
                    </div>
                    <p class="text-gray-300 mt-1">Monoblock · Banquet · Plastic</p>
                    <a href="#" class="text-[#18783b] flex hover:text-green-400 mt-2 font-medium">
                        View Details
                        <svg class="w-6 h-6 text-[#16A34A] dark:text-[#16A34A]" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>

                    </a>
                </div>
            </div>
            <div class="bg-[#041a0d] block max-w-full border border-[#09301a] rounded-base shadow-xs">
                <a href="#">
                    <img class="rounded-t-base h-50 w-full" src="{{ asset('images/logo.png') }}" alt="" />
                </a>
                <div class="p-6 text-start">

                    <div class="flex justify-between items-center ">
                        <h3 class=" text-white font-semibold text-xl">Monoblock Chairs</h3>
                        <p class="text-gray-300 text-[13px]">2,400+ units</p>
                    </div>
                    <p class="text-gray-300 mt-1">Monoblock · Banquet · Plastic</p>
                    <a href="#" class="text-[#18783b] flex hover:text-green-400 mt-2 font-medium">
                        View Details
                        <svg class="w-6 h-6 text-[#16A34A] dark:text-[#16A34A]" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>

                    </a>
                </div>
            </div>

        </div>
        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-full gap-2">




            <div class="bg-[#041a0d] block max-w-full border border-[#09301a] rounded-base shadow-xs">
                <a href="#">
                    <img class="rounded-t-base h-50 w-full" src="{{ asset('images/logo.png') }}" alt="" />
                </a>
                <div class="p-6 text-start">

                    <div class="flex justify-between items-center ">
                        <h3 class=" text-white font-semibold text-xl">Monoblock Chairs</h3>
                        <p class="text-gray-300 text-[13px]">2,400+ units</p>
                    </div>
                    <p class="text-gray-300 mt-1">Monoblock · Banquet · Plastic</p>
                    <a href="#" class="text-[#18783b] flex hover:text-green-400 mt-2 font-medium">
                        View Details
                        <svg class="w-6 h-6 text-[#16A34A] dark:text-[#16A34A]" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>

                    </a>
                </div>
            </div>
            <div class="bg-[#041a0d] block max-w-full border border-[#09301a] rounded-base shadow-xs">
                <a href="#">
                    <img class="rounded-t-base h-50 w-full" src="{{ asset('images/logo.png') }}" alt="" />
                </a>
                <div class="p-6 text-start">

                    <div class="flex justify-between items-center ">
                        <h3 class=" text-white font-semibold text-xl">Monoblock Chairs</h3>
                        <p class="text-gray-300 text-[13px]">2,400+ units</p>
                    </div>
                    <p class="text-gray-300 mt-1">Monoblock · Banquet · Plastic</p>
                    <a href="#" class="text-[#18783b] flex hover:text-green-400 mt-2 font-medium">
                        View Details
                        <svg class="w-6 h-6 text-[#16A34A] dark:text-[#16A34A]" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>

                    </a>
                </div>
            </div>
            <div class="bg-[#041a0d] block max-w-full border border-[#09301a] rounded-base shadow-xs">
                <a href="#">
                    <img class="rounded-t-base h-50 w-full" src="{{ asset('images/logo.png') }}" alt="" />
                </a>
                <div class="p-6 text-start">

                    <div class="flex justify-between items-center ">
                        <h3 class=" text-white font-semibold text-xl">Monoblock Chairs</h3>
                        <p class="text-gray-300 text-[13px]">2,400+ units</p>
                    </div>
                    <p class="text-gray-300 mt-1">Monoblock · Banquet · Plastic</p>
                    <a href="#" class="text-[#18783b] flex hover:text-green-400 mt-2 font-medium">
                        View Details
                        <svg class="w-6 h-6 text-[#16A34A] dark:text-[#16A34A]" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>

                    </a>
                </div>
            </div>

        </div>
    </section>
    <section id="why" class="scroll-mt-5 container mx-auto px-6 md:px-12 lg:px-20 py-15">
        <div class="max-w-4xl  text-start">

            <span class="inline-block px-4 py-2 bg-green-500/10 text-[#16A34A] rounded-full text-sm font-semibold">
                Why Choose Us
            </span>

            <h2 class="mt-2 text-3xl md:text-4xl lg:text-5xl font-[Poppins] font-bold text-white leading-tight">
                The Reliable Partner Behind
                <br><span class="text-[#16A34A]">Great Events</span>
            </h2>



        </div>
        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-full gap-2">


            <div class="bg-neutral-primary-soft transition duration-300 hover:-translate-y-2 block max-w-full p-6 border border-success rounded-base shadow-xs">
                <svg class="w-7 h-7 mb-3 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 21v-9m3-4H7.5a2.5 2.5 0 1 1 0-5c1.5 0 2.875 1.25 3.875 2.5M14 21v-9m-9 0h14v8a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-8ZM4 8h16a1 1 0 0 1 1 1v3H3V9a1 1 0 0 1 1-1Zm12.155-5c-3 0-5.5 5-5.5 5h5.5a2.5 2.5 0 0 0 0-5Z" />
                </svg>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-heading">Affordable Rental Rates</h5>
                </a>
                <p class="mb-3 text-body">
Honest pricing with transparent packages — no hidden fees.</p>
                <a href="#" class="inline-flex font-medium items-center text-fg-brand hover:underline">
                    See our guideline
                    <svg class="w-4 h-4 ms-2 rtl:rotate-270deg" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778" />
                    </svg>
                </a>
            </div>
            <div class="bg-neutral-primary-soft transition duration-300 hover:-translate-y-2 block max-w-full p-6 border border-default rounded-base shadow-xs">
                <svg class="w-7 h-7 mb-3 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 21v-9m3-4H7.5a2.5 2.5 0 1 1 0-5c1.5 0 2.875 1.25 3.875 2.5M14 21v-9m-9 0h14v8a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-8ZM4 8h16a1 1 0 0 1 1 1v3H3V9a1 1 0 0 1 1-1Zm12.155-5c-3 0-5.5 5-5.5 5h5.5a2.5 2.5 0 0 0 0-5Z" />
                </svg>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-heading">Well-Maintained Equipment</h5>
                </a>
                <p class="mb-3 text-body">
Every item is cleaned, inspected, and ready to go.</p>
                <a href="#" class="inline-flex font-medium items-center text-fg-brand hover:underline">
                    See our guideline
                    <svg class="w-4 h-4 ms-2 rtl:rotate-270deg" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778" />
                    </svg>
                </a>
            </div>
            <div class="bg-neutral-primary-soft transition duration-300 hover:-translate-y-2 block max-w-full p-6 border border-default rounded-base shadow-xs">
                <svg class="w-7 h-7 mb-3 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 21v-9m3-4H7.5a2.5 2.5 0 1 1 0-5c1.5 0 2.875 1.25 3.875 2.5M14 21v-9m-9 0h14v8a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-8ZM4 8h16a1 1 0 0 1 1 1v3H3V9a1 1 0 0 1 1-1Zm12.155-5c-3 0-5.5 5-5.5 5h5.5a2.5 2.5 0 0 0 0-5Z" />
                </svg>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-heading">Fast Delivery & Pickup</h5>
                </a>
                <p class="mb-3 text-body">
On-time delivery across the city, with setup support</p>
                <a href="#" class="inline-flex font-medium items-center text-fg-brand hover:underline">
                    See our guideline
                    <svg class="w-4 h-4 ms-2 rtl:rotate-270deg" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778" />
                    </svg>
                </a>
            </div>

        </div>
        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-full gap-2">


            <div class=" bg-[#041a0d] transition duration-300 hover:-translate-y-2 block max-w-full p-6 border border-green-500 rounded-base shadow-xs ">
                <svg class=" h-10 p-2 rounded-2xl mb-3 text-black bg-green-500 w-10 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 21v-9m3-4H7.5a2.5 2.5 0 1 1 0-5c1.5 0 2.875 1.25 3.875 2.5M14 21v-9m-9 0h14v8a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-8ZM4 8h16a1 1 0 0 1 1 1v3H3V9a1 1 0 0 1 1-1Zm12.155-5c-3 0-5.5 5-5.5 5h5.5a2.5 2.5 0 0 0 0-5Z" />
                </svg>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-white">Large Inventory</h5>
                </a>
                <p class="mb-3 text-md text-gray-300">10,000+ items in stock — no last-minute compromises.</p>

            </div>
            <div class="bg-neutral-primary-soft transition duration-300 hover:-translate-y-2 block max-w-full p-6 border border-default rounded-base shadow-xs">
                <svg class="w-7 h-7 mb-3 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 21v-9m3-4H7.5a2.5 2.5 0 1 1 0-5c1.5 0 2.875 1.25 3.875 2.5M14 21v-9m-9 0h14v8a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-8ZM4 8h16a1 1 0 0 1 1 1v3H3V9a1 1 0 0 1 1-1Zm12.155-5c-3 0-5.5 5-5.5 5h5.5a2.5 2.5 0 0 0 0-5Z" />
                </svg>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-heading">Flexible Rental Packages</h5>
                </a>
                <p class="mb-3 text-body">Day, weekend, or multi-day — built around your event.</p>
                <a href="#" class="inline-flex font-medium items-center text-fg-brand hover:underline">
                    See our guideline
                    <svg class="w-4 h-4 ms-2 rtl:rotate-270deg" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778" />
                    </svg>
                </a>
            </div>
            <div class="bg-neutral-primary-soft transition duration-300 hover:-translate-y-2 block max-w-full p-6 border border-default rounded-base shadow-xs">
                <svg class="w-7 h-7 mb-3 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 21v-9m3-4H7.5a2.5 2.5 0 1 1 0-5c1.5 0 2.875 1.25 3.875 2.5M14 21v-9m-9 0h14v8a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-8ZM4 8h16a1 1 0 0 1 1 1v3H3V9a1 1 0 0 1 1-1Zm12.155-5c-3 0-5.5 5-5.5 5h5.5a2.5 2.5 0 0 0 0-5Z" />
                </svg>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-heading">Trusted by Hundreds of Clients</h5>
                </a>
                <p class="mb-3 text-body">Weddings, fiestas, corporate galas, and more.</p>
                <a href="#" class="inline-flex font-medium items-center text-fg-brand hover:underline">
                    See our guideline
                    <svg class="w-4 h-4 ms-2 rtl:rotate-270deg" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778" />
                    </svg>
                </a>
            </div>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navbar = document.getElementById("navbar");

            window.addEventListener("scroll", function() {
                if (window.scrollY > 50) {
                    navbar.classList.add(
                        "bg-[#041a0d]/80",
                        "backdrop-blur-lg",
                        "border-b",
                        "border-white/10",
                        "shadow-lg"
                    );
                } else {
                    navbar.classList.remove(
                        "bg-white/10",
                        "backdrop-blur-lg",
                        "border-b",
                        "border-white/10",
                        "shadow-lg"
                    );
                }
            });
        });
    </script>
</body>

</html>
