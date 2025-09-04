<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Pasien') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Ada beberapa masalah dengan inputan Anda.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('patients.update', $patient->id) }}" method="POST">
                        @csrf
                        @method('PUT') <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Nama Pasien:</strong>
                                    <input type="text" name="patient" value="{{ $patient->partient }}" class="form-control" placeholder="Nama Pasien">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Alamat:</strong>
                                    <textarea class="form-control" style="height:150px" name="address" placeholder="Alamat">{{ $patient->address }}</textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>No Telepon:</strong>
                                    <input type="text" name="number_phone" value="{{ $patient->number_phone }}" class="form-control" placeholder="No Telepon">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Rumah Sakit:</strong>
                                    <select name="id_hospital" class="form-control">
                                        <option value="">-- Pilih Rumah Sakit --</option>
                                        @foreach ($hospital as $rs)
                                            <option value="{{ $rs->id }}" {{ $patient->id_hospital == $rs->id ? 'selected' : '' }}>
                                                {{ $rs->hospital }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a class="btn btn-secondary" href="{{ route('patients.index') }}">Kembali</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
