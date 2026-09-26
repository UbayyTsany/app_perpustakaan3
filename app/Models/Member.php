<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    // Mengizinkan kolom-kolom ini untuk diisi data secara otomatis
    protected $fillable = [
        'nama', 
        'nim', 
        'email', 
        'nomor_telepon', 
        'alamat', 
        'status',
    ];
}