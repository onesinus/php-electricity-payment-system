<?php
// views/template.php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $baseUrl = '/sertifikasi/aplikasi-pembayaran-listrik-pascabayar';
    ?>
    <link rel="stylesheet" href="<?= $baseUrl ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>/css/table.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>/css/custom.css">
    <title>Electricity Payment System</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <a class="navbar-brand" href="#">
            <img src="<?= $baseUrl ?>/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Electricity Payment System
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="<?= $baseUrl ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= $baseUrl ?>/views/view_pelanggan.php">Pelanggan</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= $baseUrl ?>/views/view_penggunaan.php">Penggunaan</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= $baseUrl ?>/views/view_pembayaran.php">Pembayaran</a></li>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <?php include_once $content; ?>
    </div>
    <script src="<?= $baseUrl ?>/js/jquery-3.7.1.min.js"></script>
    <script src="<?= $baseUrl ?>/js/bootstrap.min.js"></script>
    <script src="<?= $baseUrl ?>/js/jquery.dataTables.min.js"></script>
    <script src="<?= $baseUrl ?>/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= $baseUrl ?>/js/custom.js"></script>
</body>
</html>
