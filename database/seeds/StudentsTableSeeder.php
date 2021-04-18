<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            [
                'user_id' => '2',
                'nama_depan' => 'Nabyiiah',
                'nama_belakang' => 'Agustin',
                'jenis_kelamin' => 'Perempuan',
                'pekerjaan' => 'Pelajar',
                'kelas_paket' => 'A',
                'alamat' => 'bogor',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => '3',
                'nama_depan' => 'Kholifah',
                'nama_belakang' => '',
                'jenis_kelamin' => 'Perempuan',
                'pekerjaan' => 'Pelajar',
                'kelas_paket' => 'B',
                'alamat' => 'bogor',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => '4',
                'nama_depan' => 'Natasya',
                'nama_belakang' => 'Aprillia Suki',
                'jenis_kelamin' => 'Perempuan',
                'pekerjaan' => 'Pelajar',
                'kelas_paket' => 'C',
                'alamat' => 'bogor',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => '5',
                'nama_depan' => 'Larassati',
                'nama_belakang' => 'Setio Agustin',
                'jenis_kelamin' => 'Perempuan',
                'pekerjaan' => 'Pelajar',
                'kelas_paket' => 'B',
                'alamat' => 'bogor',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => '6',
                'nama_depan' => 'Jeaned',
                'nama_belakang' => 'Sherina',
                'jenis_kelamin' => 'Perempuan',
                'pekerjaan' => 'Pelajar',
                'kelas_paket' => 'B',
                'alamat' => 'bogor',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
