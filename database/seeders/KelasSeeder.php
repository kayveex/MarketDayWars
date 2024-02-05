<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelasList = [
           [
            'nama_kelas' => 'Umum'
           ],
           [
            'nama_kelas' => '7A'
           ],
           [
            'nama_kelas' => '7B'
           ],
           [
            'nama_kelas' => '7C'
           ],
           [
            'nama_kelas' => '7D'
           ],
           [
            'nama_kelas' => '7E'
           ],
           [
            'nama_kelas' => '8A'
           ],
           [
            'nama_kelas' => '8B'
           ],
           [
            'nama_kelas' => '8C'
           ],
           [
            'nama_kelas' => '8D'
           ],
           [
            'nama_kelas' => '8E'
           ],
           [
            'nama_kelas' => '9A'
           ],
           [
            'nama_kelas' => '9B'
           ],
           [
            'nama_kelas' => '9C'
           ],
           [
            'nama_kelas' => '9D'
           ],
           [
            'nama_kelas' => '9E'
           ],
        ];

        foreach ($kelasList as $key => $val) {
            Kelas::create($val);
        }
    }
}
