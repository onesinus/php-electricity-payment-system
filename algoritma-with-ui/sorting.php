<?php
// Sorting logic goes here, assuming data is already fetched from DB or session
$angka = [70, 50, 90]; // Contoh data, ganti dengan data yang sebenarnya
sort($angka);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="mt-5">Hasil Sorting</h1>
    <ul class="list-group mt-4">
        <?php foreach ($angka as $value): ?>
            <li class="list-group-item"><?php echo $value; ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="index.php" class="btn btn-primary mt-3">Kembali ke Menu</a>
</div>
</body>
</html>
