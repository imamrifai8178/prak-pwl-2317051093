<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
  <div class="card p-4 shadow">
    <h3 class="mb-3 text-center">Edit Data User</h3>

    <form action="{{ route('users.update', $user->uuid) }}" method="POST">
      @csrf

      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" value="{{ $user->nama }}" required>
      </div>

      <div class="mb-3">
        <label for="npm" class="form-label">NPM</label>
        <input type="text" name="npm" class="form-control" value="{{ $user->npm }}" required>
      </div>


      <div class="mb-3">
        <label class="form-label">Kelas</label>
        <select name="kelas_id" class="form-select">
          @foreach($kelas as $k)
            <option value="{{ $k->id }}" {{ $user->kelas_id == $k->id ? 'selected' : '' }}>
              {{ $k->nama_kelas }}
            </option>
          @endforeach
        </select>
      </div>

      <button type="submit" class="btn btn-success">Simpan Perubahan</button>
      <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</div>
</body>
</html>
