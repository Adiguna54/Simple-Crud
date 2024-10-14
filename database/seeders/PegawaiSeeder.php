<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // insert data ke table pegawai menggunakan Faker

        // $faker = Faker::create('id_ID');
        // for ($i = 1; $i <= 15; $i++) {

        //     try {
        //         throw new Exception("Error Processing Request", 1);
        //         DB::beginTransaction();
        //         $pegawai = new Pegawai();
        //         $pegawai->pegawai_nama = $faker->name;
        //         $pegawai->pegawai_jabatan = $faker->jobTitle;
        //         $pegawai->pegawai_umur = $faker->numberBetween(24, 60);
        //         $pegawai->pegawai_alamat = $faker->address;
        //         $pegawai->save;
        //         DB::commit();
        //     } catch (Exception $e) {
        //         DB::rollBack();
        //         // dd($e->getMessage());
        //     }
        // }

        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 30; $i++) {
            DB::table('pegawais')->insert([
                'pegawai_nama' => substr($faker->name, 0, 20),
                'pegawai_jabatan' => substr($faker->jobTitle, 0, 10),
                'pegawai_umur' => $faker->numberBetween(23, 55),
                'pegawai_alamat' => $faker->address,
            ]);
        }
    }
}
