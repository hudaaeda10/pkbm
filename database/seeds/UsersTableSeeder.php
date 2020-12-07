<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Aeda',
                'username' => 'aeda',
                'password' => bcrypt('rahasia'),
                'email' => 'aeda@gmail.com',
                'role' => 'admin',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'siswa',
                'username' => 'siswa',
                'password' => bcrypt('rahasia'),
                'email' => 'siswa@gmail.com',
                'role' => 'student',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'guru',
                'username' => 'guru',
                'password' => bcrypt('rahasia'),
                'email' => 'guru@gmail.com',
                'role' => 'teacher',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
