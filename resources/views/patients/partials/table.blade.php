<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama Pasien</th>
            <th>Alamat</th>
            <th>No Telpon</th>
            <th>Rumah Sakit</th>
            <th>ID Rumah Sakit</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($patients as $patient)
        <tr id="patient-row-{{ $patient->id }}">
            <td>{{ $patient->patient }}</td>
            <td>{{ $patient->address }}</td>
            <td>{{ $patient->number_phone }}</td>
            <td>{{ $patient->hospital->hospital ?? 'Tidak Ada' }}</td>
            <td>{{ $patient->id_hospital }}</td>
            <td>
                <button class="btn btn-danger btn-sm btn-delete" data-id="{{ $patient->id }}">Hapus</button>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center">Data tidak ditemukan.</td>
        </tr>
        @endforelse
    </tbody>
</table>
