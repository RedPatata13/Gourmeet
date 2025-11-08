<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register - Gourmeet</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-white">
    <div class="min-h-screen flex flex-col lg:flex-row">
        <div class="flex-1 flex flex-col justify-center px-6 py-12 sm:px-12 lg:px-20">
            <div class="w-full max-w-md mx-auto">
                <div class="flex flex-col items-center text-center mb-10">
                    <div class="h-14 w-14 rounded-full bg-gray-900 text-white flex items-center justify-center shadow-lg">
                        <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor">
                            <path d="M221.9,155.1a12,12,0,0,0-17-1.9C186.1,168.6,157.8,180,128,180s-58.1-11.4-76.9-26.8a12,12,0,1,0-15.1,18.7C58.6,190,91.6,204,128,204s69.4-14,92-32.1A12,12,0,0,0,221.9,155.1Z"/>
                            <path d="M70.1,128.3A12,12,0,0,0,84,139.7c14.8-9.7,29.5-14.5,44-14.7v24a12,12,0,0,0,24,0v-24c14.5.2,29.2,5,44,14.7a12,12,0,1,0,13.9-11.4C189.8,117.7,161.6,108,128,108S66.2,117.7,70.1,128.3Z"/>
                            <path d="M76,88A52,52,0,0,1,128,36h0a52,52,0,0,1,52,52c0,2.5-.2,5-.5,7.4a12,12,0,0,0,23.7,3.2A76,76,0,1,0,52.8,95c.3-2.4.5-4.9.5-7.4Z"/>
                        </svg>
                    </div>
                    <h1 class="mt-6 text-3xl font-semibold text-gray-900">Gourmeet</h1>
                    <p class="mt-2 text-base text-gray-600">Create your Gourmeet account</p>
                </div>

                <div id="successMessage" class="hidden mb-6 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700"></div>

                <div id="errorMessage" class="hidden mb-6 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700"></div>

                <form id="registerForm" action="{{ route('register') }}" method="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-900 mb-2">Full Name</label>
                        <div class="relative">
                            <input
                                type="text"
                                name="name"
                                id="name"
                                placeholder="Enter your full name"
                                required
                                class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 text-gray-900 shadow-sm transition focus:border-gray-900 focus:bg-white focus:outline-none focus:ring-2 focus:ring-gray-900/20"
                            >
                            <div class="pointer-events-none absolute inset-y-0 right-4 flex items-center text-gray-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                </svg>
                            </div>
                        </div>
                        <div id="nameError" class="mt-2 text-sm text-red-600 hidden"></div>
                    </div>

                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-900 mb-2">Username</label>
                        <div class="relative">
                            <input
                                type="text"
                                name="username"
                                id="username"
                                placeholder="Choose a username"
                                required
                                class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 text-gray-900 shadow-sm transition focus:border-gray-900 focus:bg-white focus:outline-none focus:ring-2 focus:ring-gray-900/20"
                            >
                            <div class="pointer-events-none absolute inset-y-0 right-4 flex items-center text-gray-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                </svg>
                            </div>
                        </div>
                        <div id="usernameError" class="mt-2 text-sm text-red-600 hidden"></div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-900 mb-2">Email Address</label>
                        <div class="relative">
                            <input
                                type="email"
                                name="email"
                                id="email"
                                placeholder="you@example.com"
                                required
                                class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 text-gray-900 shadow-sm transition focus:border-gray-900 focus:bg-white focus:outline-none focus:ring-2 focus:ring-gray-900/20"
                            >
                            <div class="pointer-events-none absolute inset-y-0 right-4 flex items-center text-gray-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                </svg>
                            </div>
                        </div>
                        <div id="emailError" class="mt-2 text-sm text-red-600 hidden"></div>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-900 mb-2">Password</label>
                        <div class="relative">
                            <input
                                type="password"
                                name="password"
                                id="password"
                                placeholder="Create a password"
                                required
                                class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 text-gray-900 shadow-sm transition focus:border-gray-900 focus:bg-white focus:outline-none focus:ring-2 focus:ring-gray-900/20"
                            >
                            <div class="pointer-events-none absolute inset-y-0 right-4 flex items-center text-gray-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </div>
                        </div>
                        <div id="passwordError" class="mt-2 text-sm text-red-600 hidden"></div>
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-900 mb-2">Confirm Password</label>
                        <div class="relative">
                            <input
                                type="password"
                                name="password_confirmation"
                                id="password_confirmation"
                                placeholder="Re-enter your password"
                                required
                                class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 text-gray-900 shadow-sm transition focus:border-gray-900 focus:bg-white focus:outline-none focus:ring-2 focus:ring-gray-900/20"
                            >
                            <div class="pointer-events-none absolute inset-y-0 right-4 flex items-center text-gray-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between text-sm">
                        <label class="inline-flex items-center gap-2 text-gray-700">
                            <input
                                type="checkbox"
                                name="terms"
                                id="terms"
                                required
                                class="h-4 w-4 rounded border-gray-300 text-gray-900 focus:ring-gray-900"
                            >
                            I agree to the 
                            <a href="#" class="text-gray-900 hover:underline font-medium">Terms of Service</a> and 
                            <a href="#" class="text-gray-900 hover:underline font-medium">Privacy Policy</a>
                        </label>
                    </div>
                    <div id="termsError" class="mt-2 text-sm text-red-600 hidden"></div>

                    <button
                        type="submit"
                        id="submitButton"
                        class="w-full rounded-xl bg-gray-900 py-3 text-base font-semibold text-white shadow-lg transition hover:bg-black focus:outline-none focus:ring-2 focus:ring-gray-900/30 focus:ring-offset-2"
                    >
                        Create Account
                    </button>

                    <div id="loadingSpinner" class="hidden text-center mt-4">
                        <div class="inline-block animate-spin rounded-full h-6 w-6 border-b-2 border-gray-900"></div>
                        <p class="text-gray-600 mt-2">Creating your account...</p>
                    </div>
                </form>

                <p class="mt-6 text-center text-sm text-gray-600">
                    Already have an account?
                    <a href="{{ route('login') }}" class="font-semibold text-gray-900 hover:underline">Sign in</a>
                </p>
            </div>
        </div>

        <div class="relative hidden flex-1 lg:block">
            <div
                class="absolute inset-0 bg-cover bg-center"
                style="background-image: url('https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?auto=format&fit=crop&w=1600&q=80');"
            ></div>
            <div class="absolute inset-0 bg-black/30"></div>
            <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent p-10 text-white">
                <h2 class="text-lg font-semibold">Discover New Culinary Friends</h2>
                <p class="mt-2 max-w-md text-sm text-gray-100">Share your signature dishes, swap tips, and grow your cooking community with Gourmeet.</p>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('registerForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            resetMessages();
            showLoading(true);

            const formData = new FormData(this);

            try {
                const response = await fetch('{{ route('register') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                });

                const result = await response.json();

                if (response.ok) {
                    showSuccess('Account created successfully! Redirecting...');
                    setTimeout(() => {
                        window.location.href = '{{ route('home') }}';
                    }, 2000);
                } else {
                    if (result.errors) {
                        showFieldErrors(result.errors);
                    } else {
                        showError(result.message || 'An error occurred during registration.');
                    }
                }
            } catch (error) {
                showError('Network error. Please try again.');
            } finally {
                showLoading(false);
            }
        });

        function resetMessages() {
            document.getElementById('successMessage').classList.add('hidden');
            document.getElementById('errorMessage').classList.add('hidden');
            
            const errorElements = document.querySelectorAll('[id$="Error"]');
            errorElements.forEach(el => {
                el.classList.add('hidden');
                el.textContent = '';
            });
        }

        function showSuccess(message) {
            const successElement = document.getElementById('successMessage');
            successElement.textContent = message;
            successElement.classList.remove('hidden');
        }

        function showError(message) {
            const errorElement = document.getElementById('errorMessage');
            errorElement.textContent = message;
            errorElement.classList.remove('hidden');
        }

        function showFieldErrors(errors) {
            for (const [field, messages] of Object.entries(errors)) {
                const errorElement = document.getElementById(field + 'Error');
                if (errorElement) {
                    errorElement.textContent = messages[0];
                    errorElement.classList.remove('hidden');
                }
            }
        }

        function showLoading(show) {
            const submitButton = document.getElementById('submitButton');
            const loadingSpinner = document.getElementById('loadingSpinner');
            
            if (show) {
                submitButton.disabled = true;
                submitButton.classList.add('opacity-50', 'cursor-not-allowed');
                loadingSpinner.classList.remove('hidden');
            } else {
                submitButton.disabled = false;
                submitButton.classList.remove('opacity-50', 'cursor-not-allowed');
                loadingSpinner.classList.add('hidden');
            }
        }
    </script>
</body>
</html>
