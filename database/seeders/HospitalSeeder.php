<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hospital;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hospital::create([
            'hospital' => 'RS Harapan Bangsa',
            'address' => 'Jl. Kesehatan No. 1, Jakarta',
            'email' => 'kontak@rshb.com',
            'telephone' => '021-123456'
        ]);

        Hospital::create([
            'hospital' => 'RS Medika Utama',
            'address' => 'Jl. Sehat Selalu No. 10, Bandung',
            'email' => 'info@rsmu.com',
            'telephone' => '022-654321'
        ]);
        Hospital::create([
            'hospital' => 'RS Citra Medika',
            'address' => 'Jl. Pelayanan No. 20, Surabaya',
            'email' => 'kontak@rscm.com',
            'telephone' => '031-987654'
        ]);
        Hospital::create([
            'hospital' => 'RS Bina Husada',
            'address' => 'Jl. Keluarga No. 8, Yogyakarta',
            'email' => 'info@rshb.com',
            'telephone' => '027-123456'
        ]);
    }
}
