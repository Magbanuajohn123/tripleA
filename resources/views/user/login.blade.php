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

    <style>
        /* Additional inline styles for spinner animation and transitions */
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        .spinner {
            display: inline-block;
            width: 1rem;
            height: 1rem;
            border: 2px solid rgba(255,255,255,0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 0.6s linear infinite;
            margin-right: 0.5rem;
            vertical-align: middle;
        }
        .btn-loading {
            opacity: 0.7;
            cursor: not-allowed;
            pointer-events: none;
        }
        .transition-fade {
            transition: all 0.2s ease;
        }
    </style>
</head>
<body class="bg-[#041a0d] flex items-center justify-center h-screen">
    <div class="h-50"></div>
    <div class="w-full max-w-sm bg-neutral-primary-soft p-6 border border-default rounded-base shadow-xs">
        <form id="loginForm" action="{{ route('login') }}" method="POST">
            @csrf
            <img src="{{ asset('images/logo.png') }}" alt="Company Logo" class="mx-auto h-15 w-15 mb-2">
            <h5 class="text-xl font-semibold text-center text-heading mb-6">Sign in to your account</h5>
            <div class="mb-4">
                <label for="email" class="block mb-2.5 text-sm font-medium text-heading">Your email</label>
                <input type="email" id="email" name="email"
                    class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                    placeholder="example@company.com" required />
            </div>
            <div>
                <label for="password" class="block mb-2.5 text-sm font-medium text-heading">Your password</label>
                <input type="password" id="password" name="password"
                    class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                    placeholder="•••••••••" required />
            </div>
            <div class="flex items-start my-6">
                <div class="flex items-center">
                    <input id="checkbox-remember" type="checkbox" name="remember" value=""
                        class="w-4 h-4 border border-default-medium rounded-xs bg-neutral-secondary-medium focus:ring-2 focus:ring-brand-soft">
                    <label for="checkbox-remember" class="ms-2 text-sm font-medium text-heading">Remember me</label>
                </div>
                <a href="#" class="ms-auto text-sm font-medium text-fg-brand hover:underline">Lost Password?</a>
            </div>
            <button type="submit" id="loginButton"
                class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none w-full mb-3 transition-fade flex items-center justify-center">
                <span id="buttonText">Login to your account</span>
            </button>
            <div class="text-sm font-medium text-body">Not registered? <a href="#"
                    class="text-fg-brand hover:underline">Create account</a></div>
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
            window.location.href = "{{ session('redirect') }}";
        }, 2000);
    </script>
    @endif

    @if(session('error'))
    <div id="toast-error"
        class="fixed top-5 right-5 z-50 p-4 bg-red-100 text-red-700 rounded-lg shadow">
        {{ session('error') }}
    </div>
    <script>
        setTimeout(() => {
            let toast = document.getElementById('toast-error');
            if(toast) toast.remove();
        }, 2000);
    </script>
    @endif

    <!-- Client-side form submission handler with loading spinner state -->
    <script>
        (function() {
            const form = document.getElementById('loginForm');
            const loginButton = document.getElementById('loginButton');
            const buttonTextSpan = document.getElementById('buttonText');

            // Store original button content and disable state management
            let isSubmitting = false;

            if (form && loginButton && buttonTextSpan) {
                form.addEventListener('submit', function(event) {
                    // If already submitting, prevent double submission
                    if (isSubmitting) {
                        event.preventDefault();
                        return false;
                    }

                    // Get email and password fields to check basic validation
                    const emailInput = document.getElementById('email');
                    const passwordInput = document.getElementById('password');
                    let isValid = true;

                    // Simple client-side validation to avoid showing spinner if fields are empty
                    if (!emailInput || !emailInput.value.trim()) {
                        // Optional: you can show a small error message, but we just prevent spinner
                        isValid = false;
                        if (emailInput) {
                            emailInput.classList.add('border-red-500');
                            setTimeout(() => {
                                emailInput.classList.remove('border-red-500');
                            }, 2000);
                        }
                    }

                    if (!passwordInput || !passwordInput.value) {
                        isValid = false;
                        if (passwordInput) {
                            passwordInput.classList.add('border-red-500');
                            setTimeout(() => {
                                passwordInput.classList.remove('border-red-500');
                            }, 2000);
                        }
                    }

                    if (!isValid) {
                        event.preventDefault();
                        return false;
                    }

                    // Mark as submitting to prevent multiple clicks
                    isSubmitting = true;

                    // Change button appearance: show spinner, update text, disable button
                    loginButton.classList.add('btn-loading');
                    loginButton.disabled = true;

                    // Remove existing spinner if any (to avoid duplicates)
                    const existingSpinner = loginButton.querySelector('.spinner');
                    if (existingSpinner) existingSpinner.remove();

                    // Create spinner element
                    const spinner = document.createElement('span');
                    spinner.className = 'spinner';
                    spinner.setAttribute('aria-hidden', 'true');

                    // Clear current button text and prepend spinner, then set new text
                    buttonTextSpan.textContent = 'Logging in...';
                    buttonTextSpan.style.verticalAlign = 'middle';

                    // Insert spinner before the text span
                    loginButton.insertBefore(spinner, buttonTextSpan);

                    // Also add a small style adjustment for flex alignment
                    loginButton.style.gap = '0.5rem';

                    // NOTE: The form will submit normally to Laravel route.
                    // If there's a network error, we need to recover from loading state?
                    // Actually browser will navigate so no need. But in case validation fails server-side
                    // and returns same page with error, we need to reset loading state if page stays.
                    // However since the form submits and page reloads on error/success, the state will reset naturally.
                    // But if the server returns HTML (validation error) without redirect, the script re-executes.
                    // But original button might still have disabled attribute? We'll handle a safety timeout?
                    // To be robust: if after 10 seconds still loading (network hanging), reset? But better keep minimal.

                    // Edge case: If form submission fails due to network issues, the page won't reload.
                    // We will listen for 'load' on window? Not reliable. Instead, we can set a safety timeout
                    // that re-enables button if no navigation after 12 seconds (meaning maybe connection drop)
                    let recoveryTimeout = setTimeout(function() {
                        if (isSubmitting && document.body.contains(loginButton)) {
                            // Reset button state if still in loading mode (form didn't submit successfully)
                            isSubmitting = false;
                            loginButton.disabled = false;
                            loginButton.classList.remove('btn-loading');
                            const spinnerElem = loginButton.querySelector('.spinner');
                            if (spinnerElem) spinnerElem.remove();
                            buttonTextSpan.textContent = 'Login to your account';
                            loginButton.style.gap = '';
                            // Optional: show a temporary error message
                            let errorToast = document.createElement('div');
                            errorToast.className = 'fixed top-5 right-5 z-50 p-4 bg-red-100 text-red-700 rounded-lg shadow';
                            errorToast.textContent = 'Network error or timeout. Please try again.';
                            document.body.appendChild(errorToast);
                            setTimeout(() => errorToast.remove(), 3000);
                        }
                    }, 15000); // 15 seconds timeout

                    // Store the timeout ID on the form so if actual submission works and page unloads, it's fine
                    form.recoveryTimeout = recoveryTimeout;

                    // Allow form to continue submission. If page unloads, timeout is irrelevant.
                    // Note: No event.preventDefault() so the form submits normally.
                    return true;
                });
            }

            // Optional: In case the page is shown because of server-side validation error,
            // we want to reset button state. Since on reload, the button will be fresh, but if for some
            // reason the server returns the same view with errors via redirect back, we will reset anyway.
            // But we also add a small reset for browser back/forward cache.
            window.addEventListener('pageshow', function(event) {
                if (loginButton && buttonTextSpan) {
                    // Reset button state if it was stuck
                    loginButton.disabled = false;
                    loginButton.classList.remove('btn-loading');
                    const stuckSpinner = loginButton.querySelector('.spinner');
                    if (stuckSpinner) stuckSpinner.remove();
                    buttonTextSpan.textContent = 'Login to your account';
                    loginButton.style.gap = '';
                    if (window.loginTimeout) clearTimeout(window.loginTimeout);
                }
                isSubmitting = false;
            });
        })();
    </script>

    <!-- Additional fallback: disable double submit for any accidental re-click -->
    <script>
        // Also handle the case where the user clicks multiple times before JS loads, but JS handles it.
        // Additional protection: native form attribute? not needed.
    </script>
</body>
</html>
