<?php
// controllers/TagihanController.php
include('../config.php');

function getAllTagihan() {
    global $conn;
    $stmt = $conn->query("SELECT tg.*, p.nama_pelanggan FROM tagihan tg JOIN penggunaan pg ON tg.id_penggunaan = pg.id_penggunaan JOIN pelanggan p ON pg.id_pelanggan = p.id_pelanggan");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
