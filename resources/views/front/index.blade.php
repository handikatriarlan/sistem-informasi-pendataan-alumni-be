@extends('layouts.app')

@section('content')
    <main>
        <section class="relative bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20">
            <div class="container mx-auto px-4">
                <div class="max-w-3xl mx-auto text-center">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Welcome to Alumni Connect</h1>
                    <p class="text-xl mb-8">Stay connected with your alma mater and fellow graduates. Build lasting
                        relationships and grow your professional network.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/register.html"
                            class="bg-white text-blue-600 hover:bg-gray-100 px-8 py-3 rounded-lg font-semibold transition">
                            Join Now
                        </a>
                        <a href="/about.html"
                            class="border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-3 rounded-lg font-semibold transition">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-gray-50"></div>
        </section>

        <section class="py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Why Join Alumni Connect?</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition duration-300">
                        <div class="bg-blue-100 text-blue-600 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Network</h3>
                        <p class="text-gray-600">Connect with alumni across different batches and industries.</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition duration-300">
                        <div class="bg-blue-100 text-blue-600 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Opportunities</h3>
                        <p class="text-gray-600">Discover job opportunities and mentorship programs.</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition duration-300">
                        <div class="bg-blue-100 text-blue-600 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Events</h3>
                        <p class="text-gray-600">Participate in exclusive alumni events and meetups.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
