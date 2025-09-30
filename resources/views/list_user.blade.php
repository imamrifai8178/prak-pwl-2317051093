@extends('layouts.app')

@section('content')
  <h3>Daftar Pengguna</h3>

  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NPM</th>
        <th>Kelas</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->nama }}</td>
          <td>{{ $user->nim }}</td>
          <td>{{ $user->nama_kelas ?? ($user->kelas->nama_kelas ?? '-') }}</td>
        </tr>
      @empty
        <tr>
          <td colspan="4" class="text-center">Belum ada data</td>
        </tr>
      @endforelse
    </tbody>
  </table>
@endsection
