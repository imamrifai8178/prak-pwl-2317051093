<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\Kelas;

class UserController extends Controller
{
    // menampilkan list user
    public function index()
{
    $users = \App\Models\User::all(); // ambil semua data user dari database
    return view('list_user', compact('users')); // kirim ke view list_user.blade.php
}


    // menampilkan form create
    public function create()
    {
        $kelas = Kelas::getKelas();
        $title = 'Buat Pengguna Baru';
        return view('create_user', compact('kelas', 'title'));
    }

    // menyimpan data
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:50|unique:users,nim',
            'kelas_id' => 'required|exists:kelas,id'
        ]);

        UserModel::create($data);

        return redirect()->route('user.index')->with('success', 'Pengguna berhasil ditambahkan.');
    }
}
