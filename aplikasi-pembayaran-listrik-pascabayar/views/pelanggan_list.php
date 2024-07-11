<h2>Daftar Pelanggan</h2>
<table class="table table-striped table-bordered table-custom">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th>Nomor KWH</th>
            <th>Daya</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pelanggan as $p): ?>
            <tr>
                <td><?= $p['id_pelanggan'] ?></td>
                <td><?= $p['username'] ?></td>
                <td><?= $p['nama_pelanggan'] ?></td>
                <td><?= $p['alamat'] ?></td>
                <td><?= $p['nomor_kwh'] ?></td>
                <td><?= $p['id_tarif'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
