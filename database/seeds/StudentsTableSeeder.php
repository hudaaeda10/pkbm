<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Student::create([
            'nama_depan' => 'Karto',
            'nama_belakang' => 'Subroto',
            'jenis_kelamin' => 'Laki-Laki',
            'pekerjaan' => 'Guru',
            'kelas_paket' => 'C',
            'alamat' => 'bogor',
        ]);
    }
}
