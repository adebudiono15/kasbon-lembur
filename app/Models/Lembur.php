<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lembur extends Model
{
    protected $table = 'lembur';
    protected $fillable = ['id','kode_karyawan','total_lembur'];
}
