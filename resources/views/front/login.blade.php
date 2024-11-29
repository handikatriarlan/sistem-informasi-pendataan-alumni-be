<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Alumni Connect</title>
    @vite('resources/css/app.css')
    @vite('resources/js/login.js')
</head>

<body class="bg-gray-50">
    <div class="min-h-screen flex flex-col">
        <header class="bg-gray-800 text-white">
            <div class="container mx-auto px-4">
                <div class="flex items-center justify-between h-16">
                    <a href="/" class="flex items-center space-x-2">
                        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        </svg>
                        <span class="font-bold text-xl">Alumni Connect</span>
                    </a>
                </div>
            </div>
        </header>

        <main class="flex-1 flex items-center justify-center p-4">
            <div class="w-full max-w-md">
                <div class="bg-white rounded-lg shadow-md p-8">
                    <div class="text-center mb-8">
                        <h1 class="text-2xl font-bold">Welcome Back</h1>
                        <p class="text-gray-600 mt-2">Please sign in to your account</p>
                    </div>

                    <form id="login-form" class="space-y-6">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email
                                Address</label>
                            <input type="email" id="email" name="email" required class="input"
                                placeholder="john@example.com">
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                            <input type="password" id="password" name="password" required class="input"
                                placeholder="••••••••">
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input type="checkbox" id="remember" name="remember"
                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <label for="remember" class="ml-2 block text-sm text-gray-700">
                                    Remember me
                                </label>
                            </div>
                            <a href="/forgot-password.html" class="text-sm text-blue-600 hover:text-blue-500">
                                Forgot password?
                            </a>
                        </div>

                        <button type="submit" class="w-full btn btn-primary">
                            Sign In
                        </button>
                    </form>

                    <div class="mt-6 text-center">
                        <p class="text-sm text-gray-600">
                            Don't have an account?
                            <a href="/register.html" class="text-blue-600 hover:text-blue-500 font-medium">
                                Sign up
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </main>

        <footer class="bg-gray-100 py-4">
            <div class="container mx-auto px-4 text-center text-gray-600">
                <p>© <span id="current-year"></span> Alumni Connect. All rights reserved.</p>
            </div>
        </footer>
    </div>
</body>

</html>
