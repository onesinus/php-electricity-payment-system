<?php
// views/tagihan_list.php
?>
<h2>Daftar Tagihan Listrik</h2>
<table class="table table-striped table-bordered table-custom">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Pelanggan</th>
            <th>Bulan</th>
            <th>Tahun</th>
            <th>Jumlah Meter</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tagihan as $t): ?>
            <tr>
                <td><?= $t['id_tagihan'] ?></td>
                <td><?= $t['nama_pelanggan'] ?></td>
                <td><?= $t['bulan'] ?></td>
                <td><?= $t['tahun'] ?></td>
                <td><?= $t['jumlah_meter'] ?></td>
                <td><?= $t['status'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
