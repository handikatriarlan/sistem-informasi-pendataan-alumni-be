<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Directory - Alumni Connect</title>
    @vite('resources/css/app.css')
    @vite('resources/js/alumni.js')
</head>

<body class="bg-gray-50">
    <header class="bg-gray-800 text-white sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <a href="/" class="flex items-center space-x-2">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                    </svg>
                    <span class="font-bold text-xl hidden sm:block">Alumni Connect</span>
                </a>
                <nav class="hidden md:flex space-x-6">
                    <a href="/" class="hover:text-blue-400 transition">Home</a>
                    <a href="/alumni.html" class="text-blue-400">Alumni</a>
                    <a href="/contact.html" class="hover:text-blue-400 transition">Contact</a>
                    <a href="/login.html" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg transition">Log
                        in</a>
                </nav>
                <button id="menu-button" class="md:hidden p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <div id="mobile-menu" class="md:hidden hidden pb-4">
                <nav class="flex flex-col space-y-3">
                    <a href="/" class="hover:text-blue-400 transition py-2">Home</a>
                    <a href="/alumni.html" class="text-blue-400 py-2">Alumni</a>
                    <a href="/contact.html" class="hover:text-blue-400 transition py-2">Contact</a>
                    <a href="/login.html"
                        class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg transition text-center">Log in</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        <div class="space-y-6">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <h1 class="text-2xl font-bold">Alumni Directory</h1>
                <div class="w-full sm:w-auto flex flex-col sm:flex-row gap-4">
                    <select id="filter-batch" class="input sm:w-48">
                        <option value="">All Batches</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                    </select>
                    <div class="relative">
                        <input type="text" id="search-alumni" placeholder="Search alumni..."
                            class="input pl-10 sm:w-64" />
                        <svg class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 w-5 h-5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Tabel Alumni -->
            <div class="overflow-x-auto">
                <table class="table-auto w-full border-collapse border border-gray-300">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="border border-gray-300 px-4 py-2 text-left">Foto</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Nama</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Kelas</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Angkatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-100">
                            <td class="border border-gray-300 px-4 py-2">
                                <img src="/images/alumni1.jpg" alt="Foto Alumni" class="w-16 h-16 rounded-full">
                            </td>
                            <td class="border border-gray-300 px-4 py-2">John Doe</td>
                            <td class="border border-gray-300 px-4 py-2">XII-A</td>
                            <td class="border border-gray-300 px-4 py-2">2021</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border border-gray-300 px-4 py-2">
                                <img src="/images/alumni2.jpg" alt="Foto Alumni" class="w-16 h-16 rounded-full">
                            </td>
                            <td class="border border-gray-300 px-4 py-2">Jane Smith</td>
                            <td class="border border-gray-300 px-4 py-2">XII-B</td>
                            <td class="border border-gray-300 px-4 py-2">2020</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <footer class="bg-gray-800 text-white mt-12">
        <div class="container mx-auto px-4 py-8">
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
                    <ul class="space-y-2 text-gray-400">
                        <li>Email: contact@alumniconnect.com</li>
                        <li>Phone: (123) 456-7890</li>
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
