<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Anak extends Model
{
    use HasFactory;

    protected $table = 'anak';
    protected $fillable = [
        'nama_anak',
        'tempat_lhr',
        'tgl_lhr',
        'bb_lahir',
        'tb_lahir',
        'jenis_kelamin',
        'anak_ke',
        'jenis_persalinan',
        'tempat_persalinan',
        'dokter',
        'NIK_anak',
        'BPJS_anak'
    ];
    protected $hidden;
}
