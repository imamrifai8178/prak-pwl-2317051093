<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h3 class="mb-3">Daftar User</h3>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <a href="{{ route('user.create') }}" class="btn btn-success mb-3">+ Tambah User</a>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Kelas</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
        <tr>
          <td>{{ $user->nama }}</td>
          <td>{{ $user->nim }}</td>
          <td>{{ $user->kelas->nama_kelas ?? '-' }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
