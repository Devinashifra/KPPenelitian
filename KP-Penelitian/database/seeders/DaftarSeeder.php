<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Daftar;

class DaftarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $daftar = new Daftar;
        $daftar -> jenisperm = 'Kerja Praktek';
        $daftar -> filesp = '';
        $daftar -> jenis = 'Individu';
        $daftar -> namanim = 'KP Penelitian, 20200043330';
        $daftar -> idjss = 'kppenelitian';
        $daftar -> nowa = '08722294320';
        $daftar -> emailindi = 'kppenelitian@gmail.com';
        $daftar -> kampus = 'UGM';
        $daftar -> tglmul = '2028-07-26';
        $daftar -> tglsel = '2018-10-26';
        $daftar -> judul = 'membuat aplikasi';
        $daftar -> nugas = 'tugasan';
        $daftar -> save();
    }
}
