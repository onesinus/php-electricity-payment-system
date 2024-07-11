<?php
require '../config.php';

function getAllPembayaran() {
    global $conn;
    $query = "SELECT p.id_pembayaran, p.id_tagihan, p.tanggal_pembayaran, p.biaya_admin, p.total_bayar, p.id_user
              FROM pembayaran p";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
