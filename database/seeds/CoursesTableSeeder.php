<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'teacher_id' => '1',
                'kode' => 'M001',
                'nama' => 'PKn',
                'semester' => 'Ganjil',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'teacher_id' => '2',
                'kode' => 'M002',
                'nama' => 'Agama',
                'semester' => 'Ganjil',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'teacher_id' => '3',
                'kode' => 'M003',
                'nama' => 'Komputer',
                'semester' => 'Ganjil',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'teacher_id' => '4',
                'kode' => 'M004',
                'nama' => 'IPS',
                'semester' => 'Ganjil',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'teacher_id' => '5',
                'kode' => 'M005',
                'nama' => 'IPA',
                'semester' => 'Ganjil',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'teacher_id' => '6',
                'kode' => 'M006',
                'nama' => 'Bahasa Inggris',
                'semester' => 'Ganjil',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'teacher_id' => '7',
                'kode' => 'M007',
                'nama' => 'Matematika',
                'semester' => 'Ganjil',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
