<?php

namespace Database\Seeders;

use App\Models\Cta;
use Illuminate\Database\Seeder;

class CtaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cta::create([
            'section_key' => 'cta_main',
            'title' => 'Siap Beralih ke Sistem Sidang Skripsi Digital?',
            'description' => 'Gunakan sistem pengajuan dan persetujuan sidang skripsi berbasis web dengan dukungan Tanda Tangan Elektronik (TTE) untuk proses yang lebih cepat, transparan, dan aman.',
            'button_text' => 'Ajukan Sidang Sekarang',
            'button_link' => '#peng_
