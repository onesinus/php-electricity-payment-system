<?php
include('../config.php');

function getAllPelanggan() {
    global $conn;
    $stmt = $conn->query("SELECT * FROM pelanggan");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
