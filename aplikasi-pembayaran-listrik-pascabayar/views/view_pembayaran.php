<?php
include('../controllers/PembayaranController.php');
$pembayaran = getAllPembayaran();
$content = 'pembayaran_list.php';
include('template.php');
?>
