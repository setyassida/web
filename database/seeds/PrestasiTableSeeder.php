<?php

use Illuminate\Database\Seeder;
use App\prestasi;

class PrestasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prestasi = new prestasi;
        $prestasi->id = 'p1';
        $prestasi->juara = 'Juara 1';
        $prestasi->nama_lomba = 'Business & Social IT Competition FTIF ITS';
        $prestasi->save();

        $prestasi = new prestasi;
        $prestasi->id = 'p2';
        $prestasi->juara = 'Juara 2';
        $prestasi->nama_lomba = 'Apps Multimedia & Game Event (MAGE TMJ ITS)';
        $prestasi->save();

        $prestasi = new prestasi;
        $prestasi->id = 'p3';
        $prestasi->juara = 'Juara 2';
        $prestasi->nama_lomba = 'Apps  Vocompfest 2017 (Ilkom & SI-Vokasi UGM)';
        $prestasi->save();

        $prestasi = new prestasi;
        $prestasi->id = 'p4';
        $prestasi->juara = 'Juara 2';
        $prestasi->nama_lomba = 'Technobiz FTIF ITS';
        $prestasi->save();

        $prestasi = new prestasi;
        $prestasi->id = 'p5';
        $prestasi->juara = 'Juara 3 (TIM A)';
        $prestasi->nama_lomba = '90k code Universitas Ciputra';
        $prestasi->save();

        $prestasi = new prestasi;
        $prestasi->id = 'p6';
        $prestasi->juara = 'Finalis';
        $prestasi->nama_lomba = 'Gemastik 10 - Pengembangan Bisnis TIK';
        $prestasi->save();

        $prestasi = new prestasi;
        $prestasi->id = 'p7';
        $prestasi->juara = 'Finalis';
        $prestasi->nama_lomba = 'Go-Hackathon (GoJek)';
        $prestasi->save();

        $prestasi = new prestasi;
        $prestasi->id = 'p8';
        $prestasi->juara = 'Finalis (TIM B)';
        $prestasi->nama_lomba = '90k code Universitas Ciputra';
        $prestasi->save();

        $prestasi = new prestasi;
        $prestasi->id = 'p9';
        $prestasi->juara = 'Peringkat 5';
        $prestasi->nama_lomba = 'i-Fest Univ. Brawijaya';
        $prestasi->save();

        $prestasi = new prestasi;
        $prestasi->id = 'p10';
        $prestasi->juara = '20 Besar';
        $prestasi->nama_lomba = 'Appcelerate BPPU ITS';
        $prestasi->save();

        
    }
}
