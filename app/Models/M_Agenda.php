<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Agenda extends Model
{
    use HasFactory;

    protected $table = 'agenda';
    protected $fillable = [
        'kegiatan',
        'tempat',
        'start',
        'end',
        'j_kegiatan',
        'keterangan'
    ];
    protected $hidden;
}
