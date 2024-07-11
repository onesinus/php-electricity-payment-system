<?php
$search = $_POST['search'];
$angka = [70, 50, 90]; // Contoh data, ganti dengan data yang sebenarnya
$found = in_array($search, $angka);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Searching</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="mt-5">Hasil Searching</h1>
    <p class="mt-4"><?php echo $found ? "Angka ditemukan" : "Angka tidak ditemukan"; ?></p>
    <a href="searching.php" class="btn btn-primary">Kembali ke Searching</a>
</div>
</body>
</html>
