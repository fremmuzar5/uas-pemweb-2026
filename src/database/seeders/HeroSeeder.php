<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hero::firstOrCreate([
            'title' => 'Sistem Pengajuan Sidang Skripsi Digital',
            'description' => 'Platform berbasis web untuk pengajuan dan persetujuan sidang skripsi secara online dengan dukungan Tanda Tangan Elektronik (TTE). Proses lebih cepat, transparan, dan terdokumentasi dengan baik.',
            'button_text' => 'Ajukan Sidang',
            'button_link' => '/login',
            'image' => null,
        ]);
    }
}
