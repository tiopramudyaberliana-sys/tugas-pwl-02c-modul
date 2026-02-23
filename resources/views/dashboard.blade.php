<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <p class="mb-4 text-lg">Selamat Datang, <strong>{{ Auth::user()->name }}</strong>!</p>

                    <div class="mt-4 p-4 bg-blue-100 rounded-lg text-black">
                        <h3 class="text-lg font-bold mb-2">Ringkasan Sistem:</h3>
                        <ul class="list-disc ml-5">
                            <li>Total Mahasiswa: <strong>{{ $total_mahasiswa }}</strong> orang</li>
                            <li>Total Mata Kuliah: <strong>{{ $total_matakuliah }}</strong> MK</li>
                        </ul>
                    </div>

                    <div class="mt-6 flex space-x-4">
                        <a href="{{ route('mahasiswa.index') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Kelola Mahasiswa
                        </a>
                        <a href="{{ route('matakuliah.index') }}" class="inline-block bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Kelola Mata Kuliah
                        </a>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>