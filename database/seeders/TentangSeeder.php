<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tentang;

class TentangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tentang::create([
            'judul' => 'Tentang SD Negeri 11',
            'deskripsi' => 'SD Negeri 11 adalah sekolah dasar negeri yang berkomitmen untuk memberikan pendidikan berkualitas dan membentuk karakter siswa yang unggul dalam prestasi dan berakhlak mulia.',
            'visi' => 'Menjadi sekolah unggulan yang menghasilkan lulusan berkualitas',
            'misi' => '1. Menyelenggarakan pendidikan berkualitas\n2. Mengembangkan potensi siswa secara optimal\n3. Membentuk karakter siswa yang berakhlak mulia\n4. Meningkatkan prestasi akademik dan non-akademik',
            'sejarah' => 'SD Negeri 11 didirikan pada tahun 1980 dan telah meluluskan ribuan siswa yang berhasil dalam berbagai bidang.'
        ]);
    }
}
