<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kasbon extends Model
{
    protected $table = 'kasbon';
    protected $fillable = ['id','kode_karyawan','total_kasbon'];
}
