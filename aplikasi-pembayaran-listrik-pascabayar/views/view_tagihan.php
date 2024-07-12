<?php
// views/view_tagihan.php
include('../controllers/TagihanController.php');
$tagihan = getAllTagihan();
$content = 'tagihan_list.php';
include('template.php');
?>
