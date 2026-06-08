<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@500;600;700&display=swap"
        rel="stylesheet">
</head>

<body class="bg-[#041a0d] flex items-center justify-center min-h-screen">

    <div class="w-full max-w-sm bg-neutral-primary-soft p-6 border border-default rounded-base shadow-xs">

        <form action="/register" method="POST">
            @csrf

            <img src="{{ asset('images/logo.png') }}" alt="Company Logo"
                class="mx-auto h-16 w-16 mb-2">

            <h5 class="text-xl font-semibold text-center text-heading mb-6">
                Create your account
            </h5>

            <!-- Name -->
            <div class="mb-4">
                <label for="name" class="block mb-2.5 text-sm font-medium text-heading">
                    Full Name
                </label>
                <input type="text" id="name" name="name"
                    class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                    placeholder="John Doe" required>
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block mb-2.5 text-sm font-medium text-heading">
                    Email Address
                </label>
                <input type="email" id="email" name="email"
                    class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                    placeholder="example@company.com" required>
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block mb-2.5 text-sm font-medium text-heading">
                    Password
                </label>
                <input type="password" id="password" name="password"
                    class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                    placeholder="••••••••" required>
            </div>
            <button type="submit"
                class="text-white bg-brand border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none w-full mb-3">
                Create Account
            </button>

            <div class="text-sm font-medium text-body text-center">
                Already have an account?
                <a href="/login"
                    class="text-fg-brand hover:underline">
                    Sign In
                </a>
            </div>

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
@if(session('success'))
<div id="toast-success"
    class="fixed top-5 right-5 z-50 p-4 bg-green-100 text-green-700 rounded-lg shadow">
    {{ session('success') }}
</div>

<script>
    setTimeout(() => {
        window.location.href = "/login";
    }, 2000); // 2 seconds delay
</script>
@endif
</body>

</html>
