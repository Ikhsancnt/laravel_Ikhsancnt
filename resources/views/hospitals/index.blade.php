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
                                <th>ID</th>
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
                                <td>{{ $rs->id }}</td>
                                <td>{{ $rs->hospital }}</td>
                                <td>{{ $rs->address }}</td>
                                <td>{{ $rs->email }}</td>
                                <td>{{ $rs->telephone }}</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{ route('hospitals.show', $rs->id) }}">Detail</a>
                                    <a class="btn btn-warning btn-sm" href="{{ route('hospitals.edit', $rs->id) }}">Edit</a>
                                    <button class="btn btn-danger btn-sm btn-delete-rs" data-id="{{ $rs->id }}">Hapus</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.btn-delete-rs', function(e) {
                e.preventDefault();
                let id = $(this).data('id');
                let url = "{{ url('hospitals') }}/" + id;

                if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: {
                            '_token': '{{ csrf_token() }}',
                            '_method': 'DELETE'
                        },
                        success: function(response) {
                            if (response.success) {
                                alert(response.success); // ambil dari JSON success
                                location.reload();
                            }
                        },
                        error: function(xhr) {
                            if (xhr.responseJSON && xhr.responseJSON.error) {
                                alert(xhr.responseJSON.error); // ambil dari JSON error
                            } else {
                                alert('Terjadi kesalahan saat menghapus data.');
                            }
                        }
                    });
                }
            });
        });
    </script>
    @endpush
</x-app-layout>
