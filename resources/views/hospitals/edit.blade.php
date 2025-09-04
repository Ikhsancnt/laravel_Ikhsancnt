<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Rumah Sakit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Ada masalah dengan inputanmu.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('hospitals.update', $hospital->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <strong>Nama Rumah Sakit:</strong>
                            <input type="text" name="hospital" class="form-control" value="{{ $hospital->hospital }}">
                        </div>
                        <div class="form-group mb-3">
                            <strong>Alamat:</strong>
                            <textarea class="form-control" style="height:100px" name="address">{{ $hospital->address }}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <strong>Email:</strong>
                            <input type="email" name="email" class="form-control" value="{{ $hospital->email }}">
                        </div>
                        <div class="form-group mb-3">
                            <strong>Telepon:</strong>
                            <input type="text" name="telephone" class="form-control" value="{{ $hospital->telephone }}">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a class="btn btn-secondary" href="{{ route('hospitals.index') }}">Kembali</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
