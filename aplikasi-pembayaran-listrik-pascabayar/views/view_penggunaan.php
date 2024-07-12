<?php
	// views/view_penggunaan.php
	include('../controllers/PenggunaanController.php');
	$penggunaan = getAllPenggunaan();
	$content = 'penggunaan_list.php';
	include('template.php');
?>
