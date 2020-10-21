<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['user_id', 'nama_depan', 'nama_belakang', 'jenis_kelamin', 'kelas_paket', 'pekerjaan', 'alamat', 'avatar'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // relasi dengan student dan course many to many
    public function courses()
    {
        return $this->belongsToMany(Course::class)->withPivot(['nilai']);
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
