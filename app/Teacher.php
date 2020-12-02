<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['user_id', 'nama_depan', 'nama_belakang', 'jenis_kelamin', 'tanggal_lahir', 'alamat', 'jabatan', 'pendidikan', 'no_handphone', 'avatar'];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTakeImageAttribute()
    {
        return "/storage/" . $this->avatar;
    }

    public function getAvatar()
    {
        if (!$this->avatar) {
            return asset('/admin/img/default-user.png');
        }

        return "/storage/" . $this->avatar;
    }
}
