<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    use HasFactory;

    //protected $table = 'mahasiswas';//

    protected $fillable = ['nama', 'id_mahasiswa'];

    public function mahasiswa()
    {
        return $this->belongsTo('App\Models\Mahasiswa','id_mahasiswa');
    }
}