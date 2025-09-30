<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = ['nama', 'nim', 'kelas_id'];

    // Relasi ke kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    // Method sesuai modul: getUser() yang melakukan join ke tabel kelas
    public static function getUser()
    {
        return self::join('kelas', 'users.kelas_id', '=', 'kelas.id')
                   ->select('users.*', 'kelas.nama_kelas')
                   ->get();
    }
}
