<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $fillable = [
        'id_undangan', 'nama_tamu', 'telepon_tamu', 'kehadiran_tamu'
    ];
}