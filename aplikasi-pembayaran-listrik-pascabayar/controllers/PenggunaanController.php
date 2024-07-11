<?php
require '../config.php';

function getAllPenggunaan() {
    global $conn;
    $query = "SELECT pg.id_penggunaan, p.nama_pelanggan, pg.bulan, pg.tahun, pg.meter_awal, pg.meter_akhir
              FROM penggunaan pg
              JOIN pelanggan p ON pg.id_pelanggan = p.id_pelanggan";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
