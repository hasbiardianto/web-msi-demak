<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;

    public $table = "pengurus";

    protected $fillable = [
        'poto',
        'nama',
        'jabatan',
        'deskripsi'
    ];
}
