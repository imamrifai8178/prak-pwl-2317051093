@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body">
    <h3>Buat Pengguna Baru</h3>
    <form action="{{ route('user.store') }}" method="POST">
      @csrf

      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" id="nama"
               class="form-control @error('nama') is-invalid @enderror"
               value="{{ old('nama') }}">
        @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>

      <div class="mb-3">
        <label for="nim" class="form-label">NPM / NIM</label>
        <input type="text" name="nim" id="nim"
               class="form-control @error('nim') is-invalid @enderror"
               value="{{ old('nim') }}">
        @error('nim') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>

      <div class="mb-3">
        <label for="kelas_id" class="form-label">Kelas</label>
        <select name="kelas_id" id="kelas_id" class="form-select @error('kelas_id') is-invalid @enderror">
          <option value="">-- Pilih Kelas --</option>
          @foreach ($kelas as $kelasItem)
            <option value="{{ $kelasItem->id }}" {{ old('kelas_id') == $kelasItem->id ? 'selected' : '' }}>
              {{ $kelasItem->nama_kelas }}
            </option>
          @endforeach
        </select>
        @error('kelas_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>

      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</div>
@endsection
