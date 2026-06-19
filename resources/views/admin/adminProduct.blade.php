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

<body class="bg-[#f2fef6] ">

    <nav class="fixed top-0 z-40 w-full bg-white border border-b border-default ">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <!-- Updated Toggle Button: Removed Flowbite data attributes to use custom logic -->
                    <button id="sidebar-toggle" type="button"
                        class="sm:hidden text-black bg-transparent box-border border border-transparent hover:bg-neutral-secondary-medium focus:ring-4 focus:ring-neutral-tertiary font-medium leading-5 rounded-base text-sm p-2 focus:outline-none">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M5 7h14M5 12h14M5 17h10" />
                        </svg>
                    </button>
                    <a href="https://flowbite.com" class="flex ms-0 sm:ms-2 md:me-24">
                        <img src="{{ asset('images/logo.png') }}" class="h-10 w-10 hidden sm:block"
                            alt="FlowBite Logo" />
                        <span class="self-center text-lg font-semibold whitespace-nowrap dark:text-dark ">Triple A
                            Rental</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <div>
                            <button type="button"
                                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full" src="{{ asset('images/logo.png') }}" alt="user photo">
                            </button>
                        </div>
                        <div class="z-50 hidden bg-neutral-primary-medium border border-default-medium rounded-base shadow-lg w-44"
                            id="dropdown-user">
                            <div class="px-4 py-3 border-b border-default-medium" role="none">
                                <p class="text-sm font-medium text-heading" role="none">
                                    Neil Sims
                                </p>
                                <p class="text-sm text-white truncate" role="none">
                                    neil.sims@flowbite.com
                                </p>
                            </div>
                            <ul class="p-2 text-sm text-body font-medium" role="none">
                                <li>
                                    <a href="#"
                                        class="inline-flex items-center w-full p-2 hover:bg-[#16A34A] hover:text-blackblack rounded"
                                        role="menuitem">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-blackblack rounded"
                                        role="menuitem">Settings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-blackblack rounded"
                                        role="menuitem">Earnings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-blackblack rounded"
                                        role="menuitem">Sign out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <aside id="top-bar-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-full transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 mt-15 py-4 overflow-y-auto bg-white  border-e border-default">
            <ul class="space-y-2 font-medium ">
                <p class="text-[12px] text-gray-500 px-2 py-1.5">WORKSPACE</p>
                <li>
                    <a href="#"
                        class="flex items-center px-2 py-1.5 text-gray-500 rounded-base hover:bg-[#16A34A] hover:text-white group">
                        <svg class="w-5 h-5 transition duration-75 group-hover:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 6.025A7.5 7.5 0 1 0 17.975 14H10V6.025Z" />
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13.5 3c-.169 0-.334.014-.5.025V11h7.975c.011-.166.025-.331.025-.5A7.5 7.5 0 0 0 13.5 3Z" />
                        </svg>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-2 py-1.5 text-gray-500  rounded-base hover:bg-[#16A34A] hover:text-white group">
                        <svg class="shrink-0 w-5 h-5 transition duration-75 group-hover:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 5v14M9 5v14M4 5h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Rentals</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-2 py-1.5 text-gray-500  rounded-base hover:bg-[#16A34A] hover:text-white group">
                        <svg class="shrink-0 w-5 h-5 transition duration-75 group-hover:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 13h3.439a.991.991 0 0 1 .908.6 3.978 3.978 0 0 0 7.306 0 .99.99 0 0 1 .908-.6H20M4 13v6a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-6M4 13l2-9h12l2 9M9 7h6m-7 3h8" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
                        <span
                            class="inline-flex items-center justify-center w-4.5 h-4.5 ms-2 text-xs font-medium text-fg-danger-strong bg-danger-soft border border-danger-subtle rounded-full">2</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-2 py-1.5 text-gray-500  rounded-base hover:bg-[#16A34A] hover:text-white group">
                        <svg class="shrink-0 w-5 h-5 transition duration-75 group-hover:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M16 19h4a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-2m-2.236-4a3 3 0 1 0 0-4M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Customers</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-2 py-1.5 text-gray-500  rounded-base hover:bg-[#16A34A] hover:text-white group">
                        <svg class="shrink-0 w-5 h-5 transition duration-75 group-hover:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Transactions</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-2 py-1.5 text-gray-500  rounded-base hover:bg-neutral-tertiary hover:text-black group">
                        <svg class="shrink-0 w-5 h-5 transition duration-75 group-hover:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Reports</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64 mt-14">
        <div class="p-4 border border-default border-dashed rounded-base">

            <!-- Modal toggle button -->
            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                class="text-white bg-brand flex box-border border border-transparent float-right hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none"
                type="button">
                <svg class="w-5 h-5 text-gray-800 text-sm dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 12h14m-7 7V5" />
                </svg>
                Add Product
            </button>


            <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
                <table class="w-full text-sm text-left rtl:text-right text-body">
                    <caption class="p-5 text-lg font-medium text-left rtl:text-right text-heading">
                        Our products
                        <p class="mt-1.5 text-sm font-normal text-body">Browse a list of Flowbite products designed to
                            help you work and play, stay organized, get answers, keep in touch, grow your business, and
                            more.</p>
                    </caption>
                    <thead
                        class="text-sm text-body bg-neutral-secondary-medium border-b border-t border-default-medium">
                        <tr>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Product Image
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Product name
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Quantity
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Price per Pc.
                            </th>

                            <th scope="col" class="px-6 py-3 font-medium">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inventory as $item)
                            <tr class="bg-neutral-primary-soft border-b border-default">
                                <td>
                                    <img src="{{ asset('storage/' . $item->product_image) }}"
                                        class="h-20 w-full py-2 px-2" alt="">
                                </td>
                                <td scope="col" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                    {{ $item->product_name }}
                                </td>
                                <td class="px-6 py-4 ">
                                    {{ $item->product_quantity }}
                                </td>
                                <td class="px-6 py-4 ">
                                    {{ $item->price_per_pc }}
                                </td>
                                <td class="px-6 py-4 flex ">
                                    <button type="button"
                                        class="text-success bg-neutral-secondary-medium border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none"
                                        data-modal-target="update-modal" data-modal-toggle="update-modal"
                                        onclick="updateProduct('{{ $item->product_id }}','{{ $item->product_name }}','{{ $item->product_quantity }}','{{ $item->price_per_pc }}')">Edit</button>
                                    <form action="{{ route('admin.Deleteproduct') }}" method="POST">
                                        @csrf

                                        <input type="hidden" name="product_id" value="{{ $item->product_id }}">

                                        <button data-modal-target="popup-modal-{{ $item->product_id }}"
                                            data-modal-toggle="popup-modal-{{ $item->product_id }}" type="button"
                                            class="text-white bg-red-600 px-4 py-2 rounded">
                                            Delete
                                        </button>

                                        <div id="popup-modal-{{ $item->product_id }}" tabindex="-1"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

                                            <div class="relative p-4 w-full max-w-md max-h-full">
                                                <div class="relative bg-white rounded-lg shadow">

                                                    <div class="p-5 text-center">
                                                        <h3 class="mb-5 text-lg font-normal text-gray-500">
                                                            Are you sure you want to delete this product?
                                                        </h3>

                                                        <button type="submit"
                                                            class="text-white bg-red-600 hover:bg-red-800 px-5 py-2.5 rounded">
                                                            Yes, Delete
                                                        </button>

                                                        <button data-modal-hide="popup-modal-{{ $item->product_id }}"
                                                            type="button"
                                                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded">
                                                            Cancel
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>



        </div>
    </div>


    <!-- Update Modal -->
    <div id="update-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-neutral-primary-soft border border-default rounded-base shadow-sm p-4 md:p-6">
                <div class="flex items-center justify-between border-b border-default pb-4 md:pb-5">
                    <h3 class="text-lg font-medium text-heading">
                        Update product
                    </h3>
                    <button type="button"
                        class="text-body bg-transparent hover:bg-neutral-tertiary hover:text-heading rounded-base text-sm w-9 h-9 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="update-modal">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form action="{{ route('admin.Updateproduct') }}" method="POST">
                    @csrf
                    <div class="grid gap-4 grid-cols-2 py-4 md:py-6">
                        <input type="hidden" name="id" id="update_id">
                        <div class="col-span-2">
                            <label for="update_product_name" class="block mb-2.5 text-sm font-medium text-heading">Name</label>
                            <input type="text" name="product_name" id="update_product_name"
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                                placeholder="Type product name" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="update_product_quantity"
                                class="block mb-2.5 text-sm font-medium text-heading">Quantity</label>
                            <input type="number" name="product_quantity" id="update_product_quantity"
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                                placeholder="Quantity" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="update_price_per_pc" class="block mb-2.5 text-sm font-medium text-heading">Price</label>
                            <input type="number" name="price_per_pc" id="update_price_per_pc"
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                                placeholder="Price" required="">
                        </div>
                    </div>
                    <div class="flex items-center space-x-4 border-t border-default pt-4 md:pt-6">
                        <button type="submit"
                            class="inline-flex items-center  text-white bg-brand hover:bg-brand-strong box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                            Update product
                        </button>
                        <button data-modal-hide="update-modal" type="button"
                            class="text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Create Modal -->
    <div id="crud-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem )] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-neutral-primary-soft border border-default rounded-base shadow-sm p-4 md:p-6">
                <div class="flex items-center justify-between border-b border-default pb-4 md:pb-5">
                    <h3 class="text-lg font-medium text-heading">
                        Create new product
                    </h3>
                    <button type="button"
                        class="text-body bg-transparent hover:bg-neutral-tertiary hover:text-heading rounded-base text-sm w-9 h-9 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="crud-modal">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form action="{{ route('admin.Addproduct') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-4 grid-cols-2 py-4 md:py-6">
                        <div class="col-span-2">
                            <label for="product_name" class="block mb-2.5 text-sm font-medium text-heading">Product Name:</label>
                            <input type="text" name="product_name" id="product_name"
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                                placeholder="Type product name" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="product_quantity"
                                class="block mb-2.5 text-sm font-medium text-heading">Quantity</label>
                            <input type="number" name="product_quantity" id="product_quantity"
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                                placeholder="e.g., 10" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="price_per_pc" class="block mb-2.5 text-sm font-medium text-heading">Price per Pc.</label>
                            <input type="number" step="0.01" name="price_per_pc" id="price_per_pc"
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                                placeholder="e.g., 29.99" required="">
                        </div>
                        <div class="col-span-1 sm:col-span-2">
                            <label for="product_image" class="block mb-2.5 text-sm font-medium text-heading">Product Image:</label>
                            <input
                                class="cursor-pointer bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full shadow-xs placeholder:text-body"
                                id="product_image" name="product_image" type="file">
                        </div>
                    </div>
                    <div class="flex items-center space-x-4 border-t border-default pt-4 md:pt-6">
                        <button type="submit"
                            class="inline-flex items-center  text-white bg-brand hover:bg-brand-strong box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                            Add new product
                        </button>
                        <button data-modal-hide="crud-modal" type="button"
                            class="text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if (session('success'))
        <div id="toast-success" class="fixed top-5 right-5 z-50 p-4 bg-green-100 text-green-700 rounded-lg shadow">
            {{ session('success') }}
        </div>
        <script>
            setTimeout(() => {
                window.location.href = "{{ session('redirect') }}";
            }, 2000);
        </script>
    @endif

    @if (session('error'))
        <div id="toast-error" class="fixed top-5 right-5 z-50 p-4 bg-red-100 text-red-700 rounded-lg shadow">
            {{ session('error') }}
        </div>
        <script>
            setTimeout(() => {
                document.getElementById('toast-error').remove();
            }, 2000);
        </script>
    @endif

    <script>
        function updateProduct(id, name, quantity, price) {
            document.getElementById("update_id").value = id;
            document.getElementById("update_product_name").value = name;
            document.getElementById("update_product_quantity").value = quantity;
            document.getElementById("update_price_per_pc").value = price;
        }

        // --- Custom Sidebar Logic for Mobile ---
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('top-bar-sidebar');
            const toggleBtn = document.getElementById('sidebar-toggle');

            if (sidebar && toggleBtn) {
                // Toggle sidebar when clicking the hamburger button
                toggleBtn.addEventListener('click', function(e) {
                    e.stopPropagation(); // Prevent immediate closing from the document listener
                    sidebar.classList.toggle('-translate-x-full');
                });

                // Close sidebar when clicking anywhere outside
                document.addEventListener('click', function(event) {
                    const isClickInsideSidebar = sidebar.contains(event.target);
                    const isClickOnToggle = toggleBtn.contains(event.target);

                    // If sidebar is open and click is outside both sidebar and toggle button
                    if (!isClickInsideSidebar && !isClickOnToggle && !sidebar.classList.contains('-translate-x-full')) {
                        sidebar.classList.add('-translate-x-full');
                    }
                });

                // Prevent sidebar closing when clicking inside the sidebar
                sidebar.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

</body>

</html>
