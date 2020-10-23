<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['user_id', 'nama_depan', 'nama_belakang', 'jenis_kelamin', 'pekerjaan', 'alamat', 'jabatan', 'pendidikan', 'no_handphone', 'avatar'];

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