<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }} - Login</title>

    <!-- Laravel Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@500;600;700&display=swap"
        rel="stylesheet">

    <style>
        @keyframes spin { to { transform: rotate(360deg); } }
        .spinner {
            display: inline-block;
            width: 1.25rem;
            height: 1.25rem;
            border: 2px solid rgba(255,255,255,0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 0.6s linear infinite;
        }
        .btn-loading {
            opacity: 0.8;
            cursor: not-allowed;
            pointer-events: none;
        }
    </style>
</head>

<body class="bg-gray-50 font-sans text-slate-900 antialiased min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md">
        <!-- Main Card -->
        <div class="bg-white rounded-2xl shadow-xl shadow-slate-200/60 border border-slate-100 overflow-hidden">
            <div class="p-8 md:p-10">
                <!-- Header -->
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-xl bg-brand/10 mb-4">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 w-10 object-contain">
                    </div>
                    <h1 class="text-2xl font-bold font-display text-slate-900">Welcome Back</h1>
                    <p class="text-slate-500 mt-2 text-sm">Please enter your details to sign in</p>
                </div>

                <form id="loginForm" action="{{ route('login') }}" method="POST" class="space-y-6">
                    @csrf

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-slate-700 mb-1.5">Email Address</label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-brand/20 focus:border-brand transition-all duration-200 outline-none placeholder:text-slate-400 text-sm"
                            placeholder="example@company.com">
                    </div>

                    <!-- Password -->
                    <div>
                        <div class="flex items-center justify-between mb-1.5">
                            <label for="password" class="block text-sm font-semibold text-slate-700">Password</label>
                            <a href="#" class="text-xs font-bold text-brand hover:underline">Forgot Password?</a>
                        </div>
                        <input type="password" id="password" name="password" required
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-brand/20 focus:border-brand transition-all duration-200 outline-none placeholder:text-slate-400 text-sm"
                            placeholder="•••••••••">
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center">
                        <input id="checkbox-remember" type="checkbox" name="remember"
                            class="w-4 h-4 text-brand border-slate-300 rounded focus:ring-brand/20">
                        <label for="checkbox-remember" class="ml-2 text-sm font-medium text-slate-600">Remember me for 30 days</label>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-2">
                        <button type="submit" id="loginButton"
                            class="w-full py-3.5 px-4 bg-brand hover:bg-brand-dark text-white font-bold rounded-lg shadow-lg shadow-brand/20 transition-all duration-200 transform active:scale-[0.98] focus:outline-none focus:ring-2 focus:ring-brand focus:ring-offset-2 flex items-center justify-center gap-2">
                            <span id="buttonText">Sign In</span>
                        </button>
                    </div>

                    <!-- Footer Link -->
                    <div class="text-center mt-8">
                        <p class="text-sm text-slate-600">
                            Not registered?
                            <a href="/register" class="font-bold text-brand hover:underline decoration-2 underline-offset-4">
                                Create an account
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Client-side form submission handler -->
    <script>
        (function() {
            const form = document.getElementById('loginForm');
            const loginButton = document.getElementById('loginButton');
            const buttonTextSpan = document.getElementById('buttonText');
            let isSubmitting = false;

            if (form && loginButton && buttonTextSpan) {
                form.addEventListener('submit', function(event) {
                    if (isSubmitting) {
                        event.preventDefault();
                        return false;
                    }

                    isSubmitting = true;
                    loginButton.classList.add('btn-loading');
                    loginButton.disabled = true;

                    // Create spinner
                    const spinner = document.createElement('span');
                    spinner.className = 'spinner';

                    buttonTextSpan.textContent = 'Signing in...';
                    loginButton.insertBefore(spinner, buttonTextSpan);

                    // Safety timeout
                    setTimeout(() => {
                        if (isSubmitting) {
                            isSubmitting = false;
                            loginButton.disabled = false;
                            loginButton.classList.remove('btn-loading');
                            spinner.remove();
                            buttonTextSpan.textContent = 'Sign In';
                        }
                    }, 10000);

                    return true;
                });
            }

            // Reset on back/forward
            window.addEventListener('pageshow', (e) => {
                if (e.persisted) {
                    isSubmitting = false;
                    loginButton.disabled = false;
                    loginButton.classList.remove('btn-loading');
                    const s = loginButton.querySelector('.spinner');
                    if(s) s.remove();
                    buttonTextSpan.textContent = 'Sign In';
                }
            });
        })();
    </script>

    @if(session('success'))
    <script>
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true
        });
            setTimeout(() => {
                window.location.href = "{{ session('redirect', url('/home')) }}";
            }, 2000);
    </script>
    @endif

    @if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Authentication Failed',
            text: "{{ session('error') }}",
            confirmButtonColor: '#10b981',
        });
    </script>
    @endif
</body>

</html>
