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
                'nama' => 'Bahasa Indonesia',
                'semester' => 'Ganjil',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'teacher_id' => '1',
                'kode' => 'M002',
                'nama' => 'Bahasa Inggris',
                'semester' => 'Ganjil',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'teacher_id' => '1',
                'kode' => 'M003',
                'nama' => 'Bahasa Jepang',
                'semester' => 'Ganjil',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
