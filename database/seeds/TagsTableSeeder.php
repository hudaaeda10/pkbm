<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = collect(['SMK', 'Taman Siswa', 'Sejarah', 'Pariwisata', 'Otomotif', 'Belajar', 'Pemerintah', 'Agama', 'Classroom', 'Online']);
        $tags->each(function ($c) {
            \App\Tag::create([
                'name' => $c,
                'slug' => \Str::slug($c),
            ]);
        });
    }
}
