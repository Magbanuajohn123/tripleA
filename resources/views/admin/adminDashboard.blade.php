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



<nav class="fixed top-0 z-50 w-full bg-white border border-b border-default ">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start rtl:justify-end">
        <button data-drawer-target="top-bar-sidebar" data-drawer-toggle="top-bar-sidebar" aria-controls="top-bar-sidebar" type="button" class="sm:hidden text-white bg-transparent box-border border border-transparent hover:bg-neutral-secondary-medium focus:ring-4 focus:ring-neutral-tertiary font-medium leading-5 rounded-base text-sm p-2 focus:outline-none">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h10"/>
   </svg>
         </button>
        <a href="https://flowbite.com" class="flex ms-0 sm:ms-2 md:me-24">
          <img src="{{ asset('images/logo.png') }}" class="h-10 w-10 hidden sm:block" alt="FlowBite Logo" />
          <span class="self-center text-lg font-semibold whitespace-nowrap dark:text-dark ">Triple A Rental</span>
        </a>
      </div>
      <div class="flex items-center">
          <div class="flex items-center ms-3">
            <div>
              <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="{{ asset('images/logo.png') }}" alt="user photo">
              </button>
            </div>
            <div class="z-50 hidden bg-neutral-primary-medium border border-default-medium rounded-base shadow-lg w-44" id="dropdown-user">
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
                  <a href="#" class="inline-flex items-center w-full p-2 hover:bg-[#16A34A] hover:text-blackblack rounded" role="menuitem">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-blackblack rounded" role="menuitem">Settings</a>
                </li>
                <li>
                  <a href="#" class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-blackblack rounded" role="menuitem">Earnings</a>
                </li>
                <li>
                  <a href="#" class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-blackblack rounded" role="menuitem">Sign out</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
  </div>
</nav>

<aside id="top-bar-sidebar" class="fixed top-0 left-0 z-40 w-64 h-full transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 mt-15 py-4 overflow-y-auto bg-white  border-e border-default">
      <ul class="space-y-2 font-medium ">
        <p class="text-[12px] text-gray-500 px-2 py-1.5">WORKSPACE</p>
         <li>
            <a href="#" class="flex items-center px-2 py-1.5 text-gray-500 rounded-base hover:bg-[#16A34A] hover:text-white group">
               <svg class="w-5 h-5 transition duration-75 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6.025A7.5 7.5 0 1 0 17.975 14H10V6.025Z"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 3c-.169 0-.334.014-.5.025V11h7.975c.011-.166.025-.331.025-.5A7.5 7.5 0 0 0 13.5 3Z"/></svg>
               <span class="ms-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center px-2 py-1.5 text-gray-500  rounded-base hover:bg-[#16A34A] hover:text-white group">
               <svg class="shrink-0 w-5 h-5 transition duration-75 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v14M9 5v14M4 5h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z"/></svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Rentals</span>
            </a>
         </li>
         <li>
            <a href="/admin/adminProduct" class="flex items-center px-2 py-1.5 text-gray-500  rounded-base hover:bg-[#16A34A] hover:text-white group">
               <svg class="shrink-0 w-5 h-5 transition duration-75 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 13h3.439a.991.991 0 0 1 .908.6 3.978 3.978 0 0 0 7.306 0 .99.99 0 0 1 .908-.6H20M4 13v6a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-6M4 13l2-9h12l2 9M9 7h6m-7 3h8"/></svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
               <span class="inline-flex items-center justify-center w-4.5 h-4.5 ms-2 text-xs font-medium text-fg-danger-strong bg-danger-soft border border-danger-subtle rounded-full">2</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center px-2 py-1.5 text-gray-500  rounded-base hover:bg-[#16A34A] hover:text-white group">
               <svg class="shrink-0 w-5 h-5 transition duration-75 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M16 19h4a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-2m-2.236-4a3 3 0 1 0 0-4M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/></svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Customers</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center px-2 py-1.5 text-gray-500  rounded-base hover:bg-[#16A34A] hover:text-white group">
               <svg class="shrink-0 w-5 h-5 transition duration-75 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z"/></svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Transactions</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center px-2 py-1.5 text-gray-500  rounded-base hover:bg-neutral-tertiary hover:text-black group">
               <svg class="shrink-0 w-5 h-5 transition duration-75 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/></svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Reports</span>
            </a>
         </li>
      </ul>
   </div>
</aside>

<div class="p-4 sm:ml-64 mt-14">
   <div class="p-4 border border-default border-dashed rounded-base">
      <div class="grid grid-cols-3 gap-4 mb-4">
         <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
            <p class="text-fg-disabled">
               <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
            </p>
         </div>
         <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
            <p class="text-fg-disabled">
               <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
            </p>
         </div>
         <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
            <p class="text-fg-disabled">
               <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
            </p>
         </div>
      </div>
      <div class="flex items-center justify-center h-48 rounded-base bg-neutral-secondary-soft mb-4">
         <p class="text-fg-disabled">
               <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
         </p>
      </div>
      <div class="grid grid-cols-2 gap-4 mb-4">
         <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
            <p class="text-fg-disabled">
               <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
            </p>
         </div>
         <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
            <p class="text-fg-disabled">
               <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
            </p>
         </div>
         <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
            <p class="text-fg-disabled">
               <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
            </p>
         </div>
         <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
            <p class="text-fg-disabled">
               <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
            </p>
         </div>
      </div>
      <div class="flex items-center justify-center h-48 rounded-base bg-neutral-secondary-soft mb-4">
         <p class="text-fg-disabled">
               <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
         </p>
      </div>
      <div class="grid grid-cols-2 gap-4">
         <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
            <p class="text-fg-disabled">
               <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
            </p>
         </div>
         <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
            <p class="text-fg-disabled">
               <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
            </p>
         </div>
         <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
            <p class="text-fg-disabled">
               <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
            </p>
         </div>
         <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
            <p class="text-fg-disabled">
               <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
            </p>
         </div>
      </div>
   </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

</body>

</html>
