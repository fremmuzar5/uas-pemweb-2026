<?php

namespace Database\Seeders;

use App\Models\LatestPost;
use Illuminate\Database\Seeder;

class LatestPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LatestPost::insert([
            [
                'title' => 'Digitalisasi Pengajuan Sidang Skripsi',
                'excerpt' => 'Sistem pengajuan sidang skripsi berbasis web membantu mempercepat proses administrasi dan meningkatkan transparansi.',
                'author' => 'Admin',
                'published_at' => now(),
                'is_active' => true,
            ],
            [
                'title' => 'Manfaat Tanda Tangan Elektronik (TTE)',
                'excerpt' => 'Penerapan TTE pada dokumen akademik memberikan keabsahan hukum serta mempercepat proses persetujuan.',
                'author' => 'Admin',
                'published_at' => now(),
                'is_active' => true,
            ],
            [
                'title' => 'Transparansi Proses Sidang Skripsi',
                'excerpt' => 'Mahasiswa dapat memantau status pengajuan sidang secara real-time melalui sistem yang terintegrasi.',
                'author' => 'Admin',
                'published_at' => now(),
                'is_active' => true,
            ],
        ]);
    }
}
