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
            'title' => 'Perkembangan PKBM Taman Siswa',
            'slug' => \Str::slug('perkembangan-pkbm-taman-siswa'),
            'alamat_url' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/JJRAqmbVbOg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        ]);
    }
}
