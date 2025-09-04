<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Data Pasien') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="mb-4">
                        <strong class="font-bold">Nama Pasien:</strong>
                        <p>{{ $patient->patient }}</p>
                    </div>

                    <div class="mb-4">
                        <strong class="font-bold">Alamat:</strong>
                        <p>{{ $patient->address }}</p>
                    </div>

                    <div class="mb-4">
                        <strong class="font-bold">No Telepon:</strong>
                        <p>{{ $patient->number_phone }}</p>
                    </div>

                    <div class="mb-4">
                        <strong class="font-bold">Dirawat di:</strong>
                        <p>{{ $patient->hospital->hospital }}</p>
                    </div>

                    <div class="mb-4">
                        <strong class="font-bold">ID Rumah Sakit:</strong>
                        <p>{{ $patient->id_hospital }}</p>
                    </div>

                    <div class="mt-6">
                        <a class="btn btn-secondary" href="{{ route('patients.index') }}"> Kembali ke Daftar Pasien</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
