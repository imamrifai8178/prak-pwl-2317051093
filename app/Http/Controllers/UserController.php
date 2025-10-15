<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kelas;
use Illuminate\Support\Str;

class UserController extends Controller
{
    // 📜 Tampilkan daftar user
    public function index()
    {
        $users = User::with('kelas')->get();
        return view('users.list_user', compact('users'));
    }

    // ➕ Form tambah user
    public function create()
    {
        $kelas = Kelas::all();
        return view('users.create_user', compact('kelas'));
    }

    // 💾 Simpan user baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'npm' => 'required|string|unique:users,npm',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        User::create([
            'uuid' => Str::uuid(),
            'nama' => $request->nama,
            'npm' => $request->npm,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect()->route('users.index')->with('success', 'User baru berhasil ditambahkan!');
    }

    // ✏️ Form edit user
    public function edit($uuid)
    {
        $user = User::where('uuid', $uuid)->firstOrFail();
        $kelas = Kelas::all();
        return view('users.edit_user', compact('user', 'kelas'));
    }

    // 🔄 Update user
    public function update(Request $request, $uuid)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'npm' => 'required|string',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        $user = User::where('uuid', $uuid)->firstOrFail();
        $user->update([
            'nama' => $request->nama,
            'npm' => $request->npm,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect()->route('users.index')->with('success', 'Data user berhasil diperbarui!');
    }

    // ❌ Hapus user
    public function destroy($uuid)
    {
        $user = User::where('uuid', $uuid)->firstOrFail();
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Data user berhasil dihapus!');
    }
}
