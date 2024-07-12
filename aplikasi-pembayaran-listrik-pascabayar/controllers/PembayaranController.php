<?php
require '../config.php';

function getAllPembayaran() {
    global $conn;
    $stmt = $conn->query("
        SELECT p.*, t.id_tagihan, u.id_user
        FROM pembayaran p
        LEFT JOIN tagihan t ON p.id_tagihan = t.id_tagihan
        LEFT JOIN user u ON p.id_user = u.id_user
    ");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>