@extends('layouts.app')

@section('content')
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
@endsection
