<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'nama_event',
        'tempat_event',
        'waktu_event',
        'tgl_event',
        'status',
        'keterangan',
        'gambar',
    ];
}
