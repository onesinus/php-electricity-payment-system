<?php
// views/penggunaan_create.php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require '../config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Fetch pelanggan data for dropdown
$stmt = $conn->prepare("SELECT id_pelanggan, nama_pelanggan FROM pelanggan");
$stmt->execute();
$pelanggan_list = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_pelanggan = $_POST['id_pelanggan'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $meter_awal = $_POST['meter_awal'];
    $meter_akhir = $_POST['meter_akhir'];

    $stmt = $conn->prepare("INSERT INTO penggunaan (id_pelanggan, bulan, tahun, meter_awal, meter_akhir) VALUES (:id_pelanggan, :bulan, :tahun, :meter_awal, :meter_akhir)");
    $stmt->execute([
        'id_pelanggan' => $id_pelanggan,
        'bulan' => $bulan,
        'tahun' => $tahun,
        'meter_awal' => $meter_awal,
        'meter_akhir' => $meter_akhir
    ]);

    header("Location: view_penggunaan.php");
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
    <link rel="stylesheet" href="<?= $baseUrl ?>/css/custom.css">
    <title>Create Penggunaan - Electricity Payment System</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Create Penggunaan</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="id_pelanggan">ID Pelanggan</label>
                                <select name="id_pelanggan" class="form-control" id="id_pelanggan" required>
                                    <option value="">Select Pelanggan</option>
                                    <?php foreach ($pelanggan_list as $pelanggan): ?>
                                        <option value="<?= $pelanggan['id_pelanggan'] ?>"><?= $pelanggan['nama_pelanggan'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="bulan">Bulan</label>
                                <input type="text" name="bulan" class="form-control" id="bulan" required>
                            </div>
                            <div class="form-group">
                                <label for="tahun">Tahun</label>
                                <input type="text" name="tahun" class="form-control" id="tahun" required>
                            </div>
                            <div class="form-group">
                                <label for="meter_awal">Meter Awal</label>
                                <input type="text" name="meter_awal" class="form-control" id="meter_awal" required>
                            </div>
                            <div class="form-group">
                                <label for="meter_akhir">Meter Akhir</label>
                                <input type="text" name="meter_akhir" class="form-control" id="meter_akhir" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= $baseUrl ?>/js/jquery-3.7.1.min.js"></script>
    <script src="<?= $baseUrl ?>/js/bootstrap.min.js"></script>
    <script src="<?= $baseUrl ?>/js/custom.js"></script>
</body>
</html>
