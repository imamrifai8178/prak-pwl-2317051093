<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\Kelas;

class UserController extends Controller
{
    // Menampilkan daftar user
    public function index()
    {
        $users = UserModel::with('kelas')->get();
        return view('list_user', compact('users'));
    }

    // Menampilkan form create user
    public function create()
    {
        // Ambil semua data kelas dari tabel kelas
        $kelas = Kelas::all();

        // Kirim ke view create_user.blade.php
        return view('create_user', compact('kelas'));
    }

    // Menyimpan data user baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'nim' => 'required|string|max:15',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        UserModel::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect('/user')->with('success', 'Data user berhasil disimpan!');
    }
}
