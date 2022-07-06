<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Timbang extends Model
{
    use HasFactory;

    protected $table = 'timbangan';
    protected $fillable = [
        'nama_anak',
        'umur',
        'bb',
        'tb',
        'tgl_timbang',
        'status_gizi',
        'ket_timbang',
        'ind_naik',
        'ind_t_lalu',
        'ind_b_lalu'
    ];
    protected $hidden;
}
