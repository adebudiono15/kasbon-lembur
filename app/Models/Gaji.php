<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    protected $table = 'gaji';
    protected $primaryKey = "id";
    protected $fillable = [
        'id','kode_karyawan','nama','divisi', 'jabatan' ,'lembur','jhk','lembur'
    ];
}
