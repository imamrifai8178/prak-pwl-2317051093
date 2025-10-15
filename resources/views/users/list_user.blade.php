<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-light">
<div class="container mt-5">
  <div class="card shadow p-3">
    <h3 class="text-center mb-4">Daftar User</h3>

    @if(session('success'))
      <script>
        Swal.fire({
          title: 'Berhasil!',
          text: '{{ session("success") }}',
          icon: 'success',
          confirmButtonText: 'OK'
        });
      </script>
    @endif

    <div class="mb-3 text-end">
      <a href="{{ route('users.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Tambah User
      </a>
    </div>

    <table class="table table-bordered text-center align-middle">
      <thead class="table-dark">
        <tr>
          <th>Nama</th>
          <th>NIM</th>
          <th>Kelas</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
          <td>{{ $user->nama }}</td>
          <td>{{ $user->nim }}</td>
          <td>{{ $user->kelas->nama_kelas ?? '-' }}</td>
          <td>
            <a href="{{ route('users.edit', $user->uuid) }}" class="btn btn-warning btn-sm">
              <i class="bi bi-pencil-square"></i> Edit
            </a>
            <a href="{{ route('users.destroy', $user->uuid) }}" class="btn btn-danger btn-sm"
               onclick="return confirm('Yakin ingin menghapus user ini?')">
              <i class="bi bi-trash"></i> Hapus
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</body>
</html>
