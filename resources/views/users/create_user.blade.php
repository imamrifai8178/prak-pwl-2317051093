<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
  <div class="card p-4 shadow">
    <h3 class="mb-3 text-center">Form Tambah User</h3>

    <form action="{{ route('users.store') }}" method="POST">
      @csrf

      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
        @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>

      <div class="mb-3">
        <label for="npm" class="form-label">NPM</label>
        <input type="text" name="npm" id="npm"
         class="form-control @error('npm') is-invalid @enderror"
         value="{{ old('npm') }}">
        @error('npm') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>


      <div class="mb-3">
        <label class="form-label">Kelas</label>
        <select name="kelas_id" class="form-select @error('kelas_id') is-invalid @enderror">
          <option value="">-- Pilih Kelas --</option>
          @foreach($kelas as $k)
            <option value="{{ $k->id }}" {{ old('kelas_id') == $k->id ? 'selected' : '' }}>
              {{ $k->nama_kelas }}
            </option>
          @endforeach
        </select>
        @error('kelas_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>

      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</div>
</body>
</html>
