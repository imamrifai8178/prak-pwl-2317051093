<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: #ddd url('{{ asset('images/foto-refky.png') }}') center/cover no-repeat; */
            margin-bottom: 20px;
            border: 2px solid #ccc;
        }

        .info-box {
            background: #ddd;
            width: 200px;
            text-align: center;
            padding: 10px;
            margin: 8px 0;
            border-radius: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="profile-img"></div>

    <div class="info-box">{{ $nama }}</div>
    <div class="info-box">{{ $kelas }}</div>
    <div class="info-box">{{ $npm }}</div>

</body>
</html>
