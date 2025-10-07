<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    // Menampilkan semua data (READ)
    public function index()
    {
        $data = MataKuliah::all();
        return view('list_mk', compact('data'));
    }

    // Menampilkan form tambah data (CREATE)
    public function create()
    {
        return view('create_mk');
    }

    // Menyimpan data baru (STORE)
    public function store(Request $request)
    {
        MataKuliah::create([
            'kode_mk' => $request->kode_mk,
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks
        ]);

        return redirect('/matakuliah')->with('success', 'Data berhasil disimpan!');
    }
}