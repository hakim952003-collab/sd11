<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fitur;

class FiturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facilities = [
            [
                'nama' => 'Ruang Kelas',
                'deskripsi' => 'Ruang kelas yang nyaman dan dilengkapi dengan peralatan pembelajaran modern untuk mendukung proses belajar mengajar yang efektif.',
                'icon' => 'fa fa-graduation-cap'
            ],
            [
                'nama' => 'Perpustakaan',
                'deskripsi' => 'Perpustakaan dengan koleksi buku yang lengkap untuk mendukung minat baca dan literasi siswa.',
                'icon' => 'fa fa-book'
            ],
            [
                'nama' => 'Lapangan Olahraga',
                'deskripsi' => 'Lapangan olahraga yang luas untuk kegiatan fisik dan olahraga siswa dalam mengembangkan kebugaran jasmani.',
                'icon' => 'fa fa-futbol-o'
            ],
            [
                'nama' => 'Lab Komputer',
                'deskripsi' => 'Laboratorium komputer dengan perangkat modern untuk pembelajaran teknologi informasi dan komunikasi.',
                'icon' => 'fa fa-desktop'
            ],
            [
                'nama' => 'UKS',
                'deskripsi' => 'Unit Kesehatan Sekolah untuk memberikan pelayanan kesehatan dasar dan pertolongan pertama.',
                'icon' => 'fa fa-medkit'
            ],
            [
                'nama' => 'Internet',
                'deskripsi' => 'Koneksi internet yang stabil untuk mendukung pembelajaran digital dan akses informasi global.',
                'icon' => 'fa fa-wifi'
            ]
        ];

        foreach ($facilities as $facility) {
            Fitur::create($facility);
        }
    }
}
