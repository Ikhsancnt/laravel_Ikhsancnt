<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Data Rumah Sakit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="mb-3">
                        <strong>ID:</strong>
                        <p>{{ $hospital->id }}</p>
                    </div>
                    <div class="mb-3">
                        <strong>Nama Rumah Sakit:</strong>
                        <p>{{ $hospital->hospital }}</p>
                    </div>
                    <div class="mb-3">
                        <strong>Alamat:</strong>
                        <p>{{ $hospital->address }}</p>
                    </div>
                    <div class="mb-3">
                        <strong>Email:</strong>
                        <p>{{ $hospital->email }}</p>
                    </div>
                    <div class="mb-3">
                        <strong>Telepon:</strong>
                        <p>{{ $hospital->telephone }}</p>
                    </div>
                    <a class="btn btn-secondary mt-3" href="{{ route('hospitals.index') }}">Kembali</a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
