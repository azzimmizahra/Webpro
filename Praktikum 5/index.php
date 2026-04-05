<?php
// ARRAY ASOSIATIF
$mahasiswa = [
    "nama" => "Haifa Zahra Azzimmi",
    "nim" => "2311102163",
    "jurusan" => "Teknik Informatika"
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Array Asosiatif</title>
</head>
<body>

<h2>Data Mahasiswa</h2>

<ul>
    <li>Nama: <?php echo $mahasiswa["nama"]; ?></li>
    <li>NIM: <?php echo $mahasiswa["nim"]; ?></li>
    <li>Jurusan: <?php echo $mahasiswa["jurusan"]; ?></li>
</ul>

</body>
</html>