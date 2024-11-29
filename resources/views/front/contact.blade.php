@extends('layouts.app')

@section('content')
    <main class="container mx-auto px-4 py-8">
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Left Column: Form -->
            <div class="bg-white rounded-lg shadow-md p-6 md:p-8">
                <h2 class="text-2xl font-bold mb-6">Send Us a Message</h2>
                <form id="contact-form" class="space-y-6">
                    <div class="flex flex-wrap gap-4">
                        <div class="flex-1">
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                            <input type="text" id="name" name="name" required class="input w-full"
                                placeholder="John Doe">
                        </div>
                        <div class="flex-1">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                            <input type="email" id="email" name="email" required class="input w-full"
                                placeholder="john@example.com">
                        </div>
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                        <input type="text" id="subject" name="subject" required class="input w-full"
                            placeholder="How can we help?">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                        <textarea id="message" name="message" rows="5" required class="input w-full" placeholder="Your message here..."></textarea>
                    </div>
                    <button type="submit" class="w-full btn btn-primary">Send Message</button>
                </form>
            </div>

            <!-- Right Column: About and Contact Details -->
            <div>
                <!-- About Section -->
                <div class="bg-white rounded-lg shadow-md p-6 md:p-8 mb-8">
                    <h2 class="text-2xl font-bold mb-4">About Us</h2>
                    <p class="text-gray-600">We are dedicated to connecting alumni and building stronger communities
                        through shared experiences and professional networking.</p>
                </div>

                <!-- Contact Details Section -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-semibold mb-2">Email</h3>
                        <p class="text-gray-600">contact@alumniconnect.com</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-semibold mb-2">Phone</h3>
                        <p class="text-gray-600">(123) 456-7890</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-semibold mb-2">Address</h3>
                        <p class="text-gray-600">123 Alumni Street, Education City</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
