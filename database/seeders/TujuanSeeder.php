<?php

namespace Database\Seeders;

use App\Models\Tujuans;
use Illuminate\Database\Seeder;

class TujuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tujuans::insert([
            'konten_tujuan' => 'Menghasilkan Sarjana Akuntansi yang profesional, berstandar Internasional dan berbasis teknologi infornasi dibidang ilmu akuntansi.
            Menghasilkan Sarjana Akuntansi berakhlaq mulia.
            Menghasilkan Sarjana Akuntansi yang mempunyai wawasan internasional serta siap bekerja dalam lingkungan manapun.
            Menghasilkan Sarjana Akuntansi yang ilmiah melalui penelitian dan pengabdian masyarakat.
            Menghasilkan Sarjana Akuntansi yang berdaya saing dengan keterampilan dan pengetahuan yang dibutuhkan dalam dunia usaha dan sektor publik.'
        ]);
    }
}
