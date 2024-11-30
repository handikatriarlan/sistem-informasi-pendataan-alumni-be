@extends('layouts.app')

@section('content')
    <main class="container mx-auto px-4 py-8">
        <section>
            <h2 class="text-2xl font-bold mb-6">Upcoming Events</h2>
            <div class="grid lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2 space-y-6">
                    <div class="grid lg:grid-cols-2 gap-8">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <div class="aspect-video bg-gray-200">
                                <img src="https://images.unsplash.com/photo-1491438590914-bc09fcaaf77a?auto=format&fit=crop&w=800"
                                    alt="Networking Night" class="w-full h-full object-cover">
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-2">Alumni Networking Night</h3>
                                <p class="text-gray-600 mb-4">An evening of networking and sharing experiences with fellow
                                    alumni.</p>
                                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Learn more →</a>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <div class="aspect-video bg-gray-200">
                                <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=800"
                                    alt="Workshop" class="w-full h-full object-cover">
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-2">Professional Development Workshop</h3>
                                <p class="text-gray-600 mb-4">Enhance your skills with our expert-led workshop series.</p>
                                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Learn more →</a>
                            </div>
                        </div>
                        
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <div class="aspect-video bg-gray-200">
                                <img src="https://images.unsplash.com/photo-1491438590914-bc09fcaaf77a?auto=format&fit=crop&w=800"
                                    alt="Networking Night" class="w-full h-full object-cover">
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-2">Alumni Networking Night</h3>
                                <p class="text-gray-600 mb-4">An evening of networking and sharing experiences with fellow
                                    alumni.</p>
                                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Learn more →</a>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <div class="aspect-video bg-gray-200">
                                <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=800"
                                    alt="Workshop" class="w-full h-full object-cover">
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-2">Professional Development Workshop</h3>
                                <p class="text-gray-600 mb-4">Enhance your skills with our expert-led workshop series.</p>
                                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Learn more →</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <h3 class="text-xl font-semibold">Recent Events</h3>

                    <div class="flex gap-4">
                        <div class="w-24 h-24 bg-gray-200 flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=200"
                                alt="Tech Meetup" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-medium">Tech Alumni Meetup</h4>
                            <p class="text-gray-600 text-sm mt-1">A great evening of tech talks and networking</p>
                            <a href="#" class="text-blue-600 hover:text-blue-800 text-sm mt-2 inline-block">View recap
                                →</a>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-24 h-24 bg-gray-200 flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1507537297725-24a1c029d3ca?auto=format&fit=crop&w=200"
                                alt="Business Forum" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-medium">Business Leadership Forum</h4>
                            <p class="text-gray-600 text-sm mt-1">Insights from industry leaders</p>
                            <a href="#" class="text-blue-600 hover:text-blue-800 text-sm mt-2 inline-block">View recap
                                →</a>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-24 h-24 bg-gray-200 flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1517457373958-b7bdd4587205?auto=format&fit=crop&w=200"
                                alt="Sports Event" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-medium">Alumni Sports Day</h4>
                            <p class="text-gray-600 text-sm mt-1">Annual sports competition highlights</p>
                            <a href="#" class="text-blue-600 hover:text-blue-800 text-sm mt-2 inline-block">View recap
                                →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
