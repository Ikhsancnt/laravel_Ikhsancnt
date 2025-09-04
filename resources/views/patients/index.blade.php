<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Pasien') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="form-group mb-3 d-flex align-items-center gap-3">
                        <label for="filter_rs">Filter Berdasarkan Rumah Sakit</label>
                        <select id="filter_rs" class="form-control" style="width: 300px;">
                            <option value="all">Semua Rumah Sakit</option>
                            @foreach($hospital as $rs)
                                <option value="{{ $rs->id }}">{{ $rs->hospital }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div id="table-patient-container">
                        @include('patients.partials.table', ['patients' => $patient])
                    </div>

                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        $(document).ready(function() {
            $('#filter_rs').on('change', function() {
                let id_rs = $(this).val();
                $.ajax({
                    url: "{{ route('patients.filter') }}",
                    type: "GET",
                    data: { id_hospital: id_rs },
                    success: function(data) {
                        $('#table-patient-container').html(data);
                    }
                });
            });

            $(document).on('click', '.btn-delete', function(e) {
                e.preventDefault();
                let id = $(this).data('id');
                let url = "{{ url('patients') }}/" + id;

                if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: {
                            '_token': '{{ csrf_token() }}',
                            '_method': 'DELETE'
                        },
                        success: function(response) {
                            alert(response.success);
                            // Hapus baris dari tabel
                            $('#patient-row-' + id).remove();
                        },
                        error: function(xhr) {
                            alert('Terjadi kesalahan!');
                        }
                    });
                }
            });
        });
    </script>
    @endpush
</x-app-layout>
