@extends('layouts.app')

@section('content')
    <main class="flex-1 flex items-center justify-center p-4 sm:p-6 lg:p-8">
        <div class="w-full max-w-md">
            <div class="bg-white rounded-lg shadow-md p-8 space-y-6">
                <div class="text-center mb-8">
                    <h1 class="text-2xl font-bold">Welcome Back</h1>
                    <p class="text-gray-600 mt-2">Please sign in to your account</p>
                </div>

                <form method="POST" action="{{ route('login') }}" id="login-form" class="space-y-6">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <input type="email" id="email" name="email" required class="input w-full"
                            placeholder="john@example.com">
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <input type="password" id="password" name="password" required class="input w-full"
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
                    </div>

                    <button type="submit" class="w-full btn btn-primary">
                        Login
                    </button>
                </form>

                {{-- <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">
                        Don't have an account?
                        <a href="/register" class="text-blue-600 hover:text-blue-500 font-medium">
                            Register
                        </a>
                    </p>
                </div> --}}
            </div>
        </div>
    </main>
@endsection
