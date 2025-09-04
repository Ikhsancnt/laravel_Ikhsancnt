<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hospital as RumahSakit;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RumahSakit::create([
            'hospital' => 'RS Harapan Bangsa',
            'address' => 'Jl. Kesehatan No. 1, Jakarta',
            'email' => 'kontak@rshb.com',
            'telephone' => '021-123456'
        ]);

        RumahSakit::create([
            'hospital' => 'RS Medika Utama',
            'address' => 'Jl. Sehat Selalu No. 10, Bandung',
            'email' => 'info@rsmu.com',
            'telephone' => '022-654321'
        ]);
    }
}
