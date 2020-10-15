<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['user_id', 'category_id', 'thumbnail', 'title', 'slug', 'alamat_url'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
