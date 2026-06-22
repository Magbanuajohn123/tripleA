<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <title>Landing Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#ffffff] cursor-pointer">


    <nav id="navbar" class="bg-[#ffffff] fixed w-full z-20 top-0 ">
        <div class="max-w-7xl flex flex-wrap items-center justify-between mx-auto p-3">
            <a href="https://flowbite.com/" class="flex items-center space-x rtl:space-x-reverse">
                <img src="{{ asset('images/logo.png') }}" class="h-12 w-12 hidden lg:block md:block"
                    alt="Flowbite Logo">
                <span class="self-center text-xl text-[#030825] font-bold font-[Poppins] whitespace-nowrap">
                    Triple A <span class="text-[#029337]">Rental</span>
                </span>
            </a>

            <!-- Actions & Hamburger (Right Side) -->
            <div class="flex lg:order-2 space-x-3 lg:space-x-0 rtl:space-x-reverse items-center">
                <button type="button" onclick="login()"
                    class="text-gray-600 hidden sm:block focus:ring-4 hover:text-black focus:outline-none focus:ring-[#3b5998]/50 box-border border border-transparent font-medium leading-5 rounded-base text-sm px-4 py-2.5 text-center items-center">
                    Log in
                </button>
                <button type="button" onclick="goToRegister()"
                    class="group text-white hidden sm:block transition-all duration-400 bg-[#16A34A] hover:bg-[#0b8437] focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 box-border border border-transparent font-medium leading-5 rounded-base text-sm px-3 py-2 text-center items-center">
                    Register <i class="fa-solid fa-arrow-right-long group-hover:translate-x-1"></i>
                </button>

                <!-- Hamburger Button: Always visible on sm/md, hidden on lg -->
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

            <!-- Navigation Links (Collapsible) -->
            <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 lg:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 lg:space-x-8 rtl:space-x-reverse lg:flex-row lg:mt-0 lg:border-0 lg:bg-transparent">
                    <li>
                        <a href="#home"
                            class="nav-link relative inline-block py-2 px-3 text-md font-[Poppins] text-gray-600 rounded-sm lg:bg-transparent lg:p-0 transition-all duration-300 hover:text-black after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-green-500 after:transition-all after:duration-300 hover:after:w-full"
                            data-section="home">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#inventory"
                            class="nav-link relative inline-block py-2 px-3 font-[Poppins] text-gray-600 rounded hover:bg-neutral-tertiary lg:hover:bg-transparent lg:border-0 lg:hover:text-black lg:p-0 transition-all duration-300 after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-green-500 after:transition-all after:duration-300 hover:after:w-full"
                            data-section="inventory">
                            Inventory
                        </a>
                    </li>
                    <li>
                        <a href="#why-us"
                            class="nav-link relative inline-block py-2 px-3 font-[Poppins] text-gray-600 rounded hover:bg-neutral-tertiary lg:hover:bg-transparent lg:border-0 lg:hover:text-black lg:p-0 transition-all duration-300 after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-green-500 after:transition-all after:duration-300 hover:after:w-full"
                            data-section="why-us">
                            Why Us
                        </a>
                    </li>
                    <li>
                        <a href="#how-it-works"
                            class="nav-link relative inline-block py-2 px-3 font-[Poppins] text-gray-600 rounded hover:bg-neutral-tertiary lg:hover:bg-transparent lg:border-0 lg:hover:text-black lg:p-0 transition-all duration-300 after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-green-500 after:transition-all after:duration-300 hover:after:w-full"
                            data-section="how-it-works">
                            How it Works
                        </a>
                    </li>
                    <li>
                        <a href="#gallery"
                            class="nav-link relative inline-block py-2 px-3 font-[Poppins] text-gray-600 rounded hover:bg-neutral-tertiary lg:hover:bg-transparent lg:border-0 lg:hover:text-black lg:p-0 transition-all duration-300 after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-green-500 after:transition-all after:duration-300 hover:after:w-full"
                            data-section="gallery">
                            Gallery
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- Page Sections -->
    <section id="home" class="min-h-screen bg-[#ffffff] pt-25 md:pt-30 lg:pt-30  pb-20 overflow-x-hidden">
        <div class="flex justify-between items-center flex-col md:flex-row lg:flex-row w-full max-w-7xl mx-auto px-4">
            <div class="w-full lg:block lg:w-1/2 md:block md:w-1/2 flex flex-col justify-center items-center">
                <p
                    class="relative rounded-3xl w-3/4 sm:w-full md:w-1/2 lg:w-1/3 md:text-center text-center  font-bold bg-[#DCFCE7] text-[#029337] text-[9px] lg:text-[11px] mb-2 p-2 border border-[#029337]">
                    Trusted by 500+ event planner</p>
                <h1 class="text-2xl text-center md:text-5xl lg:text-start font-[Poppins] font-bold text-[#030825]">
                    Welcome back,
                    <span>
                        {{ Auth::user()->email }}
                    </span>

                    <span class="text-[#029337]">
                        Delivered <br>On Time.
                    </span>
                </h1>
                <p class="font-[Poppins] text-xs md:text-sm mt-2 text-gray-500">From elegant weddings to corporate galas
                    — rent chairs,
                    tables, tents, catering equipment, and full buffet stations. Same-day delivery, spotless inventory,
                    hassle-free booking.</p>
                <div class="flex ">
                    <button type="button"
                        class="h-10 mt-2 me-2 transition transform hover:-translate-y-1 duration-500 hover:bg-[#03782e]
    text-white bg-[#029337] focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50
    font-medium rounded-base text-sm px-4 inline-flex items-center gap-2 cursor-pointer">

                        Book Equipment
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>
                    </button>

                    <button type="button"
                        class="h-10 mt-2 text-gray-900  border border-[#029337] hover:bg-[#3b5998]/90 transform transition hover:-translate-y-1 duration-500
    focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50
    font-medium rounded-base text-sm px-4 inline-flex items-center cursor-pointer">

                        View Inventory
                    </button>
                </div>
            </div>
            <div class="w-full lg:w-1/2 md:w-1/2">
                <img class=" h-57.5 md:h-97.5 mt-4 lg:mt-0 lg:h-137.5 w-full object-cover   rounded-4xl"
                    src="{{ asset('images/hero-event.jpg') }}" alt="">
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navbar = document.getElementById("navbar");

            window.addEventListener("scroll", function() {
                if (window.scrollY > 50) {
                    navbar.classList.add(
                        "bg-white/5",
                        "backdrop-blur-xl",
                        "border-b",
                        "border-white/10",

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

        function goToRegister() {
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: "Redirecting to Registration",
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true
            });
            setTimeout(() => {
                window.location.href = "{{ url('/register') }}";
            }, 2000);
        }

        function login() {
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: "Redirecting to Registration",
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true
            });
            setTimeout(() => {
                window.location.href = "{{ route('login.form') }}";
            }, 2000);
        }
    </script>

    <!-- Active Link Highlighting Script (Scroll Spy) -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navLinks = document.querySelectorAll(".nav-link");
            const sections = document.querySelectorAll("section");

            // Classes that should ONLY be present when a link is active
            // This includes the green underline (after:w-full)
            const activeOnlyClasses = ["text-black", "after:w-full"];

            function updateActiveLink() {
                let current = "";

                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    // Offset for better user experience
                    if (window.scrollY >= sectionTop - 150) {
                        current = section.getAttribute("id");
                    }
                });

                navLinks.forEach(link => {
                    // Remove active state
                    link.classList.remove(...activeOnlyClasses);

                    // Re-add default text color for inactive links
                    link.classList.add("text-gray-600");

                    // If current link matches section in view, apply active styling
                    if (current && link.getAttribute("data-section") === current) {
                        link.classList.remove("text-gray-600");
                        link.classList.add(...activeOnlyClasses);
                    }
                });
            }

            window.addEventListener("scroll", updateActiveLink);
            updateActiveLink(); // Run on load

            // Handle smooth scroll on click
            navLinks.forEach(link => {
                link.addEventListener("click", function(e) {
                    const href = this.getAttribute("href");
                    if (href.startsWith("#")) {
                        e.preventDefault();
                        const targetId = href.substring(1);
                        const targetSection = document.getElementById(targetId);
                        if (targetSection) {
                            targetSection.scrollIntoView({
                                behavior: "smooth"
                            });
                        }
                    }
                });
            });
        });
    </script>

</body>

</html>
