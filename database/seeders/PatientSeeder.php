<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;

class PatientSeeder extends Seeder
{
    public function run(): void
    {
        Patient::create([
            'patient' => 'Budi Santoso',
            'address' => 'Jl. Merdeka No. 5',
            'number_phone' => '08123456789',
            'id_hospital' => 1
        ]);

        Patient::create([
            'patient' => 'Siti Aminah',
            'address' => 'Jl. Pahlawan No. 15',
            'number_phone' => '08987654321',
            'id_hospital' => 2
        ]);

        Patient::create([
            'patient' => 'Ahmad Fauzi',
            'address' => 'Jl. Bahagia No. 20',
            'number_phone' => '08551234123',
            'id_hospital' => 1
        ]);
        Patient::create([
            'patient' => 'Dewi Lestari',
            'address' => 'Jl. Kenangan No. 8',
            'number_phone' => '08223344556',
            'id_hospital' => 3
        ]);
        Patient::create([
            'patient' => 'Rina Wijaya',
            'address' => 'Jl. Melati No. 12',
            'number_phone' => '08129876543',
            'id_hospital' => 4
        ]);
        Patient::create([
            'patient' => 'Agus Salim',
            'address' => 'Jl. Cendana No. 3',
            'number_phone' => '08334455667',
            'id_hospital' => 2
        ]);
    }
}
