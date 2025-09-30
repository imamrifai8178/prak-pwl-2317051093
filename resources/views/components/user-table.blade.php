<table class="table table-hover align-middle">
    <thead class="table-dark">
        <tr>
            <th width="5%">#</th>
            <th>Nama</th>
            <th>Email</th>
            <th width="20%" class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td class="text-center">
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm">
                        ✏️ Edit
                    </a>
                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Hapus user ini?')">
                            🗑️ Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-center text-muted">
                    <em>Belum ada user yang terdaftar</em>
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
