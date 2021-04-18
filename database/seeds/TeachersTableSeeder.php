<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            [
                'user_id' => 7,
                'nama_depan' => 'Prono',
                'nama_belakang' => 'Aji',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '1969-12-03',
                'alamat' => 'Jakarta',
                'Jabatan' => 'PKn',
                'Pendidikan' => 'S2',
                'no_handphone' => '087666624661',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 8,
                'nama_depan' => 'Muhammad',
                'nama_belakang' => 'Aufaq',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '1970-12-30',
                'alamat' => 'Jakarta',
                'Jabatan' => 'Agama',
                'Pendidikan' => 'S1',
                'no_handphone' => '087666624661',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 9,
                'nama_depan' => 'Juli',
                'nama_belakang' => 'Syaban',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '1878-07-14',
                'alamat' => 'Jakarta',
                'Jabatan' => 'PKn',
                'Pendidikan' => 'Komputer',
                'no_handphone' => '087666624661',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 10,
                'nama_depan' => 'Sri',
                'nama_belakang' => 'Finayani',
                'jenis_kelamin' => 'Perempuann',
                'tanggal_lahir' => '1966-07-06',
                'alamat' => 'Jakarta',
                'Jabatan' => 'IPS',
                'Pendidikan' => 'S2',
                'no_handphone' => '087666624661',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 11,
                'nama_depan' => 'Joko',
                'nama_belakang' => 'Suyono',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '1978-02-18',
                'alamat' => 'Jakarta',
                'Jabatan' => 'IPA',
                'Pendidikan' => 'S2',
                'no_handphone' => '087666624661',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 12,
                'nama_depan' => 'Dicky',
                'nama_belakang' => 'Zulkarnaen',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '1986-12-04',
                'alamat' => 'Jakarta',
                'Jabatan' => 'Bahasa Inggris',
                'Pendidikan' => 'D3',
                'no_handphone' => '087666624661',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 13,
                'nama_depan' => 'Budi',
                'nama_belakang' => '',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '1986-07-11',
                'alamat' => 'Jakarta',
                'Jabatan' => 'Matematika',
                'Pendidikan' => 'D3',
                'no_handphone' => '087666624661',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}
