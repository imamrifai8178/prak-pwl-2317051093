<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    public function run()
    {
        Kelas::insert([
            ['nama_kelas' => 'TI-1A', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'TI-1B', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'TI-1C', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
