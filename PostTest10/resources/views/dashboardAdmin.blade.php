<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())
}}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,
initial-scale=1">
<title>Data Telah Berhasil Disimpan!</title>
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
</head>
<body>
    <h1>Data Telah Berhasil Disimpan!</h1>
    <p>NIK: {{ $data['nik'] }}</p>
    <p>Nama: {{ $data['nama'] }}</p>
    <p>Provinsi: {{ $data['provinsi'] }}</p>
    <p>Kota: {{ $data['kota'] }}</p>
    <p>Nomor Telepon : {{ $data['nomortelepon'] }}</p>
</body>
</html>