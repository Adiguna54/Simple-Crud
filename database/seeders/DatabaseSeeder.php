<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 30; $i++) {
            DB::table('pegawais')->insert([
                'pegawai_nama' => substr($faker->name, 0, 20),
                'pegawai_jabatan' => substr($faker->jobTitle, 0, 10),
                'pegawai_umur' => $faker->numberBetween(23, 55),
                'pegawai_alamat' => $faker->address,
            ]);
        }

        // ambil semua data ID pada tabel pegawai
        $pegawaisID = DB::table('pegawais')->pluck('id');

        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 30; $i++) {
            DB::table('profiles')->insert([
                'no_telepon' => $faker->phoneNumber,
                'pegawai_id' => $faker->randomElement($pegawaisID)
            ]);
        }
    }
}
