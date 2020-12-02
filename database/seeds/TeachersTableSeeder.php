<?php

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Teacher::create([
            'user_id' => '1',
            'nama_depan' => 'Karto',
            'nama_belakang' => 'Subroto',
            'jenis_kelamin' => 'Laki-Laki',
            'tanggal_lahir' => '1998-09-03',
            'alamat' => 'bogor',
            'jabatan' => 'Guru',
            'pendidikan' => 'S1',
            'no_handphone' => '08365338391'
        ]);
    }
}
