<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'nama',
        'npm',  // ← ganti dari 'nim' ke 'npm'
        'kelas_id',
    ];


    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
