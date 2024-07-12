<?php
	if (session_status() == PHP_SESSION_NONE) {
    	session_start();
	}
	if (!isset($_SESSION['user_id'])) {
	    header("Location: views/login.php");
	    exit();
	}

	$content = 'home.php';
	include('views/template.php');
?>
