<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
        </tr>
        <?php foreach ($mahasiswa as $mhs): ?>
        <tr>
            <td><?= esc($mhs->nim) ?></td>
            <td><?= esc($mhs->nama) ?></td>
            <td><?= esc($mhs->prodi) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
