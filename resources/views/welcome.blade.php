<!DOCTYPE html>
<html>
<head>
    <title>Halaman Utama</title>
</head>
<body>
    <h1>Selamat Datang</h1>

    <p>
        <a href="{{ route('profile', ['nama' => 'Refky Pirnando', 'npm' => '2317051026', 'kelas' => 'C']) }}">
            Lihat Profil Imam Rifai
        </a>
    </p>
</body>
</html>
