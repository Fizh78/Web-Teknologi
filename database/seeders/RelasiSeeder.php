<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\Wali;
use App\Models\Dosen;
use Illuminate\Support\Facades\DB;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();

        //seeder dosen
        DB::table('dosens')->delete();
        $dosen = Dosen::create(array(
            'nama'=>'Eko',
            'nipd'=>'1234567890'
        ));

        $ani = Mahasiswa::create(array(
            'nama' => 'Ani',
            'nim' => 'D112111001',
            'id_dosen' => $dosen->id
        ));

        $budi = Mahasiswa::create(array(
            'nama' => 'Budi',
            'nim' => 'D112111002',
            'id_dosen' => $dosen->id
        ));

        $nia = Mahasiswa::create(array(
            'nama' => 'Nia',
            'nim' => 'D112111003',
            'id_dosen' => $dosen->id
        ));

        $this->command->info('Mahasiswa telah diisi!');

        Wali::create(array(
            'nama' => 'Henny A',
            'id_mahasiswa' => $ani->id,
        ));

        Wali::create(array(
            'nama' => 'Andi S',
            'id_mahasiswa' => $budi->id,
        ));

        Wali::create(array(
            'nama' => 'Viki D',
            'id_mahasiswa' => $nia->id,
        ));

        $this->command->info('Data Mahasiswa dan Wali telah diisi!');
    }
}