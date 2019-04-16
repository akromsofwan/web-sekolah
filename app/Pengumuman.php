<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = 'pengumuman';
    protected $fillable = ['judul', 'gambar', 'deskripsi'];

    // protected $dates = [
    //     'created_at',
    //     'updated_at',
    //     'deleted_at'
    // ];
}
