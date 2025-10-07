<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    protected $fillable = ['nama_kelas'];

    public static function getKelas()
    {
        return self::all();
    }

    public function users()
    {
        return $this->hasMany(UserModel::class, 'kelas_id');
    }
}
