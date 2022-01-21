<?php

namespace Database\Seeders;

use App\Models\ProfileKaprodi;
use Illuminate\Database\Seeder;

class ProfileKaprodiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProfileKaprodi::insert([
            'nama' => 'Dr. Fitriasuri, Ak., S.E., M.M.',
            'kutipan' => 'Program Studi akan menghasilkan sarjana ekonomi yang menguasai teknologi informasi, 
                        berwawasan internasional, handal dan terampil dalam berbagai kompetensi seperti 
                        penyusunan laporan keuangan, perpajakan, komputerasi akuntansi.'
        ]);
    }
}
