<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sambutan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable =
    [
        'nama',
        'jabatan',
        'isi',
        'gambar'
    ];
}
