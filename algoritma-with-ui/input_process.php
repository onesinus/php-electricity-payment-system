<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pembayaran_listrik";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$jumlah = $_POST['jumlah'];
$angka = [];

for ($i = 1; $i <= $jumlah; $i++) {
    $angka[] = $_POST['angka' . $i];
}

// Simpan data ke database atau session sesuai kebutuhan Anda

echo "Data berhasil disimpan!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Angka</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="mt-5">Data berhasil disimpan!</h1>
    <a href="index.php" class="btn btn-primary">Kembali ke Menu</a>
</div>
</body>
</html>
