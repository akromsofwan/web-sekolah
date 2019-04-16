<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostNews extends Model
{
    protected $table = 'post-news';
    protected $fillable = ['judul', 'gambar', 'post'];
}
