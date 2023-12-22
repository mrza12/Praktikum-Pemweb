<!-- resources/views/pesan.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemesanan</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
</head>
<body>
    <h1>Masukan Data!</h1>
    <form method="post" action="{{ route('submit-pesan')
    }}">
    @csrf
    <label for="nik">NIK:</label>
    <input type="text" id="nik" name="nik"
    required><br>
    <label for="nama">Nama:</label>
    <input type="nama" id="nama" name="nama"
    required><br>
    <label for="provinsi">Provinsi:</label>
    <input type="provinsi" id="provinsi" name="provinsi"
    required><br>
    <label for="kota">Kota:</label>
    <input type="kota" id="kota" name="kota"
    required><br>
    <label for="nomortelepon">Nomor Telepon:</label>
    <input type="nomortelepon" id="nomortelepon" name="nomortelepon"
    required><br>
    <button type="submit">Submit Data</button>
</body>
</html>