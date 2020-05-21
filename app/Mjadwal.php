<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mjadwal extends Model
{
    protected $table = 'jadwal';
    protected $fillable = ['id', 'hari', 'jam' ];
}
