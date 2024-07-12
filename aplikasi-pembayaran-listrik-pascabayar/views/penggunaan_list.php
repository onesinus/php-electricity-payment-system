<?php
// views/penggunaan_list.php
?>
<h2>Daftar Penggunaan Listrik</h2>
<a href="penggunaan_create.php" class="btn btn-success mb-2">Tambah Penggunaan</a>
<table class="table table-striped table-bordered table-custom">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Pelanggan</th>
            <th>Bulan</th>
            <th>Tahun</th>
            <th>Meter Awal</th>
            <th>Meter Akhir</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($penggunaan as $p): ?>
            <tr>
                <td><?= $p['id_penggunaan'] ?></td>
                <td><?= $p['nama_pelanggan'] ?></td>
                <td><?= $p['bulan'] ?></td>
                <td><?= $p['tahun'] ?></td>
                <td><?= $p['meter_awal'] ?></td>
                <td><?= $p['meter_akhir'] ?></td>
                <td>
                    <a href="penggunaan_edit.php?id=<?= $p['id_penggunaan'] ?>" class="btn btn-warning">Edit</a>
                    <a href="../controllers/PenggunaanController.php?action=delete&id=<?= $p['id_penggunaan'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
