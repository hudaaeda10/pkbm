<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['kode', 'nama', 'semester'];

    public function students()
    {
        return $this->belongsToMany(Student::class)->withPivot(['nilai']);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
