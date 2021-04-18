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
            ], // siswa
            [
                'name' => 'Nabyiiah',
                'username' => 'nabyiiah',
                'password' => bcrypt('rahasia'),
                'email' => 'siswa1@gmail.com',
                'role' => 'student',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Kholifah',
                'username' => 'kholifah',
                'password' => bcrypt('rahasia'),
                'email' => 'siswa2@gmail.com',
                'role' => 'student',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Natasya',
                'username' => 'natasya',
                'password' => bcrypt('rahasia'),
                'email' => 'siswa3@gmail.com',
                'role' => 'student',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Larassati',
                'username' => 'larassati',
                'password' => bcrypt('rahasia'),
                'email' => 'siswa4@gmail.com',
                'role' => 'student',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Jeaned',
                'username' => 'jeaned',
                'password' => bcrypt('rahasia'),
                'email' => 'siswa5@gmail.com',
                'role' => 'student',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], // guru
            [
                'name' => 'Prono',
                'username' => 'prono',
                'password' => bcrypt('rahasia'),
                'email' => 'guru1@gmail.com',
                'role' => 'teacher',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'aufaq',
                'username' => 'aufaq',
                'password' => bcrypt('rahasia'),
                'email' => 'guru2@gmail.com',
                'role' => 'teacher',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Juli',
                'username' => 'juli',
                'password' => bcrypt('rahasia'),
                'email' => 'guru3@gmail.com',
                'role' => 'teacher',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Sri',
                'username' => 'sri',
                'password' => bcrypt('rahasia'),
                'email' => 'guru4@gmail.com',
                'role' => 'teacher',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Joko',
                'username' => 'joko',
                'password' => bcrypt('rahasia'),
                'email' => 'guru5@gmail.com',
                'role' => 'teacher',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Dicky',
                'username' => 'dicky',
                'password' => bcrypt('rahasia'),
                'email' => 'guru6@gmail.com',
                'role' => 'teacher',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Budi',
                'username' => 'budi',
                'password' => bcrypt('rahasia'),
                'email' => 'guru7@gmail.com',
                'role' => 'teacher',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
