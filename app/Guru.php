<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $fillable = ['nama', 'foto', 'pengampu', 'ttl', 'alamat', 'no_hp', 'motto'];
}
