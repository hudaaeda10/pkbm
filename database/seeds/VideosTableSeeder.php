<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Video::create([
            'user_id' => '1',
            'category_id' => '1',
            'title' => 'Judul Film Pertama',
            'slug' => \Str::slug('judul-film-pertama'),
            'alamat_url' => 'https://www.youtube.com/watch?v=nBtH8qPqTGI',
        ]);
    }
}
