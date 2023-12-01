<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Penghitung IPK</title> 
</head>
<body>

<?php

if (isset($_POST['nilai'])) {

  $jumlah_matkul = count($_POST['nilai']);
  
  $total_nilai = 0; //total nilai
  $total_sks = 0;  //jumlah Matakuliahyang diambil

  foreach ($_POST['nilai'] as $nilai) {
    $total_nilai += $nilai;
    $total_sks ++;
  }
  
  $ipk = $total_nilai / $total_sks;

  echo "<h3>Hasil Penghitungan IPK:</h3>";

  echo "Total Nilai: " . number_format($total_nilai, 2) . "<br>";
  echo "Jumlah Matakuliah yang diambil: " . number_format($total_sks, 2) . "<br>";
  echo "IPK: " . number_format($ipk, 2) . "<br>";

  if($ipk >= 2.80) {
    echo "<b>Status Kelulusan: LULUS</b>";
  } else {
    echo "<b>Status Kelulusan: TIDAK LULUS</b>"; 
  }

}
?>
<br>
<a href="http://localhost/PostTest8/index.html">Kembali</a>
</body>
</html>