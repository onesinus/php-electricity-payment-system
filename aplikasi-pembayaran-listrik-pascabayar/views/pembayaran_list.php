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
                <td><?= $p['id_pembayaran'] ?></td>
                <td><?= $p['id_tagihan'] ?></td>
                <td><?= $p['tanggal_pembayaran'] ?></td>
                <td><?= $p['biaya_admin'] ?></td>
                <td><?= $p['total_bayar'] ?></td>
                <td><?= $p['id_user'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
