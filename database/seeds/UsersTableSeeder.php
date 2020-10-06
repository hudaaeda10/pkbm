<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Aeda Stren',
            'username' => 'aeda',
            'password' => bcrypt('codelyoko'),
            'email' => 'aeda@gmail.com',
            'role' => 'admin',
        ]);
    }
}
