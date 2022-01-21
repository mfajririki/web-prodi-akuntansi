<?php

namespace Database\Seeders;

use App\Models\VisiMisi;
use Illuminate\Database\Seeder;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VisiMisi::insert([
            'visi' => 'Menjadi Program Studi Strata Satu (S1) yang bermutu dalam bidang akuntansi dengan berbasis Teknologi Informasi, dan berstandar Internsional pada tahun 2025.',
            'misi' => 'Menyelenggakan pendidikan, penelitian dan pengabdian masyarakat dalam bidang akuntansi dengan memperhatikan mutu kurikulum, proses belajar mengajar yang baik, berkualitas, kompetitif dengan tenaga pengajar yang berkualitas dan profesional.'
        ]);
    }
}
