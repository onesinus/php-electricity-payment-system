<?php
// controllers/PenggunaanController.php
include('../config.php');

function getAllPenggunaan() {
    global $conn;
    $stmt = $conn->query("SELECT pg.*, p.nama_pelanggan FROM penggunaan pg JOIN pelanggan p ON pg.id_pelanggan = p.id_pelanggan");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Fungsi untuk menghapus data
function deletePenggunaan($id) {
    global $conn;

    // Hapus data dari tabel tagihan yang terkait dengan id_penggunaan
    $stmt = $conn->prepare("DELETE FROM tagihan WHERE id_penggunaan = ?");
    $stmt->execute([$id]);

    // Hapus data dari tabel penggunaan
    $stmt = $conn->prepare("DELETE FROM penggunaan WHERE id_penggunaan = ?");
    $stmt->execute([$id]);
    
    header("Location: ../views/view_penggunaan.php");
}

// Cek jika ada aksi delete
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id = $_GET['id'];
    deletePenggunaan($id);
}
?>
