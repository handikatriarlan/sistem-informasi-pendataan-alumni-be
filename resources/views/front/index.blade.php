<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Connect - Home</title>
    @vite('resources/css/app.css')
    @vite('resources/js/main.js')
</head>

<body class="bg-gray-50">
    <!-- Header with Responsive Navigation -->
    <header class="bg-gray-800 text-white sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <a href="/" class="flex items-center space-x-2">
                    <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                    </svg>
                    <span class="font-bold text-xl hidden sm:block">Alumni Connect</span>
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-6">
                    <a href="/" class="hover:text-blue-400 transition">Home</a>
                    <a href="/alumni.html" class="hover:text-blue-400 transition">Alumni</a>
                    <a href="/events.html" class="hover:text-blue-400 transition">Events</a>
                    <a href="/contact.html" class="hover:text-blue-400 transition">Contact</a>
                    <a href="/login.html" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg transition">Log
                        in</a>
                </nav>

                <!-- Mobile Menu Button -->
                <button id="menu-button" class="md:hidden p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="md:hidden hidden pb-4">
                <nav class="flex flex-col space-y-3">
                    <a href="/" class="hover:text-blue-400 transition py-2">Home</a>
                    <a href="/alumni.html" class="hover:text-blue-400 transition py-2">Alumni</a>
                    <a href="/events.html" class="hover:text-blue-400 transition py-2">Events</a>
                    <a href="/contact.html" class="hover:text-blue-400 transition py-2">Contact</a>
                    <a href="/login.html"
                        class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg transition text-center">Log in</a>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
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

        <!-- Features Section -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Why Join Alumni Connect?</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition duration-300">
                        <div
                            class="bg-blue-100 text-blue-600 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Network</h3>
                        <p class="text-gray-600">Connect with alumni across different batches and industries.</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition duration-300">
                        <div
                            class="bg-blue-100 text-blue-600 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Opportunities</h3>
                        <p class="text-gray-600">Discover job opportunities and mentorship programs.</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition duration-300">
                        <div
                            class="bg-blue-100 text-blue-600 rounded-full w-12 h-12 flex items-center justify-center mb-4">
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

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">About Us</h3>
                    <p class="text-gray-400">Connecting alumni and building stronger communities through shared
                        experiences.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="/about.html" class="text-gray-400 hover:text-white transition">About</a></li>
                        <li><a href="/events.html" class="text-gray-400 hover:text-white transition">Events</a></li>
                        <li><a href="/news.html" class="text-gray-400 hover:text-white transition">News</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact</h3>
                    <ul class="space-y-2">
                        <li class="text-gray-400">Email: contact@alumniconnect.com</li>
                        <li class="text-gray-400">Phone: (123) 456-7890</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>© <span id="current-year"></span> Alumni Connect. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>
