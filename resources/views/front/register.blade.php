@extends('layouts.app')

@section('content')
    <main class="flex-1 flex items-center justify-center p-4 sm:p-6 lg:p-8">
        <div class="w-full max-w-md">
            <div class="bg-white rounded-lg shadow-md p-8 space-y-6">
                <div class="text-center mb-8">
                    <h1 class="text-2xl font-bold">Create Account</h1>
                    <p class="text-gray-600 mt-2">Join our alumni community</p>
                </div>

                <form id="register-form" class="space-y-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="firstName" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                            <input type="text" id="firstName" name="firstName" required class="input w-full"
                                placeholder="John">
                        </div>
                        <div>
                            <label for="lastName" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                            <input type="text" id="lastName" name="lastName" required class="input w-full"
                                placeholder="Doe">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <input type="email" id="email" name="email" required class="input w-full"
                            placeholder="john@example.com">
                    </div>

                    <div>
                        <label for="graduationYear" class="block text-sm font-medium text-gray-700 mb-1">Graduation
                            Year</label>
                        <input type="number" id="graduationYear" name="graduationYear" required class="input w-full"
                            placeholder="2020" min="1900" max="2024">
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <input type="password" id="password" name="password" required class="input w-full"
                            placeholder="••••••••">
                    </div>

                    <div>
                        <label for="confirmPassword" class="block text-sm font-medium text-gray-700 mb-1">Confirm
                            Password</label>
                        <input type="password" id="confirmPassword" name="confirmPassword" required class="input w-full"
                            placeholder="••••••••">
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="terms" name="terms" required
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="terms" class="ml-2 block text-sm text-gray-700">
                            I agree to the <a href="/terms.html" class="text-blue-600 hover:text-blue-500">Terms of
                                Service</a> and
                            <a href="/privacy.html" class="text-blue-600 hover:text-blue-500">Privacy Policy</a>
                        </label>
                    </div>

                    <button type="submit" class="w-full btn btn-primary">
                        Create Account
                    </button>
                </form>

                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">
                        Already have an account?
                        <a href="/login.html" class="text-blue-600 hover:text-blue-500 font-medium">
                            Sign in
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </main>>
@endsection
