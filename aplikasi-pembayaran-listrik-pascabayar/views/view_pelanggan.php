<?php
	include('../controllers/PelangganController.php');
	$pelanggan = getAllPelanggan();
	$content = 'pelanggan_list.php';
	include('template.php');
?>
