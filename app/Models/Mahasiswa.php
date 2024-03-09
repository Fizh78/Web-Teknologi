<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    //protected $table = 'mahasiswas';//

    protected $fillable = ['nama', 'nim'];

    /**
     * relasi one to one
     */
    public function wali()
    {
        return $this->hasOne('App\Models\Wali','id_mahasiswa');
    }
    
    // /**
    //  * relasi one to many
    //  */
    // public function dosen()
    // {
    //     return $this->belongsTo('App\Models\Dosen','id_dosen');
    // }
}