<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class prodi extends Model
{
    use HasFactory;

    protected $fillable = ['nama_prodi', 'kode_prodi'];
}
