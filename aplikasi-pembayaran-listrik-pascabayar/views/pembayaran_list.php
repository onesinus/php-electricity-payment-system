<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pembayaran</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Daftar Pembayaran</h2>
        <table class="table table-striped table-bordered table-custom">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID Tagihan</th>
                    <th>Tanggal Pembayaran</th>
                    <th>Biaya Admin</th>
                    <th>Total Bayar</th>
                    <th>ID User</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pembayaran as $p): ?>
                    <tr>
                        <td><?= htmlspecialchars($p['id_pembayaran']) ?></td>
                        <td><?= htmlspecialchars($p['id_tagihan']) ?></td>
                        <td><?= htmlspecialchars($p['tanggal_pembayaran']) ?></td>
                        <td><?= htmlspecialchars($p['biaya_admin']) ?></td>
                        <td><?= htmlspecialchars($p['total_bayar']) ?></td>
                        <td><?= htmlspecialchars($p['id_user']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
