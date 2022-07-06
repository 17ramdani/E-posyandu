<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Imun extends Model
{
    use HasFactory;

    protected $table = 'imunisasi';
    protected $fillable = [
        'nama_anak',
        'j_imun',
        'tgl_imun',
        'booster',
        'ket_imun',
    ];
    protected $hidden;
}
