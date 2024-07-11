<h2>Daftar Penggunaan</h2>
<table class="table table-striped table-bordered table-custom">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Pelanggan</th>
            <th>Bulan</th>
            <th>Tahun</th>
            <th>Meter Awal</th>
            <th>Meter Akhir</th>
            <th>Jumlah Meter</th>
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
                <td><?= $p['meter_akhir'] - $p['meter_awal'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
