<?php

namespace Database\Seeders;

use App\Models\Tentang;
use Illuminate\Database\Seeder;

class TentangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tentang::insert([
            'konten_tentang' => 'Program Studi Akuntansi adalah Program studi yang menghasilkan sarjana 
                            ekonomi yang menguasai teknologi informasi, berwawasan internasional, handal dan 
                            terampil dalam berbagai kompetensi seperti penyusunan laporan keuangan, perpajakan, 
                            komputerasi akuntansi. Bersama kami mahasiswa juga dipersiapkan dengan berbagai soft 
                            skill seperti pengembangan kepribadian dan kepemimpinan serta bahas asing seperti bahasa 
                            inggris ( Metode pengajaran dari cabridge), keterampilan internasional.'
        ]);
    }
}
