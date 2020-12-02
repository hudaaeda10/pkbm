<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['category_id', 'thumbnail', 'title', 'slug'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // public function author()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }

    public function getTakeImageAttribute()
    {
        return "/storage/" . $this->thumbnail;
    }
}
