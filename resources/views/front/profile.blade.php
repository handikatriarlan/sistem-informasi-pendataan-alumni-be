@extends('layouts.app')

@section('content')
    <main class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <!-- Profile Header -->
                <div class="flex justify-center p-6">
                    <div class="relative">
                        <div class="w-40 h-40 rounded-full overflow-hidden">
                            <img id="profile-image" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400"
                                alt="Profile" class="w-full h-full object-cover">
                        </div>
                        <label for="image-upload"
                            class="absolute bottom-0 right-0 bg-gray-200 text-gray-700 rounded-full p-2 cursor-pointer shadow-md hover:bg-gray-300 transition">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <input type="file" id="image-upload" class="hidden" accept="image/*">
                        </label>
                    </div>
                </div>

                <!-- Profile Form -->
                <form id="profile-form" class="p-6 space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label for="fullName" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                            <input type="text" id="fullName" name="fullName" class="input" value="John Doe">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email
                                Address</label>
                            <input type="email" id="email" name="email" class="input" value="john@example.com">
                        </div>
                        <div>
                            <label for="graduationYear" class="block text-sm font-medium text-gray-700 mb-1">Graduation
                                Year</label>
                            <input type="number" id="graduationYear" name="graduationYear" class="input" value="2020">
                        </div>
                        <div>
                            <label for="major" class="block text-sm font-medium text-gray-700 mb-1">Major</label>
                            <input type="text" id="major" name="major" class="input" value="Computer Science">
                        </div>
                        <div>
                            <label for="occupation" class="block text-sm font-medium text-gray-700 mb-1">Current
                                Occupation</label>
                            <input type="text" id="occupation" name="occupation" class="input"
                                value="Software Engineer">
                        </div>
                        <div>
                            <label for="company" class="block text-sm font-medium text-gray-700 mb-1">Company</label>
                            <input type="text" id="company" name="company" class="input" value="Tech Corp">
                        </div>
                        <div class="md:col-span-3">
                            <label for="bio" class="block text-sm font-medium text-gray-700 mb-1">Bio</label>
                            <textarea id="bio" name="bio" rows="4" class="input">A passionate software engineer with experience in web development and cloud computing.</textarea>
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="btn bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg w-full">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
