<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Sholat</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Lokasi</th>
                <th>Daerah</th>
                <th>Tanggal</th>
                <th>Imsak</th>
                <th>Subuh</th>
                <th>Dzuhur</th>
                <th>Ashar</th>
                <th>Maghrib</th>
                <th>Isya</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $data['data']['id']; ?></td>
                <td><?php echo $data['data']['lokasi']; ?></td>
                <td><?php echo $data['data']['daerah']; ?></td>
                <td><?php echo $data['data']['jadwal']['tanggal']; ?></td>
                <td><?php echo $data['data']['jadwal']['imsak']; ?></td>
                <td><?php echo $data['data']['jadwal']['subuh']; ?></td>
                <td><?php echo $data['data']['jadwal']['dzuhur']; ?></td>
                <td><?php echo $data['data']['jadwal']['ashar']; ?></td>
                <td><?php echo $data['data']['jadwal']['maghrib']; ?></td>
                <td><?php echo $data['data']['jadwal']['isya']; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>