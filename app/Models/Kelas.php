<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    protected $fillable = ['nama_kelas'];

    // Method sesuai modul: getKelas()
    public static function getKelas()
    {
        return self::all();
    }

    // Relasi (opsional - untuk Eloquent)
    public function users()
    {
        return $this->hasMany(UserModel::class, 'kelas_id');
    }
}