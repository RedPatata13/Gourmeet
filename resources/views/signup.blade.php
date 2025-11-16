<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register - Gourmeet</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <!-- container -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <!-- container -->
            <div class="bg-gray-900 px-6 py-8 text-center">
                <div class="flex justify-center">
                    <div class="h-12 w-12 bg-white rounded-full shadow-lg flex items-center justify-center">
                        <svg class="h-6 w-6 text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                            <rect width="256" height="256" fill="none"/>
                            <line x1="96" y1="160" x2="88" y2="128" stroke="currentColor" stroke-width="16" stroke-linecap="round"/>
                            <line x1="160" y1="160" x2="168" y2="128" stroke="currentColor" stroke-width="16" stroke-linecap="round"/>
                            <line x1="128" y1="160" x2="128" y2="128" stroke="currentColor" stroke-width="16" stroke-linecap="round"/>
                            <path d="M173.65,65.12A48,48,0,1,1,184,160H72A48,48,0,1,1,82.35,65.12" fill="none" stroke="currentColor" stroke-width="16" stroke-linecap="round"/>
                            <path d="M80,80a48,48,0,0,1,96,0" fill="none" stroke="currentColor" stroke-width="16" stroke-linecap="round"/>
                            <path d="M200,157.27V208a8,8,0,0,1-8,8H64a8,8,0,0,1-8-8V157.27" fill="none" stroke="currentColor" stroke-width="16" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>
                <h1 class="mt-4 text-2xl font-bold text-white">Gourmeet</h1>
                <p class="text-gray-300 mt-2">Join our cooking community</p>
            </div>

            <!-- main form -->
            <div class="px-6 py-8">
                <h2 class="text-xl font-semibold text-gray-900 text-center mb-2">Create Account</h2>
                <p class="text-gray-600 text-center text-sm mb-8">Start sharing your recipes today</p>

                <!-- success -->
                <div id="successMessage" class="hidden mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg"></div>

                <!-- error -->
                <div id="errorMessage" class="hidden mb-4 p-4 text-sm text-red-700 bg-red-100 rounded-lg"></div>

                <form id="registerForm" action="{{ route('register') }}" method="POST">
                    @csrf
                    
                    <!-- name -->
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                            Full Name
                        </label>
                        <div class="relative">
                            <input 
                                type="text" 
                                name="name" 
                                id="name"
                                placeholder="Enter your full name" 
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent transition-all duration-200"
                            >
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </div>
                        </div>
                        <div id="nameError" class="mt-2 text-sm text-red-600 hidden"></div>
                    </div>

                    <!-- username -->
                    <div class="mb-4">
                        <label for="username" class="block text-sm font-medium text-gray-700 mb-2">
                            Username
                        </label>
                        <div class="relative">
                            <input 
                                type="text" 
                                name="username" 
                                id="username"
                                placeholder="Choose a username" 
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent transition-all duration-200"
                            >
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/>
                                </svg>
                            </div>
                        </div>
                        <div id="usernameError" class="mt-2 text-sm text-red-600 hidden"></div>
                    </div>

                    <!-- email -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email Address
                        </label>
                        <div class="relative">
                            <input 
                                type="email" 
                                name="email" 
                                id="email"
                                placeholder="Enter your email" 
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent transition-all duration-200"
                            >
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                                </svg>
                            </div>
                        </div>
                        <div id="emailError" class="mt-2 text-sm text-red-600 hidden"></div>
                    </div>

                    <!-- password -->
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                            Password
                        </label>
                        <div class="relative">
                            <input 
                                type="password" 
                                name="password" 
                                id="password"
                                placeholder="Create a password" 
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent transition-all duration-200"
                            >
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </div>
                        </div>
                        <div id="passwordError" class="mt-2 text-sm text-red-600 hidden"></div>
                    </div>

                    <!-- confirm -->
                    <div class="mb-6">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">
                            Confirm Password
                        </label>
                        <div class="relative">
                            <input 
                                type="password" 
                                name="password_confirmation" 
                                id="password_confirmation"
                                placeholder="Re-enter your password" 
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent transition-all duration-200"
                            >
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- salve contract -->
                    <div class="flex items-start mb-6">
                        <input 
                            type="checkbox" 
                            name="terms" 
                            id="terms"
                            required
                            class="h-4 w-4 text-gray-900 focus:ring-gray-900 border-gray-300 rounded mt-1"
                        >
                        <label for="terms" class="ml-2 block text-sm text-gray-700">
                            I agree to the 
                            <a href="#" class="text-gray-900 hover:underline font-medium">Terms of Service</a> and 
                            <a href="#" class="text-gray-900 hover:underline font-medium">Privacy Policy</a>
                        </label>
                    </div>
                    <div id="termsError" class="mt-2 text-sm text-red-600 hidden"></div>

                    <!-- submit-->
                    <button 
                        type="submit" 
                        id="submitButton"
                        class="w-full bg-gray-900 text-white py-3 px-4 rounded-lg hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 transition-all duration-200 font-medium"
                    >
                        Create Account
                    </button>

                    <!-- lodeng -->
                    <div id="loadingSpinner" class="hidden text-center mt-4">
                        <div class="inline-block animate-spin rounded-full h-6 w-6 border-b-2 border-gray-900"></div>
                        <p class="text-gray-600 mt-2">Creating your account...</p>
                    </div>
                </form>

                <script>
                    document.getElementById('registerForm').addEventListener('submit', async function(e) {
                        e.preventDefault();

                        // Reset messages
                        resetMessages();
                        showLoading(true);

                        const formData = new FormData(this);

                        try {
                            const response = await fetch('/register', {  
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: formData  // Use FormData instead of JSON
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
                </script>

                <!-- basta ung ano -->
                <div class="mt-8 flex items-center">
                    <div class="flex-grow border-t border-gray-300"></div>
                    <span class="mx-4 text-sm text-gray-500">Already have an account?</span>
                    <div class="flex-grow border-t border-gray-300"></div>
                </div>

                <!-- navigate to login -->
                <div class="mt-6 text-center">
                    <a 
                        href="{{ route('login') }}" 
                        class="inline-block w-full bg-white border border-gray-300 text-gray-900 py-3 px-4 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 transition-all duration-200 font-medium"
                    >
                        Sign In Instead
                    </a>
                </div>
            </div>
        </div>

        <!-- paa -->
        <div class="mt-6 text-center text-sm text-gray-600">
            <p>© 2024 RecipeShare. By creating an account, you agree to our 
                <a href="#" class="text-gray-900 hover:underline">Terms</a> and 
                <a href="#" class="text-gray-900 hover:underline">Privacy Policy</a>.
            </p>
        </div>
    </div>

    <script>
        document.getElementById('registerForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            resetMessages();
            showLoading(true);

            const formData = new FormData(this);
            const data = Object.fromEntries(formData.entries());

            try {
                const response = await fetch('/api/register', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify(data)
                });

                const result = await response.json();

                if (response.ok) {
                    showSuccess('Account created successfully! Redirecting...');
                    // back to login
                    setTimeout(() => {
                        window.location.href = '/login';
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
            
            // reset error msg
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