<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $fillable = [
        'id_order', 'nama_user_review', 'isi_review', 'rating'
    ];
}