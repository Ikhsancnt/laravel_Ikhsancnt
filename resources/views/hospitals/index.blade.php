<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Rumah Sakit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('hospitals.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Rumah Sakit</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hospital as $rs)
                            <tr>
                                <td>{{ $rs->hospital }}</td>
                                <td>{{ $rs->address }}</td>
                                <td>{{ $rs->email }}</td>
                                <td>{{ $rs->telephone }}</td>
                                <td>
                                    <form action="{{ route('hospitals.destroy', $rs->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
